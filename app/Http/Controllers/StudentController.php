<?php

namespace App\Http\Controllers;
use App\Models\Student;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function onlinereg()
    {
        return view('onlinereg');
    }
    public function store(Request $request)
    {
        $sessions = request()->session()->get('users.id');     
        $ses_userid = $sessions[0];
        $student = Student::find($ses_userid) ;
        $student->name = $request->input('name');
        $student->gender = $request->input('gender');
        $student->dob = $request->input('dob');
        $student->class = $request->input('class');
        $student->birth_place = $request->input('birth_place');
        $student->nationality = $request->input('nationality');
        $student->religion = $request->input('religion');
        $student->mother_tongue = $request->input('mother_tongue');
        $student->sib1_name = $request->input('sib1_name');
        $student->sib1_cls_sec = $request->input('sib1_cls_sec');
        $student->sib2_name = $request->input('sib2_name');
        $student->sib2_cls_sec = $request->input('sib2_cls_sec');
        $student->phy_clg = $request->input('phy_clg');
        $student->slp_need = $request->input('slp_need');
        $student->aadhar = $request->input('aadhar');
        $student->transport = $request->input('transport');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $student->image = $filename;
        }

        $student->update();
        return redirect('/parents_details');
    } 

    
}