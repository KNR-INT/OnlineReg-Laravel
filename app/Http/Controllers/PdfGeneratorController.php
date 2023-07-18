<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
class PdfGeneratorController extends Controller
{
    // public function application_details(Request $request) 
    // {
    //     $appli_id = $request->input('appli_id');
    //     // $student = Student::find($appli_id) ;
    //     $data = [
    //         'imagePath' => public_path('public\Image'),
    //         'name'   => $student[0]->name,
    //         'gender' => $student[0]->gender,
    //         'dob'=> $student[0]->dob,
    //         'class'=> $student[0]->class,
    //         'birth_place'=> $student[0]->birth_place,
    //         'nationality'=> $student[0]->nationality,
    //          'religion'=> $student[0]->religion,
    //          'mother_tongue'=>$student[0]->mother_tongue,
    //         'sib1_name'=>$student[0]->sib1_name,
    //         'sib1_cls_sec'=> $student[0]->sib1_cls_sec,
    //         'sib2_name'=> $student[0]->sib2_name,
    //         'sib2_cls_sec'=> $student[0]->sib2_cls_sec,
    //         'phy_clg'=> $student[0]->phy_clg,
    //         'slp_need'=>$student[0]->slp_need,
    //         'aadhar'=> $student[0]->aadhar,
    //         'transport'=> $student[0]->transport,
    //         'image'=> $student[0]->image,
    //         'sec_language'=> $student[0]->sec_language,
    //         'third_language'=>$student[0]->third_language,


    // 'father_name' =>$student[0]->father_name,
    // 'father_mob'=> $student[0]->father_mob,
    // 'father_email_verified_at'=> $student[0]->father_email_verified_at,
    // 'father_mother_tongue'=> $student[0]->father_mother_tongue,
    // 'father_residential_address'=> $student[0]->father_residential_address,
    // 'father_area'=>$student[0]->father_area,
    // 'father_district'=> $student[0]->father_district,
    // 'father_state'=>$student[0]->father_state,
    // 'father_country'=>$student[0]->father_country,
    // 'father_pincode'=> $student[0]->father_pincode,
    // 'father_residential_no'=> $student[0]->father_residential_no,
    // 'father_designation'=> $student[0]->father_designation,
    // 'father_company'=> $student[0]->father_company,
    // 'father_company_address'=> $student[0]->father_company_address,
    // 'father_office_number'=> $student[0]->father_office_number,
    // 'father_annual_income'=> $student[0]->father_annual_income,
    // 'mother_name'=> $student[0]->mother_name,
    // 'mother_mob'=> $student[0]->mother_mob,
    // 'mother_email_verified_at'=> $student[0]->mother_email_verified_at,
    // 'mother_mother_tongue'=>$student[0]->mother_mother_tongue,
    // 'mother_residential_address' => $student[0]->mother_residential_address,
    // 'mother_area' => $student[0]->mother_area,
    // 'mother_district' => $student[0]->mother_district,
    // 'mother_state'=> $student[0]->mother_state,
    // 'mother_country'=> $student[0]->mother_country,
    // 'mother_pincode'=> $student[0]->mother_pincode,
    // 'mother_residential_no'=>$student[0]->mother_residential_no,
    // 'mother_designation'=> $student[0]->mother_designation,
    // 'mother_company'=> $student[0]->mother_company,
    // 'mother_company_address'=> $student[0]->mother_company_address,
    // 'mother_office_number'=>$student[0]->mother_office_number,
    // 'mother_annual_income'=> $student[0]->mother_annual_income,


    //     ];

    //     $pdf_name = 'application_details_'.$appli_id.'.pdf';
    //     $pdf = PDF::loadView('application_details', $data);
    //     return $pdf->stream($pdf_name);
    // }

   
        public function generatePDF()
        {
            $sessions = request()->session()->get('users.user_id');   
            // print_r($sessions);
            $ses_userid = $sessions[0];

            $data = [
                'title' => 'Sample PDF',
                'content' => 'This is the content of the PDF!',
            ];
    
            $pdf = new Dompdf();
            $pdf->loadHtml(View::make('print_fee_receipt', $data)->render());
            $pdf->setPaper('A4', 'portrait');
    
            // (Optional) Adjust dompdf options here if necessary

            // $pdf->setOptions(['fontHeightRatio' => 1.1]);

            $pdf_name = 'print_fee_receipt_'.$ses_userid.'.pdf';
    
            $pdf->render();
            return $pdf->stream('$pdf_name');
        }
    }
    




