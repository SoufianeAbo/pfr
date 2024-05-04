<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Employees;
use App\Models\Game;
use App\Models\Genres;
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
            return redirect()->back()->with('success', 'Your credentials are wrong, try again.');
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
        
        $acceptedApplications = Applications::all()->where('status', 'Accepted')->sortByDesc('created_at')->take(3);
        $rejectedApplications = Applications::all()->where('status', 'Rejected')->sortByDesc('created_at')->take(3);

        $createdGame = Game::where('creatorID', $employee->id)->first();
        if ($createdGame !== null) {
            $firstExt = substr($createdGame->assets->gridVertical, 0, 4);
            $workers = Employees::where('gameID', $createdGame->id)->get();
        }

        $genres = Genres::all();

        switch ($currentUser->role->special) {
            case 'hr':
                return view('employee.hr.dashboard', compact('applications', 'employee', 'acceptedApplications', 'rejectedApplications', 'acceptAppCount', 'rejectAppCount'));

            case 'gamedesigner':
                if ($createdGame == null) {
                    return view('employee.gd.dashboard', compact('employee', 'genres'));   
                } else {
                    return view('employee.gd.dashboardcreator', compact('employee', 'genres', 'createdGame', 'firstExt', 'workers'));
                }

            default:
                return redirect()->route('logout');
        }
    }
}
