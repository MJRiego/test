<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }

    public function members(){
        return view('members');
    }

    public function gradesPage(){
        return view('grades-page');
    }
    public function reqsPage(){
        return view('reqs-page');
    }
    public function allowancePage(){
        return view('allowance-page');
    }

    public function membersAdd(){
        return view('members-add');
    }
}
