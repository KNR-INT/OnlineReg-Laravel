<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    function onlinereg()
    {
        return view('onlinereg');
    }


    
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->gender = $request->input('gender');
        $student->dob = $request->input('dob');
        $student->class = $request->input('class');
        $student->birth_place = $request->input('birth_place');
        $student->nationality = $request->input('nationality');
        $student->religion = $request->input('religion');
        $student->mother_tongue = $request->input('mother_tongue');
        $student->phy_clg = $request->input('phy_clg');
        $student->aadhar = $request->input('aadhar');
        $student->transport = $request->input('transport');
        $student->save();
        return redirect('/parents_details');
    } 
    
}
