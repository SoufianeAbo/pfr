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

    public function jobOffer($career)
    {
        $role = Roles::find($career);
        $openPositions = Roles::all()->where('availability', 'available');

        if ($role->availability == 'full') {
            return redirect('/careers#error')->with('success', 'You cannot access this page as the position is full!');
        }

        return view('careersapply', compact('role', 'openPositions'));
    }

    public function apply(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'firstName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'email' => 'required|unique:employee,email|max:255',
            'phone' => 'required',
            'city' => 'required',
            'resume' => 'required|extensions:pdf,doc,docx,txt,rtf',
            'picture' => 'required|mimes:png,jpg',
            'coverLetter' => 'nullable|extensions:pdf,doc,docx,txt,rtf',
            'country' => 'required',
            'linkedinProfile' => 'nullable',
            'portfolio' => 'nullable',
            'source' => 'required',
            'salaryExpectation' => 'nullable|numeric',
            'roleID' => 'required',
            'status' => 'nullable',
        ]);

        if ($validated->fails()) {
            return redirect()
                    ->route('careers.joboffer', ['career' => $request->roleID, '#error'])
                    ->withErrors($validated)
                    ->withInput();
        }

        $resumePath = $request->file('resume')->store('public/applications');
        $resumePath = str_replace('public/', '', $resumePath);
        $picturePath = $request->file('picture')->store('public/applications');
        $picturePath = str_replace('public/', '', $picturePath);
        
        if ($request->file('coverLetter') !== null) {
            $coverLetterPath = $request->file('coverLetter')->store('public/applications');
            $coverLetterPath = str_replace('public/', '', $coverLetterPath);
        }

        $application = new Applications;

        $application->fill($request->except(['resume', 'picture', 'coverLetter']));

        $application->roleID = $request->roleID;
        $application->status = 'Pending';

        $application->resume = $resumePath;
        $application->picture = $picturePath;

        if ($request->file('coverLetter') !== null) {
            $application->coverLetter = $coverLetterPath;
        }

        $application->save();

        return redirect()->route('thank.you');

    }

    public function thankyou(): View
    {
        return view('thankyou');
    }
}
