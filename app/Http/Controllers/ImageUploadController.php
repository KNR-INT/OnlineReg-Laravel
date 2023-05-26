<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Image;
class ImageUploadController extends Controller
{
    public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeImage(Request $request){
        $data= new Image();

            $file= $request->file('image');
            $file1= $request->file('image1');
            $file2= $request->file('image2');
            $file3= $request->file('image3');

            
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['student_adr']= $filename;

            $filename1= date('YmdHi').$file1->getClientOriginalName();
            $file1-> move(public_path('public/Image'), $filename1);
            $data['father_aadhar']= $filename1;

            $filename2= date('YmdHi').$file2->getClientOriginalName();
            $file2-> move(public_path('public/Image'), $filename2);
            $data['birth_cer']= $filename2;

            $filename3= date('YmdHi').$file3->getClientOriginalName();
            $file3-> move(public_path('public/Image'), $filename3);
            $data['mother_aadhar']= $filename3;
            
        $data->save();
        return redirect('/application_details/a?class='.$class); 
    }

        public function edit($id)
        {
            $Parent->update();
            return redirect('/application_details');
        }
      
   
}