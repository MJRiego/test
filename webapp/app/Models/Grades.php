<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    use HasFactory;
    protected $table = 'grades';
  
    public function getMemberGrades($memberID)
    {
        return $this->select('gradeID','memberID', 'yearlevel', 'semester','course','code', 'unit', 'grades')
            ->where('memberID', $memberID)
            ->orderByRaw("CASE
                WHEN yearlevel = '1st Year' THEN 1
                WHEN yearlevel = '2nd Year' THEN 2
                WHEN yearlevel = '3rd Year' THEN 3
                WHEN yearlevel = '4th Year' THEN 4
                ELSE 5
            END ASC")
            ->get();
    }
    public function getMemberGradesByYearSem($memberID, $year, $sem)
    {
        return $this->select('gradeID','memberID', 'yearlevel', 'semester','course','code', 'unit', 'grades')
            ->where('memberID', $memberID)
            ->where('yearlevel', $year)
            ->where('semester', $sem)
            ->get();
    }
    public function getMemberGradesByYear($memberID, $year)
    {
        return $this->select('gradeID','memberID', 'yearlevel', 'semester','course','code', 'unit', 'grades')
            ->where('memberID', $memberID)
            ->where('yearlevel', $year)
            ->orderByRaw("CASE
                WHEN yearlevel = '1st Year' THEN 1
                WHEN yearlevel = '2nd Year' THEN 2
                WHEN yearlevel = '3rd Year' THEN 3
                WHEN yearlevel = '4th Year' THEN 4
                ELSE 5
            END ASC")
            ->get();
    }
    public function getMemberGradesBySem($memberID, $sem)
    {
        return $this->select('gradeID','memberID', 'yearlevel', 'semester','course','code', 'unit', 'grades')
            ->where('memberID', $memberID)
            ->where('semester', $sem)
            ->orderByRaw("CASE
                WHEN yearlevel = '1st Year' THEN 1
                WHEN yearlevel = '2nd Year' THEN 2
                WHEN yearlevel = '3rd Year' THEN 3
                WHEN yearlevel = '4th Year' THEN 4
                ELSE 5
            END ASC")
            ->get();
    }

}
