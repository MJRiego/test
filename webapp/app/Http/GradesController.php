<?php

namespace App\Http\Controllers;
use App\Models\Members;

use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function showGrades()
    {
        $membersModel = new Members();
        $members = $membersModel->getAllMembers();

        return view('grades-page', compact('members'));
    }
    public function editProfile()
    {
        return view('profile-edit');
    }

    public function deleteProfile()
    {
        return view('profile-delete');
    }
}
