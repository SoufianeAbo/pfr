<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(): View
    {
        return view('login');
    }

    public function userIndex(): View
    {
        $applications = Applications::all()->where('status', 'Pending');
        $employee = Auth::user();

        return view('employee.dashboard', compact('applications', 'employee'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            if (auth()->check()) {
                $role = auth()->user()->role->special;
    
                switch ($role) {
                    case 'hr':
                        return redirect()->route('hr.index');
    
                    default:
                        return redirect()->route('logout');
                }
            }
        } else {
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
