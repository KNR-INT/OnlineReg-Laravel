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
        $page_type = $request->input('page_type');
        
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
        if($page_type == "1to9" || $page_type == "11")
        {
        DB::table('old_school')->where("appli_id",$appli_id)->delete();
                    $from_year = $request->input('from_year');
                    $to_year = $request->input('to_year');
                    $from_class = $request->input('from_class');
                    $to_class = $request->input('to_class');
                    $school_name = $request->input('school_name');
                    $country = $request->input('country');
                    $city = $request->input('city');
                    $state = $request->input('state');
                    
                    $count = count($from_year); // Assuming all arrays have the same length
                    for ($i = 0; $i < $count; $i++) {
                        $data = array(
                            "from_year" => isset($from_year[$i]) ? $from_year[$i] : null,
                            "from_class" => isset($from_class[$i]) ? $from_class[$i] : null,
                            "to_year" => isset($to_year[$i]) ? $to_year[$i] : null,
                            "to_class" => isset($to_class[$i]) ? $to_class[$i] : null,
                            "school_name" => isset($school_name[$i]) ? $school_name[$i] : null,
                            "city" => isset($city[$i]) ? $city[$i] : null,
                            "state" => isset($state[$i]) ? $state[$i] : null,
                            "country" => isset($country[$i]) ? $country[$i] : null,
                            "appli_id" => $appli_id
                        );
                    
                        DB::table('old_school')->insert($data);
                    }
                    
                }
         return redirect('/application_details/a?class='.$page_type."&appli_id=".$appli_id); 
                    }

        public function upload_doc(){
            $imageData= Image::all();
            return view('application_details');
        }
        

    }   
   