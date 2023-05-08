<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Student as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable =[' name',
    'gender',
    'dob',
    'class',
    'birth_place',
    'nationality',
    'religion',
    'mother_tongue',
    'phy_clg',
    'slp_need',
    'aadhar',
    'transport'];
}
