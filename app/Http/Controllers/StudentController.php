<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Image;


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
       
        $appli_id = $request->input('appli_id');
        $student = Student::find($appli_id) ;
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
        $student->sibling_change = $request->input('sibling_change');
        $student->phy_clg = $request->input('phy_clg');
        $student->slp_need = $request->input('slp_need');
        $student->aadhar = $request->input('aadhar');
        $student->transport = $request->input('transport');
        $student->link_class = $request->input('page_type');
        $student->sec_language = $request->input('sec_language');
        $student->third_language = $request->input('third_language');
        // $student->image = $request->input('image');
       
        // if ($student) {
        //     $request->validate([
        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:20971520',
        //     ]);
        
        //     if ($request->file('image')->isValid()) {
        //         $imageName = $appli_id . '_student_aadhar.' . $request->image->extension();
        //         $request->image->move(public_path('public\Image'), $imageName);
                
        //         $student->image = $imageName;
               

                
        //     }

            
        // }
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:20971520',
            ]);
    
            if ($request->file('image')->isValid()) {
                $imageName = $appli_id . '_student_aadhar.' . $request->image->extension();
                $request->image->move(public_path('public\Image'), $imageName);
    
                // Save the image path in the 'image' column of the 'students' table without the 'public' folder part
                $student->image = 'public\Image/' . $imageName;
            }
        }

        $student->update();
        
        $class = $request->input('page_type');
        return redirect('/parents_details/a?class='.$class."&appli_id=".$appli_id);
    }   
    public function updateapplino(Request $request)
    {
       
        $appli_id = $request->input('appli_id');
        $student = Student::find($appli_id) ;
        $student->application_no = $request->input('appli_no');
        $student->update();
             
        $class = $request->input('page_type');
        return redirect('/payment/a?class='.$class."&appli_id=".$appli_id);
    }
    public function updateadmitted(Request $request)
    {
       
        $appli_id = $request->input('appli_id');
        $student = Student::find($appli_id) ;
        $student->application_no = $request->input('appli_no');
        $student->update();
             
        $class = $request->input('page_type');
        return redirect('/paytm_appli/a?appli_id='.$appli_id);
        // $student = DB::select("SELECT * FROM `students` WHERE `status` = 'Submitted ' AND `user_id` = '$ses_userid'");

    }
}