<?php

namespace App\Http\Controllers;

use App\Mail\AcceptationMail;
use App\Mail\RejectionMail;
use App\Models\Applications;
use App\Models\Employees;
use App\Models\Roles;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HRController extends Controller
{
    public function index(): View
    {
        $applications = Applications::all()->where('status', 'Pending');
        $employee = Auth::user();

        $acceptAppCount = count(Applications::all()->where('status', 'Accepted'));
        $rejectAppCount = count(Applications::all()->where('status', 'Rejected'));
        
        $acceptedApplications = Applications::all()->where('status', 'Accepted')->take(3);
        $rejectedApplications = Applications::all()->where('status', 'Rejected')->take(3);

        return view('employee.hr.dashboard', compact('applications', 'employee', 'acceptedApplications', 'rejectedApplications', 'acceptAppCount', 'rejectAppCount'));
    }

    public function accept(Request $request)
    {
        $application = Applications::find($request->applicationID);
        $randomPass = Str::password(8, true, true, true, false);

        $picture = $application->picture;

        $employee = new Employees;
        $employee->email = $application->email;
        $employee->password = bcrypt($randomPass);
        $employee->roleID = $application->roleID;
        $employee->applicationID = $application->id;
        $employee->save();

        $application->status = 'Accepted';
        $application->save();

        $email = $employee->email;
        $password = $randomPass;
        $firstName = $application->firstName;
        $lastName = $application->lastName;
        $position = $application->role->roleName;

        Mail::to('abounasrsoufiane@gmail.com')->send(new AcceptationMail($email, $password, $firstName, $lastName, $picture, $position));

        return redirect()->route('hr.index')->with('success', 'Applicant ' . $application->firstName . ' has been accepted and an e-mail has been sent!');
    }

    public function reject(Request $request)
    {
        $application = Applications::find($request->applicationID);
        $picture = $application->picture;

        $application->status = 'Rejected';
        $application->save();

        $firstName = $application->firstName;
        $lastName = $application->lastName;
        $position = $application->role->roleName;

        Mail::to('abounasrsoufiane@gmail.com')->send(new RejectionMail($firstName, $lastName, $position, $picture));

        return redirect()->route('hr.index')->with('success', 'Applicant ' . $application->firstName . ' has been rejected and an e-mail has been sent!');
    }

    public function rolesPage() {
        $employee = Auth::user();
        $roles = Roles::all();
        $employees = count(Employees::all());

        return view('employee.hr.roles', compact('employee', 'roles', 'employees'));
    }
}
