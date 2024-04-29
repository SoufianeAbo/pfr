<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        return view('login');
    }

    public function userIndex(): View
    {
        $applications = Applications::all()->where('status', 'Pending');
        return view('employee.dashboard', compact('applications'));
    }
}
