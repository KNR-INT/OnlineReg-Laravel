<?php

namespace App\Http\Controllers;
use App\Models\Parent1;

use Illuminate\Http\Request;

class ParentsController extends Controller
{
    //
    function parents_details()
    {
        return view('parents_details');
    }
    public function store(Request $request)
    {
        $parent = new Parent1;
        $parent->father_name = $request->input('father_name');
        $parent->father_mob = $request->input('father_mob ');
        $parent->father_email_verified_at = $request->input('father_email_verified_at');
        $parent->father_mother_tongue = $request->input('father_mother_tongue');
        $parent->father_residential_address = $request->input('father_residential_address');
        $parent->father_area = $request->input('father_area');
        $parent->father_district = $request->input('father_district');
        $parent->father_state = $request->input('father_state');
        $parent->father_country = $request->input('father_country');
        $parent->father_pincode = $request->input('father_pincode');
        $parent->father_residential_no = $request->input('father_residential_no');
        $parent->father_designation = $request->input('father_designation');
        $parent->father_company = $request->input('father_company');
        $parent->father_company_address = $request->input('father_company_address');
        $parent->father_office_number = $request->input('father_office_number');
        $parent->father_annual_income = $request->input('father_annual_income');
        $parent->mother_name = $request->input('mother_name');
        $parent->mother_mob = $request->input('mother_mob');
        $parent->mother_email_verified_at = $request->input('mother_email_verified_at');
        $parent->mother_mother_tongue = $request->input('mother_mother_tongue');
        $parent->mother_residential_address = $request->input('mother_residential_address');
        $parent->mother_area = $request->input('mother_area');
        $parent->mother_district = $request->input('mother_district');
        $parent->mother_state = $request->input('mother_state');
        $parent->mother_country = $request->input('mother_country');
        $parent->mother_pincode = $request->input('mother_pincode');
        $parent->mother_residential_no = $request->input('mother_residential_no');
        $parent->mother_designation = $request->input('mother_designation');
        $parent->mother_company = $request->input('mother_company');
        $parent->mother_company_address = $request->input('mother_company_address');
        $parent->mother_office_number = $request->input('mother_office_number');
        $parent->mother_annual_income = $request->input('mother_annual_income');
        $parent->save();
        return redirect('/upload_doc');
    } 

    
    public function edit($id)
    {
        $parent =Parent1::find($id);
        return $parent;
    }
    
}