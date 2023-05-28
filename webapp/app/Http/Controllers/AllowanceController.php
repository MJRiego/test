<?php

namespace App\Http\Controllers;
use App\Models\Members;

use Illuminate\Http\Request;

class AllowanceController extends Controller
{
    public function showAllowance()
    {
        $membersModel = new Members();
        $members = $membersModel->getAllMembers();

        return view('allowance-page', compact('members'));
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
