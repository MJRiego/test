<?php

namespace App\Http\Controllers;
use App\Models\Members;
use App\Models\Grades;

use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function showGrades()
    {
        $membersModel = new Members();
        $members = $membersModel->getAllMembers();

        return view('grades-page', compact('members'));
    }
    public function showProfile(Request $request)
    {
        $memberID = $request->query('memberID');
        $year = $request->input('year');
        $sem = $request->input('sem');
        
        $membersModel = new Members();
        $gradesModel = new Grades();
        $members = $membersModel->getMember($memberID);
        $grades = $gradesModel->getMemberGrades($memberID);
        return view('grades', compact('memberID','year','sem', 'members','grades'));
    }
    public function selectYearSem(Request $request)
    {
        $memberID = $request->memberID;
        $year = $request->input('year');
        $sem = $request->input('sem');

        $gradesModel = new Grades();
        $membersModel = new Members();
        $members = $membersModel->getMember($memberID);

        if ($year == '' && $sem == ''){
            $grades = $gradesModel->getMemberGrades($memberID);
        } else if($sem == ''){
            $grades = $gradesModel->getMemberGradesByYear($memberID,$year);
        } else if ($year == '') {
            $grades = $gradesModel->getMemberGradesBySem($memberID,$sem);
        }
        else { $grades = $gradesModel->getMemberGradesByYearSem($memberID,$year,$sem); }
        
        return view('grades', compact('memberID','year', 'sem','grades','members'));
    }
    public function addGrades()
    {
        return view('grades-add');
    }

    public function editGrades()
    {
        return view('grades-edit');
    }

    public function deleteGrades()
    {
        return view('grades-delete');
    }

}
