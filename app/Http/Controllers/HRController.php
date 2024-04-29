<?php

namespace App\Http\Controllers;

use App\Mail\AcceptationMail;
use App\Models\Applications;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HRController extends Controller
{
    public function accept(Request $request)
    {
        $application = Applications::find($request->applicationID);
        $randomPass = Str::password(8, true, true, true, false);

        $employee = new Employees;
        $employee->email = $application->email;
        $employee->password = bcrypt($randomPass);
        $employee->roleID = $application->roleID;
        $employee->applicationID = $application->id;

        $application->status = 'Accepted';
        $application->save();

        $email = $employee->email;
        $password = $randomPass;
        $firstName = $application->firstName;
        $lastName = $application->lastName;
        $picture = $application->picture;

        Mail::to('abounasrsoufiane@gmail.com')->send(new AcceptationMail($email, $password, $firstName, $lastName, $picture));

        return redirect()->route('user.index')->with('success', 'Applicant ' . $application->firstName . ' has been accepted and an e-mail has been sent!');
    }
}
