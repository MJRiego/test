<?php

namespace App\Http\Controllers;
use App\Models\Members;

use Illuminate\Http\Request;

class RequirementsController extends Controller
{
    public function showRequirements()
    {
        $membersModel = new Members();
        $members = $membersModel->getAllMembers();

        return view('reqs-page', compact('members'));
    }
    public function addMembers()
    {
        return view('members-add');
    }
}
