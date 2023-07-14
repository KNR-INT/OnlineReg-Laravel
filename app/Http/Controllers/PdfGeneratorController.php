<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use PDF;
 
class PdfGeneratorController extends Controller
{
    public function application_details() 
    {
        $data = [
            'imagePath' => public_path('public\Image'),
            'name'   => $student[0]->name,
            'gender' => $student[0]->gender,
            'dob'=>"<?php echo $student[0]->dob; ?>",
            'class'=>"<?php echo $student[0]->class; ?>",
            'birth_place'=>"<?php echo $student[0]->birth_place; ?>",
            'nationality'=>"<?php echo $student[0]->nationality; ?>",
             'religion'=>"<?php echo $student[0]->religion; ?>",
             'mother_tongue'=>"<?php echo $student[0]->mother_tongue; ?>",
            'sib1_name'=>"<?php echo $student[0]->sib1_name; ?>",
            'sib1_cls_sec'=>"<?php echo $student[0]->sib1_cls_sec; ?>",
            'sib2_name'=>"<?php echo $student[0]->sib2_name; ?>",
            'sib2_cls_sec'=>"<?php echo $student[0]->sib2_cls_sec; ?>",
            'phy_clg'=>"<?php echo $student[0]->phy_clg; ?>",
            'slp_need'=>"<?php echo $student[0]->slp_need; ?>",
            'aadhar'=>"<?php echo $student[0]->aadhar; ?>",
            'transport'=>"<?php echo $student[0]->transport; ?>",
            'image'=>"<?php echo $student[0]->image; ?>",
            'sec_language'=>"<?php echo $student[0]->sec_language; ?>",
            'third_language'=>"<?php echo $student[0]->third_language; ?>",


    'father_name' =>"<?php echo $student[0]->father_name; ?>",
    'father_mob'=>"<?php echo $student[0]->father_mob; ?>",
    'father_email_verified_at'=>"<?php echo $student[0]->father_email_verified_at; ?>",
    'father_mother_tongue'=>"<?php echo $student[0]->father_mother_tongue; ?>",
    'father_residential_address'=>"<?php echo $student[0]->father_residential_address; ?>",
    'father_area'=>"<?php echo $student[0]->father_area; ?>",
    'father_district'=>"<?php echo $student[0]->father_district; ?>",
    'father_state'=>"<?php echo $student[0]->father_state; ?>",
    'father_country'=>"<?php echo $student[0]->father_country; ?>",
    'father_pincode'=>"<?php echo $student[0]->father_pincode; ?>",
    'father_residential_no'=>"<?php echo $student[0]->father_residential_no; ?>",
    'father_designation'=>"<?php echo $student[0]->father_designation; ?>",
    'father_company'=>"<?php echo $student[0]->father_company; ?>",
    'father_company_address'=>"<?php echo $student[0]->father_company_address; ?>",
    'father_office_number'=>"<?php echo $student[0]->father_office_number; ?>",
    'father_annual_income'=>"<?php echo $student[0]->father_annual_income; ?>",
    'mother_name'=>"<?php echo $student[0]->mother_name; ?>",
    'mother_mob'=>"<?php echo $student[0]->mother_mob; ?>",
    'mother_email_verified_at'=>"<?php echo $student[0]->mother_email_verified_at; ?>",
    'mother_mother_tongue'=>"<?php echo $student[0]->mother_mother_tongue; ?>",
    'mother_residential_address' =>"<?php echo $student[0]->mother_residential_address; ?>",
    'mother_area' =>"<?php echo $student[0]->mother_area; ?>",
    'mother_district' =>"<?php echo $student[0]->mother_district; ?>",
    'mother_state'=>"<?php echo $student[0]->mother_state; ?>",
    'mother_country'=>"<?php echo $student[0]->mother_country; ?>",
    'mother_pincode'=>"<?php echo $student[0]->mother_pincode; ?>",
    'mother_residential_no'=>"<?php echo $student[0]->mother_residential_no; ?>",
    'mother_designation'=>"<?php echo $student[0]->mother_designation; ?>",
    'mother_company'=>"<?php echo $student[0]->mother_company; ?>",
    'mother_company_address'=>"<?php echo $student[0]->mother_company_address; ?>",
    'mother_office_number'=>"<?php echo $student[0]->mother_office_number; ?>",
    'mother_annual_income'=>"<?php echo $student[0]->mother_annual_income; ?>",


        ];
        $pdf = PDF::loadView('application_details', $data);
        return $pdf->stream('application_details.pdf');
    }
}
