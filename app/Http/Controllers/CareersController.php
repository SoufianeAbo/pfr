<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index(): View
    {
        $careers = Roles::all();
        return view('careers', compact('careers'));
    }

    public function jobOffer($career): View
    {
        $role = Roles::find($career);
        $openPositions = Roles::all()->where('availability', 'available');

        return view('careersapply', compact('role', 'openPositions'));
    }
}
