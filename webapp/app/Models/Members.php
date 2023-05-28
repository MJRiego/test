<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'memberID';
    public function getAllMembers()
    {
        return $this->select('memberID', 'firstname', 'midinitial', 'lastname' , 'batchnum', 'school', 'college', 'yearlevel', 'program', 'major', 'acceptdate', 'age', 'sex', 'birthdate', 'civilstatus', 'religion', 'mobile', 'email', 'address')
            ->selectRaw("CONCAT(firstname, ' ', midinitial, ' ', lastname) as Fullname")
            ->orderBy('memberID')
            ->get();
    }

    public function getMember($memberID)
    {
        return $this->select('firstname', 'midinitial', 'lastname' , 'memberID', 'batchnum', 'school', 'college', 'yearlevel', 'program', 'major', 'acceptdate', 'age', 'sex', 'birthdate', 'civilstatus', 'religion', 'mobile', 'email', 'address')
            ->selectRaw("CONCAT(firstname, ' ', midinitial, ' ', lastname) as Fullname")
            ->where('memberID', $memberID)
            ->get();
    }


    protected $fillable = [
        'firstname',
        'midinitial',
        'lastname',
        'age',
        'sex',
        'birthdate',
        'civilstatus',
        'religion',
        'mobile',
        'email',
        'address',
        'batchnum',
        'school',
        'college',
        'yearlevel',
        'program',
        'major',
        'acceptdate'
    ];
}
