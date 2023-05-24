<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Student as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'upload_docs';
    protected $fillable =['image',
    'birth_cer',
    'father_aadhar',
    'mother_aadhar',
    'stu_passport',
    'pre_year_markcard',
    'from_year',
    'to_year',
    'from_class',
    'to_class',
    'school_name',
    'country',
    'city',
    'state',
    'created_at',
    'updated_at',
];

}