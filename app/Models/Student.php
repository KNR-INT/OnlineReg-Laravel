<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Student as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable =['link_class',
    'name',
    'gender',
    'dob',
    'class',
    'birth_place',
    'nationality',
    'religion',
    'mother_tongue',
    'sib1_name',
    'sib1_cls_sec',
    'sib2_name',
    'sib2_cls_sec',
    'phy_clg',
    'slp_need',
    'aadhar',
    'transport',
    'image',
    'sec_language',
    'third_language',
    'student_adr',
    'father_aadhar',
    'birth_cer',
    'mother_aadhar',
    'pre_year_markcard'
];
   
}