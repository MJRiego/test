<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function showMembers()
    {
        $membersModel = new Members();
        $members = $membersModel->getAllMembers();

        return view('members', compact('members'));
    }
    public function addMembers()
    {
        return view('members-add');
    }

    public function addNewMembers(Request $request)
    {
        if (request()->has('submit')) { // Check if the form is submitted

            // Get the form input values
            $membersData = request()->validate([
                'firstname' => 'required',
                'midinitial' => 'nullable',
                'lastname' => 'required',
                'age' => 'required',
                'sex' => 'required',
                'birthdate' => 'required',
                'civilstatus' => 'required',
                'religion' => 'required',
                'mobile' => 'required',
                'email' => 'nullable|email',
                'address' => 'required',
                'batchnum' => 'required',
                'school' => 'required',
                'college' => 'required',
                'yearlevel' => 'required',
                'program' => 'required',
                'major' => 'nullable',
                'acceptdate' => 'required',
            ]);

            $membersData['Fullname'] = $membersData['firstname'] . ' ' . $membersData['midinitial'] . ' ' . $membersData['lastname'];

            Members::create($membersData);
            return view('members-add');
        }
    }

   

}
