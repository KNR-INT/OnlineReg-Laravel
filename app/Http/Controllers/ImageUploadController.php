<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
class ImageUploadController extends Controller
{
    //Add image
    public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeImage(Request $request){
        //  echo public_path('public\Image');
            $appli_id = $request->input('appli_id');
            $class = $request->input('class');
            if ($request->file('student_aadhar_card')) {
               $file= $request->file('Fathers_Aadhar_card');
                $file= $request->file('Birth_Certificate_Of_Student');
                $file= $request->file('Mothers_Aadhar_card');
                $file= $request->file('Previous_year_Marks_Cards');

               
            }
            $student = Student::find($appli_id);

        $data= new Student();

    
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
        ]);

        if ($request->file('image')->isValid()) {
            $imageName = $appli_id . '_student_aadhar.' . $request->image->extension();
            $request->image->move(public_path('public\Image'), $imageName);

                $student->student_adr=$imageName;
                $student->father_aadhar=$imageName;
                $student->birth_cer=$imageName;
                $student->mother_aadhar=$imageName;
                $student->pre_year_markcard=$imageName;


 

     $student->update();
           
        } 
                   
        $class = $request->input('page_type');
         return redirect('/application_details/a?class='.$class."&appli_id=".$appli_id); 
                
       
    }
		//View image
        public function upload_doc(){
            $imageData= Image::all();
            return view('application_details');
        }
        

    }   
   