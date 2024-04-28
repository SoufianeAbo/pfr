<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Roles;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function apply(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'firstName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'email' => 'required|unique:employees,email|max:255',
            'phone' => 'required',
            'city' => 'required',
            'resume' => 'required|extensions:pdf,doc,docx,txt,rtf',
            'picture' => 'required|mimes:png,jpg',
            'coverLetter' => 'required|extensions:pdf,doc,docx,txt,rtf',
            'country' => 'required',
            'linkedinProfile' => 'nullable',
            'portfolio' => 'nullable',
            'source' => 'required',
            'salaryExpectation' => 'nullable',
        ]);

        if ($validated->fails()) {
            return redirect()
                    ->route('careers.jobOffer', ['career' => $request->id])
                    ->withErrors($validated)
                    ->withInput();
        }

        $application = new Applications;

        $application->fill($validated->validated());
        $application->save();

        return redirect()->route('thank.you');

    }

    public function thankyou(): View
    {
        return view('thankyou');
    }
}
