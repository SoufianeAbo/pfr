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
                return redirect()->route('dashboard');
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

    public function dashboard()
    {
        $currentUser = Auth::user();

        $applications = Applications::all()->where('status', 'Pending');
        $employee = Auth::user();

        $acceptAppCount = count(Applications::all()->where('status', 'Accepted'));
        $rejectAppCount = count(Applications::all()->where('status', 'Rejected'));
        
        $acceptedApplications = Applications::all()->where('status', 'Accepted')->take(3);
        $rejectedApplications = Applications::all()->where('status', 'Rejected')->take(3);

        switch ($currentUser->role->special) {
            case 'hr':
                return view('employee.hr.dashboard', compact('applications', 'employee', 'acceptedApplications', 'rejectedApplications', 'acceptAppCount', 'rejectAppCount'));

            case 'gamedesigner':
                return view('employee.gd.dashboard', compact('employee'));

            default:
                return redirect()->route('logout');
        }
    }
}
