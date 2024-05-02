<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GDController extends Controller
{
    public function index()
    {
        $employee = Auth::user();

        return view('employee.gd.dashboard', compact('employee'));
    }
}