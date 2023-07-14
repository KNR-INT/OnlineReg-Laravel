<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Oldschool;
use Illuminate\Support\Facades\DB;

class ImageUploadController extends Controller
{
    //Add image
    public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeImage(Request $request)
    {
        $appli_id = $request->input('appli_id');
        $class = $request->input('class');
        
        // Retrieve the student object
        $student = Student::find($appli_id);
        
        if ($student) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            ]);
        
            if ($request->file('image')->isValid()) {
                $imageName = $appli_id . '_student_aadhar.' . $request->image->extension();
                $request->image->move(public_path('public\Image'), $imageName);
                
                $student->student_adr = $imageName;
                $student->father_aadhar = $imageName;
                $student->birth_cer = $imageName;
                $student->mother_aadhar = $imageName;
                $student->pre_year_markcard = $imageName;
            }
        }
        $student->update();
        DB::table('old_school')->where("appli_id",$appli_id)->delete();
                    $from_year = $request->input('from_year');
                    $to_year = $request->input('to_year');
                    $from_class = $request->input('from_class');
                    $to_class = $request->input('to_class');
                    $school_name = $request->input('school_name');
                    $country = $request->input('country');
                    $city = $request->input('city');
                    $state = $request->input('state');
                    
                    for($i = 0; $i < count($from_year); $i++)
                    {
                        $data = array("from_year" => $from_year[$i],"from_class" => $from_class[$i],"to_year" => $to_year[$i],"to_class" => $to_class[$i],"school_name" => $school_name[$i],"city" => $city[$i],"state" => $state[$i],"country" => $country[$i],"appli_id" => $appli_id);
                        DB::table('old_school')->insert($data);
                    }
        $class = $request->input('page_type');
         return redirect('/application_details/a?class='.$class."&appli_id=".$appli_id); 
                    }

        public function upload_doc(){
            $imageData= Image::all();
            return view('application_details');
        }
        

    }   
   