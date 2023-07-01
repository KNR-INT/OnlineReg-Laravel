@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Registration</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/> 
</head>
<body>
<?php 
   $id = $_GET['appli_id'];
   $student = DB::select("SELECT * FROM `students` WHERE `id` = '$id'");
 ?>

<div class="container">
<form action = "{{ url('store-parent') }}" method = "get">
<form id="myForm" action = "{{ url('store-parent') }}">
  <table class="table table-responsive">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item ">
                <span class="progress-count">1</span>
               
            </li>
            <li class="step-wizard-item current-item">
                <span class="progress-count">2</span>
               
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">3</span>
               
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">4</span>
                
            </li>
             <li class="step-wizard-item ">
                <span class="progress-count">5</span>
                
            </li>
             <li class="step-wizard-item">
                <span class="progress-count">6</span>
               
            </li>
        </ul>
    </section>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
    <thead>
      <tr>
        <th><h4><b>Father Details</b></h4></th>
        <th><h4><b>Mother Details</b></h4></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td >Father Name*
  <input type="text"  class="form-control" placeholder="Enter Father name" required id="father_name" name="father_name" maxlength=50; value="<?php echo $student[0]->father_name;?>" oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);">
         <span id="father_name_err" style="color:red;"></span></td>
        <td>Mother Name*
         <input type="text"  class="form-control" placeholder="Enter Mother name" required id="mother_name" name="mother_name" maxlength=50; value="<?php echo $student[0]->mother_name;?>" oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);">
         <span id="mother_name_err" style="color:red;"></span></td>

       </tr>

      <tr>
        <td>Mobile Number*
<input type="text" class="form-control" placeholder="Enter Father mobile number" required id="father_mob" name="father_mob" value="<?php echo $student[0]->father_mob;?>" maxlength="10"><span id="father_mob_err" style="color:red;"></span></td>
         <td>Mobile Number*
        <input type="text" class="form-control" placeholder="Enter Mother mobile number" required id="mother_mob" name="mother_mob" value="<?php echo $student[0]->mother_mob;?>" maxlength="10"><span id="mother_mob_err" style="color:red;"></span></td>      </tr>


      <tr>
        <td>Father Email Id*
<<<<<<< .mine
        <input type="text" class="form-control" placeholder="Enter Father Email Id" required id="father_email_verified_at" name="father_email_verified_at" value="<?php echo $student[0]->father_email_verified_at;?>"><span id="father_email_verified_at_err" style="color:red;"></span></td>
=======
        <input type="text" class="form-control" placeholder="Enter Father Email Id" required id="father_email_verified_at" name="father_email_verified_at" value="<?php if(!empty($student)){ echo $student[0]->father_email_verified_at;}?>"><span id="father_email_verified_at_err" style="color:red;"></span></td>
>>>>>>> .theirs
        <td>Mother Email Id*
         <input type="text" class="form-control" placeholder="Enter Mother Email Id" required id="mother_email_verified_at" name="mother_email_verified_at" value="<?php echo $student[0]->mother_email_verified_at;?>"><span id="mother_email_verified_at_err" style="color:red;"></span></td>
       </tr>


       <tr>
        <td> Father's Mother Tongue*
        <br>
        <select required id="father_mother_tongue" name="father_mother_tongue" style="width: 440px;">
        <option disabled selected value="">--SELECT--</option>
<option value="Kannada"<?php if($student[0]->father_mother_tongue == "Kannada"){ echo "SELECTED"; } ?>>Kannada</option>
        <option value="Tamil"<?php if($student[0]->father_mother_tongue == "Tamil"){ echo "SELECTED"; } ?>>Tamil</option>
         <option value="Telugu"<?php if($student[0]->father_mother_tongue == "Telugu"){ echo "SELECTED"; } ?>>Telugu</option>
         <option value="Hindi"<?php if($student[0]->father_mother_tongue == "Hindi"){ echo "SELECTED"; } ?>>Hindi</option>
         <option value="Assamese"<?php if($student[0]->father_mother_tongue == "Assamese"){ echo "SELECTED"; } ?>>Assamese</option>
         <option value="Bengali"<?php if($student[0]->father_mother_tongue == "Bengali"){ echo "SELECTED"; } ?>>Bengali</option>
         <option value="English"<?php if($student[0]->father_mother_tongue == "English"){ echo "SELECTED"; } ?>>English</option>
         <option value="Marathi"<?php if($student[0]->father_mother_tongue == "Marathi"){ echo "SELECTED"; } ?>>Marathi</option>
         <option value="Urdu"<?php if($student[0]->father_mother_tongue == "Urdu"){ echo "SELECTED"; } ?>>Urdu</option>
         <option value="Malayalam"<?php if($student[0]->father_mother_tongue == "Malayalam"){ echo "SELECTED"; } ?>>Malayalam</option>
         <option value="Gujarathi"<?php if($student[0]->father_mother_tongue == "Gujarathi"){ echo "SELECTED"; } ?>>Gujarathi</option>
         <option value="Others"<?php if($student[0]->father_mother_tongue == "Others"){ echo "SELECTED"; } ?>>Others</option>
          </select><span id="father_mother_tongue_err" style="color:red;"></span></td>
           <td> Mother's Mother Tongue*
                <br>
         <select required id="mother_mother_tongue" name="mother_mother_tongue" style="width: 440px;">
         <option disabled selected value="">--SELECT--</option>
        <option value="Kannada"<?php if($student[0]->mother_mother_tongue == "Kannada"){ echo "SELECTED"; } ?>>Kannada</option>
        <option value="Tamil"<?php if($student[0]->mother_mother_tongue == "Tamil"){ echo "SELECTED"; } ?>>Tamil</option>
         <option value="Telugu"<?php if($student[0]->mother_mother_tongue == "Telugu"){ echo "SELECTED"; } ?>>Telugu</option>
         <option value="Hindi"<?php if($student[0]->mother_mother_tongue == "Hindi"){ echo "SELECTED"; } ?>>Hindi</option>
         <option value="Assamese"<?php if($student[0]->mother_mother_tongue == "Assamese"){ echo "SELECTED"; } ?>>Assamese</option>
         <option value="Bengali"<?php if($student[0]->mother_mother_tongue == "Bengali"){ echo "SELECTED"; } ?>>Bengali</option>
         <option value="English"<?php if($student[0]->mother_mother_tongue == "English"){ echo "SELECTED"; } ?>>English</option>
         <option value="Marathi"<?php if($student[0]->mother_mother_tongue == "Marathi"){ echo "SELECTED"; } ?>>Marathi</option>
         <option value="Urdu"<?php if($student[0]->mother_mother_tongue == "Urdu"){ echo "SELECTED"; } ?>>Urdu</option>
         <option value="Malayalam"<?php if($student[0]->mother_mother_tongue == "Malayalam"){ echo "SELECTED"; } ?>>Malayalam</option>
         <option value="Gujarathi"<?php if($student[0]->mother_mother_tongue == "Gujarathi"){ echo "SELECTED"; } ?>>Gujarathi</option>
         <option value="Others"<?php if($student[0]->mother_mother_tongue == "Others"){ echo "SELECTED"; } ?>>Others</option>                     </select><span id="mother_mother_tongue_err" style="color:red;"></span>
                 </td>
       </tr>
      
       <tr>
        <td>Residential Address*
           <input type="text" class="form-control" placeholder="Enter Residential Address" required id="father_residential_address" name="father_residential_address" value="<?php echo $student[0]->father_residential_address;?>"><span id="father_residential_address_err" style="color:red;"></span></td>
        <td>Residential Address*
          <input type="text" class="form-control" placeholder="Enter Residential Address" required id="mother_residential_address" name="mother_residential_address" value="<?php echo $student[0]->mother_residential_address;?>"><span id="mother_residential_address_err" style="color:red;"></span></td>
      </tr>


      <tr>
        <td>Area*
            <input type="text" class="form-control" placeholder="Enter Area" required id="father_area" name="father_area" value="<?php echo $student[0]->father_area;?>"><span id="father_area_err" style="color:red;"></span></td>
        <td>Area*
            <input type="text" class="form-control" placeholder="Enter Area" required id="mother_area" name="mother_area" value="<?php echo $student[0]->mother_area;?>"><span id="mother_area_err" style="color:red;"></span></td>
      </tr>


       <tr>
        <td>District*
            <input type="text"  class="form-control" placeholder="Enter District" required id="father_district" name="father_district" value="<?php echo $student[0]->father_district;?>"><span id="father_district_err" style="color:red;"></span></td>
        <td>District*
             <input type="text"  class="form-control" placeholder="Enter District" required id="mother_district" name="mother_district" value="<?php echo $student[0]->mother_district;?>"><span id="mother_district_err" style="color:red;"></span></td>
      </tr>


        <tr>
        <td>State*
            <input type="text"  class="form-control" placeholder="Enter state" required id="father_state" name="father_state" value="<?php echo $student[0]->father_state;?>"><span id="father_state_err" style="color:red;"></span></td>
        <td>State*
             <input type="text"  class="form-control" placeholder="Enter state" required id="mother_state" name="mother_state" value="<?php echo $student[0]->mother_state;?>"><span id="mother_state_err" style="color:red;"></span></td>
      </tr>


       <tr>
        <td>Country*
        <br>
           <select required id="father_country" name="father_country" style="width: 440px;">
           <option disabled selected value="">--SELECT--</option>
<option value="India"<?php if($student[0]->father_country =="India"){ echo "SELECTED"; } ?>>India</option>
                 <option value="America"<?php if($student[0]->father_country =="America"){ echo "SELECTED"; } ?>>America</option>
                <option value="Australia"<?php if($student[0]->father_country =="Australia"){ echo "SELECTED"; } ?>>Australia</option>
                <option value="Brazil"<?php if($student[0]->father_country =="Brazil"){ echo "SELECTED"; } ?>>Brazil</option>
                <option value="Canada"<?php if($student[0]->father_country =="Canada"){ echo "SELECTED"; } ?>>Canada</option>
                 <option value="Germany"<?php if($student[0]->father_country =="Germany"){ echo "SELECTED"; } ?>>Germany</option>
                <option value="France"<?php if($student[0]->father_country =="France"){ echo "SELECTED"; } ?>>France</option>
                 <option value="Italy"<?php if($student[0]->father_country =="Italy"){ echo "SELECTED"; } ?>>Italy</option>
                <option value="Others"<?php if($student[0]->father_country =="Others"){ echo "SELECTED"; } ?>>Others</option>

                            </select><span id="father_country_err" style="color:red;"></span></td>
                <td>Country*
                <br>
                    <select required id="mother_country" name="mother_country" style="width: 440px;">
                    <option disabled selected value="">--SELECT--</option>
 <option value="India"<?php if($student[0]->mother_country == "India"){   echo "SELECTED"; } ?>>India</option>
                 <option value="America"<?php if($student[0]->mother_country =="America"){ echo "SELECTED"; } ?>>America</option>
                <option value="Australia"<?php if($student[0]->mother_country =="Australia"){ echo "SELECTED"; } ?>>Australia</option>
                <option value="Brazil"<?php if($student[0]->mother_country =="Brazil"){ echo "SELECTED"; } ?>>Brazil</option>
                <option value="Canada"<?php if($student[0]->mother_country =="Canada"){ echo "SELECTED"; } ?>>Canada</option>
                <option value="Germany"<?php if($student[0]->mother_country =="Germany"){ echo "SELECTED"; } ?>>Germany</option>
                <option value="France"<?php if($student[0]->mother_country =="France"){ echo "SELECTED"; } ?>>France</option>
                <option value="Italy"<?php if($student[0]->mother_country =="Italy"){ echo "SELECTED"; } ?>>Italy</option>
                <option value="Others"<?php if($student[0]->mother_country == "Others"){ echo "SELECTED"; } ?>>Others</option>
                     </select><span id="mother_country_err" style="color:red;"></span></td>                     </select><span id="mother_country_err" style="color:red;"></span></td>
            </tr>
        
         <tr>
        <td>Pincode*
            <input type="text" class="form-control" placeholder="Enter Pincode" required id="father_pincode" name="father_pincode" value="<?php echo $student[0]->father_pincode;?>"  maxlength="8"><span id="father_pincode_err" style="color:red;"></span></td>
        <td>Pincode*
             <input type="text" class="form-control" placeholder="Enter Pincode" required id="mother_pincode" name="mother_pincode"value="<?php echo $student[0]->mother_pincode;?>"  maxlength="8"><span id="mother_pincode_err" style="color:red;"></span></td>
      </tr>

       <tr>
          <td>Residential Number*
 <input type="text" class="form-control" placeholder="Enter Residential Number" required id="father_residential_no" name="father_residential_no" value="<?php echo $student[0]->father_residential_no;?>" maxlength="11"><span id="father_residential_no_err" style="color:red;"></span></td>
          <td>Residential Number*
             <input type="text" class="form-control" placeholder="Enter Residential Number" required id="mother_residential_no" name="mother_residential_no" value="<?php echo $student[0]->mother_residential_no;?>" maxlength="11"><span id="mother_residential_no_err" style="color:red;"></span></td>      </tr>
               
       <tr class="form-group">
          <td>Enter Designation*
          <br>
            <select class="form-select" required id="father_designation" name="father_designation" style="width: 440px;">
            <option disabled selected value="">--SELECT--</option>
 <option value="Private Sector"<?php if($student[0]->father_designation == "Private Sector"){ echo "SELECTED"; } ?>>Private Sector</option>
              <option value="Public sector"<?php if($student[0]->father_designation == "Public sector"){ echo "SELECTED"; } ?>>Public sector</option>
             <option value="Bussiness"<?php if($student[0]->father_designation == "Bussiness"){ echo "SELECTED"; } ?>>Bussiness</option>
             <option value="Agriculture"<?php if($student[0]->father_designation == "Agriculture"){ echo "SELECTED"; } ?>>Agriculture</option>
             <option value="Others"<?php if($student[0]->father_designation == "Others"){ echo "SELECTED"; } ?>>Others</option>                                </select>
                                <span id="father_designation_err" style="color:red;"></span>
                            </td>
        <td>Enter Designation
        <br>
             <select  class="form-select" required id="mother_designation" name="mother_designation"style="width: 440px;">
             <option disabled selected value="">--SELECT--</option>
<option value="Private Sector"<?php if($student[0]->mother_designation == "Private Sector"){ echo "SELECTED"; } ?>>Private Sector</option>
                 <option value="Public sector"<?php if($student[0]->mother_designation == "Public sector"){ echo "SELECTED"; } ?>>Public sector</option>
                 <option value="Bussiness"<?php if($student[0]->mother_designation == "Bussiness"){ echo "SELECTED"; } ?>>Bussiness</option>
                 <option value="Agriculture"<?php if($student[0]->mother_designation == "Agriculture"){ echo "SELECTED"; } ?>>Agriculture</option>
                 <option value="Others"<?php if($student[0]->mother_designation == "Others"){ echo "SELECTED"; } ?>>Others</option>
</select></td>      </tr>

       <tr>
    <input type="text" class="form-control" placeholder="Enter Company" required id="mother_company" name="mother_company" value="<?php echo $student[0]->mother_company;?>"></td>
          <td>Enter Company Name*
            <input type="text" class="form-control" placeholder="Enter Company Name" required id="father_company" name="father_company" value="<?php echo $student[0]->father_company;?>" ><span id="father_company_err" style="color:red;"></span></td>
        <td>Enter Company Name
             <input type="text" class="form-control" placeholder="Enter Company Name" required id="mother_company" name="mother_company" value="<?php echo $student[0]->mother_company;?>" ></td>      </tr>


       <tr>
          <td>Enter Company Address*
            <input type="text" class="form-control" placeholder="Enter Company" required id="father_company_address" name="father_company_address" value="<?php echo $student[0]->father_company_address;?>" ><span id="father_company_address_err" style="color:red;"></span></td>
        <td>Enter Company Address
             <input type="text" class="form-control" placeholder="Enter Company" required id="mother_company_address" name="mother_company_address" value="<?php echo $student[0]->mother_company_address;?>" ></td>
      </tr>


      <tr>
          <td>Enter Office Number*
             <input type="text" class="form-control"  placeholder="Enter Office Number" required id="father_office_number" name="father_office_number" value="<?php echo $student[0]->father_office_number;?>" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"><span id="father_office_number_err" style="color:red;"></span></td>
        <td>Enter Office Number
              <input type="text" class="form-control"  placeholder="Enter Office Number" required id="mother_office_number" name="mother_office_number" value="<?php echo $student[0]->mother_office_number;?>" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"></td>
      </tr>


      <tr>
          <td>Gross Annual Income (INR)*
             <input type="text" class="form-control"  placeholder="Enter Gross Annual Income" required id="father_annual_income" name="father_annual_income" value="<?php echo $student[0]->father_annual_income;?>" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"><span id="father_annual_income_err" style="color:red;"></span></td>
        <td>Gross Annual Income (INR)
              <input type="text" class="form-control"  placeholder="Enter Gross Annual Income" required id="mother_annual_income" name="mother_annual_income" value="<?php echo $student[0]->mother_annual_income;?>" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"></td>
      </tr>
      <input type="hidden" id="page_type" name="page_type" value="<?php echo $_GET['class'];?>">
      <input type="hidden" id="appli_id" name="appli_id" value="<?php echo $_GET['appli_id']; ?>">
    </tbody>
  </table>
</form>
        <center><div class="col">  
              <div class="form-check">  
                <button class=" btn btn-back btn-primary">Go back</button>
                <button class="btn btn-submit btn-primary">Save & continue</button>
             </div></center>
           
                <center> @include('footer')  </center>  
                </div>
</div>
  <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

         $('#father_name').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("father_name_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_name_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });

        $('#mother_name').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("mother_name_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_name_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });

        $('#father_mob').on('change', function() {
            if (/^(0|91)?[6-9][0-9]{9}$/.test($(this).val())) {
                document.getElementById("father_mob_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_mob_err").innerHTML = "Invalid Mobile Number";
                // Contain other characters also
            }
        });
        $('#mother_mob').on('change', function() {
            if (/^(0|91)?[6-9][0-9]{9}$/.test($(this).val())) {
                document.getElementById("mother_mob_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_mob_err").innerHTML = "Invalid Mobile Number";
                // Contain other characters also
            }
        });

        $('#father_email_verified_at').on('change', function() {
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($(this).val())) {
                document.getElementById("father_email_verified_at_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_email_verified_at_err").innerHTML = "Invalid Gmail ID";
                // Contain other characters also
            }
        });
        $('#mother_email_verified_at').on('change', function() {
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($(this).val())) {
                document.getElementById("mother_email_verified_at_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_email_verified_at_err").innerHTML = "Invalid Gmail ID";
                // Contain other characters also
            }
        });


        $('#father_district').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("father_district_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_district_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });
        $('#mother_district').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("mother_district_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_district_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });

        $('#father_state').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("father_state_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_state_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });
        $('#mother_state').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("mother_state_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_state_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });

        $('#father_pincode').on('change', function() {
            if (/^(\d{4}|\d{6})$/.test($(this).val())) {
                document.getElementById("father_pincode_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_pincode_err").innerHTML = "Invalid Pincode";
                // Contain other characters also
            }
        });
        $('#mother_pincode').on('change', function() {
            if (/^(\d{4}|\d{6})$/.test($(this).val())) {
                document.getElementById("mother_pincode_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_pincode_err").innerHTML = "Invalid Pincode ";
                // Contain other characters also
            }
        });
  
        $('#father_residential_no').on('change', function() {
            if (/^(0|91)?[6-9][0-9]{9}$/.test($(this).val())) {
                document.getElementById("father_residential_no_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_residential_no_err").innerHTML = "Invalid Residential Number";
                // Contain other characters also
            }
        });
        $('#mother_residential_no').on('change', function() {
            if (/^(0|91)?[6-9][0-9]{9}$/.test($(this).val())) {
                document.getElementById("mother_residential_no_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_residential_no_err").innerHTML = "Invalid Residential Number";
                // Contain other characters also
            }
        });
    
        $('.mother_details').click(function(){
            if ($(this).is(':checked')) {
                let father_residential_address = document.getElementById("father_residential_address").value;
                let father_area = document.getElementById("father_area").value;
                let father_district = document.getElementById("father_district").value;
                let father_state = document.getElementById("father_state").value;
                let father_country = document.getElementById("father_country").value;
                let father_pincode = document.getElementById("father_pincode").value;
                let father_residential_no = document.getElementById("father_residential_no").value;

                document.getElementById("mother_residential_address").value = father_residential_address;
                document.getElementById("mother_area").value = father_area;
                document.getElementById("mother_district").value = father_district;
                document.getElementById("mother_state").value = father_state;
                document.getElementById("mother_country").value = father_country;
                document.getElementById("mother_pincode").value = father_pincode;
                document.getElementById("mother_residentail_no").value = father_residential_no;

            }<<<<<<< .mine
            else{
                document.getElementById("mother_residential_address").value ="";
                document.getElementById("mother_area").value ="";
                document.getElementById("mother_district").value ="";
                document.getElementById("mother_state").value ="";
                document.getElementById("mother_country").value ="";
                document.getElementById("mother_pincode").value ="";
                document.getElementById("mother_residentail_no").value ="";
            }
        });
=======
        </form>
        <center><div class="col">  
              <div class="form-check">  
                <button class=" btn btn-back btn-primary">Go back</button>
                <button class="btn btn-submit btn-primary">Save & continue</button>
             </div></center>
          
                <div class="modal-footer justify-content-center">  
                    @include('footer')
                </div>
>>>>>>> .theirs

         $('#father_name').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("father_name_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_name_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });

        $('#mother_name').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("mother_name_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_name_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });

        $('#father_mob').on('change', function() {
            if (/^(0|91)?[6-9][0-9]{9}$/.test($(this).val())) {
                document.getElementById("father_mob_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_mob_err").innerHTML = "Invalid Mobile Number";
                // Contain other characters also
            }
        });
        $('#mother_mob').on('change', function() {
            if (/^(0|91)?[6-9][0-9]{9}$/.test($(this).val())) {
                document.getElementById("mother_mob_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_mob_err").innerHTML = "Invalid Mobile Number";
                // Contain other characters also
            }
        });

        $('#father_email_verified_at').on('change', function() {
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($(this).val())) {
                document.getElementById("father_email_verified_at_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_email_verified_at_err").innerHTML = "Invalid Gmail ID";
                // Contain other characters also
            }
        });
        $('#mother_email_verified_at').on('change', function() {
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($(this).val())) {
                document.getElementById("mother_email_verified_at_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_email_verified_at_err").innerHTML = "Invalid Gmail ID";
                // Contain other characters also
            }
        });


        $('#father_district').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("father_district_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_district_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });
        $('#mother_district').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("mother_district_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_district_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });

        $('#father_state').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("father_state_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_state_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });
        $('#mother_state').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("mother_state_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_state_err").innerHTML = "Only alphabets are allowed";
                // Contain other characters also
            }
        });

        $('#father_pincode').on('change', function() {
            if (/^(\d{4}|\d{6})$/.test($(this).val())) {
                document.getElementById("father_pincode_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_pincode_err").innerHTML = "Invalid Pincode";
                // Contain other characters also
            }
        });
        $('#mother_pincode').on('change', function() {
            if (/^(\d{4}|\d{6})$/.test($(this).val())) {
                document.getElementById("mother_pincode_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_pincode_err").innerHTML = "Invalid Pincode ";
                // Contain other characters also
            }
        });
  
        $('#father_residential_no').on('change', function() {
            if (/^(0|91)?[6-9][0-9]{9}$/.test($(this).val())) {
                document.getElementById("father_residential_no_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("father_residential_no_err").innerHTML = "Invalid Residential Number";
                // Contain other characters also
            }
        });
        $('#mother_residential_no').on('change', function() {
            if (/^(0|91)?[6-9][0-9]{9}$/.test($(this).val())) {
                document.getElementById("mother_residential_no_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("mother_residential_no_err").innerHTML = "Invalid Residential Number";
                // Contain other characters also
            }
        });
    
        $('.mother_details').click(function(){
            if ($(this).is(':checked')) {
                let father_residential_address = document.getElementById("father_residential_address").value;
                let father_area = document.getElementById("father_area").value;
                let father_district = document.getElementById("father_district").value;
                let father_state = document.getElementById("father_state").value;
                let father_country = document.getElementById("father_country").value;
                let father_pincode = document.getElementById("father_pincode").value;
                let father_residential_no = document.getElementById("father_residential_no").value;

                document.getElementById("mother_residential_address").value = father_residential_address;
                document.getElementById("mother_area").value = father_area;
                document.getElementById("mother_district").value = father_district;
                document.getElementById("mother_state").value = father_state;
                document.getElementById("mother_country").value = father_country;
                document.getElementById("mother_pincode").value = father_pincode;
                document.getElementById("mother_residentail_no").value = father_residential_no;

            }

            else{
                document.getElementById("mother_residential_address").value ="";
                document.getElementById("mother_area").value ="";
                document.getElementById("mother_district").value ="";
                document.getElementById("mother_state").value ="";
                document.getElementById("mother_country").value ="";
                document.getElementById("mother_pincode").value ="";
                document.getElementById("mother_residentail_no").value ="";
            }
        });

        $('.btn-back').click(function(){
            let page_type = document.getElementById("page_type").value;
            let appli_id = document.getElementById("appli_id").value;
            window.location.href ="{{ url('onlinereg/a?class=') }}"+page_type+"&appli_id="+appli_id;
        });
        $('.btn-submit').click(function(){
            
            let father_name = document.getElementById("father_name").value;
            let father_mob = document.getElementById("father_mob").value;
            let father_email_verified_at = document.getElementById("father_email_verified_at").value;
            let father_mother_tongue = document.getElementById("father_mother_tongue").value;
            let father_residential_address = document.getElementById("father_residential_address").value;
            let father_area = document.getElementById("father_area").value;
            let father_district = document.getElementById("father_district").value;
            let father_state = document.getElementById("father_state").value;
            let father_country = document.getElementById("father_country").value;
            let father_pincode = document.getElementById("father_pincode").value;
            let father_residential_no = document.getElementById("father_residential_no").value;
            let father_designation = document.getElementById("father_designation").value;
            let father_company = document.getElementById("father_company").value;
            let father_company_address = document.getElementById("father_company_address").value;
            let father_office_number = document.getElementById("father_office_number").value;
            let father_annual_income = document.getElementById("father_annual_income").value;
   
            let mother_name = document.getElementById("mother_name").value;
            let mother_mob = document.getElementById("mother_mob").value;
            let mother_email_verified_at = document.getElementById("mother_email_verified_at").value;
            let mother_mother_tongue = document.getElementById("mother_mother_tongue").value;
            let mother_residential_address = document.getElementById("mother_residential_address").value;
            let mother_area = document.getElementById("mother_area").value;
            let mother_district = document.getElementById("mother_district").value;
            let mother_state = document.getElementById("mother_state").value;
            let mother_country = document.getElementById("mother_country").value;
            let mother_pincode = document.getElementById("mother_pincode").value;
            let mother_residential_no = document.getElementById("mother_residential_no").value;
            let mother_designation = document.getElementById("mother_designation").value;
            let mother_company = document.getElementById("mother_company").value;
            let mother_company_address = document.getElementById("mother_company_address").value;
            let mother_office_number = document.getElementById("mother_office_number").value;
            let mother_annual_income = document.getElementById("mother_annual_income").value;
              
            //   
            if(!father_name ||!/^[a-zA-Z ]*$/g.test(father_name) || !father_mob ||!/^(0|91)?[6-9][0-9]{9}$/.test(father_mob) || !father_email_verified_at ||!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(father_email_verified_at)|| !father_mother_tongue || !father_residential_address || !father_area|| !father_district ||!/^[a-zA-Z ]*$/g.test(father_district) || !father_state ||!/^[a-zA-Z ]*$/g.test(father_state) || !father_country || !father_pincode ||!/^(\d{4}|\d{6})$/.test(father_pincode)|| !father_residential_no ||!/^(0|91)?[6-9][0-9]{9}$/.test(father_residential_no)  || !father_designation|| !father_company  || !father_company_address || !father_office_number || !father_annual_income || !mother_name ||!/^[a-zA-Z ]*$/g.test(mother_name) || !mother_mob ||!/^(0|91)?[6-9][0-9]{9}$/.test(mother_mob) || !mother_email_verified_at ||!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mother_email_verified_at) || !mother_mother_tongue || !mother_residential_address || !mother_area  || !mother_district ||!/^[a-zA-Z ]*$/g.test(mother_district)|| !mother_state ||!/^[a-zA-Z ]*$/g.test(mother_state) || !mother_country || !mother_pincode ||!/^(\d{4}|\d{6})$/.test(mother_pincode)|| !mother_residential_no ||!/^(0|91)?[6-9][0-9]{9}$/.test(mother_residential_no)   )
            {
                if(!father_name)
                {
                    document.getElementById("father_name_err").innerHTML = "This is Required Field";
                }
                else if(!/^[a-zA-Z ]*$/g.test(father_name))
                {
                    document.getElementById("father_name_err").innerHTML = "Only alphabets are allowed";
                }
                else
                {
                    document.getElementById("father_name_err").innerHTML = " ";
                }

                if(!father_mob)
                {
                    document.getElementById("father_mob_err").innerHTML = "This is Required Field";
                }
                else if(!/^(0|91)?[6-9][0-9]{9}$/.test(father_mob))
                {
                    document.getElementById("father_mob_err").innerHTML = "Only Numbers are allowed";
                }
                else
                {
                    document.getElementById("father_mob_err").innerHTML = " ";
                }

                if(!father_email_verified_at)
                {
                    document.getElementById("father_email_verified_at_err").innerHTML = "This is Required Field";
                }
                else if(!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(father_email_verified_at))
                {
                    document.getElementById("father_email_verified_at_err").innerHTML = "Invalid Email ID";
                }

                else
                {
                    document.getElementById("father_email_verified_at_err").innerHTML = " ";
                }

                if(!father_mother_tongue)
                {
                    document.getElementById("father_mother_tongue_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_mother_tongue_err").innerHTML = " ";
                }

                if(!father_residential_address)
                {
                    document.getElementById("father_residential_address_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_residential_address_err").innerHTML = " ";
                }

                if(!father_area)
                {
                    document.getElementById("father_area_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_area_err").innerHTML = " ";
                }
                
                if(!father_district)
                {
                    document.getElementById("father_district_err").innerHTML = "This is Required Field";
                }
                else if(!/^[a-zA-Z ]*$/g.test(father_district))
                {
                    document.getElementById("father_name_err").innerHTML = "Only alphabets are allowed";
                }
                else
                {
                    document.getElementById("father_district_err").innerHTML = " ";
                }

                if(!father_state)
                {
                    document.getElementById("father_state_err").innerHTML = "This is Required Field";
                }
                else if(!/^[a-zA-Z ]*$/g.test(father_district))
                {
                    document.getElementById("father_state_err").innerHTML = "Only alphabets are allowed";
                }
                else
                {
                    document.getElementById("father_state_err").innerHTML = " ";
                }

                if(!father_country)
                {
                    document.getElementById("father_country_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_country_err").innerHTML = " ";
                }

                if(!father_pincode)
                {
                    document.getElementById("father_pincode_err").innerHTML = "This is Required Field";
                }
                else if(!/^(\d{4}|\d{6})$/.test(father_pincode))
                {
                    document.getElementById("father_pincode_err").innerHTML = "Invalid Pincode";
                }
                else
                {
                    document.getElementById("father_pincode_err").innerHTML = " ";
                }

                if(!father_residential_no)
                {
                    document.getElementById("father_residential_no_err").innerHTML = "This is Required Field";
                }
                else if(!/^(0|91)?[6-9][0-9]{9}$/.test(father_residential_no))
                {
                    document.getElementById("father_residential_no_err").innerHTML = "Only Numbers are allowed";
                }
                else
                {
                    document.getElementById("father_residential_no_err").innerHTML = " ";
                }

                if(!father_designation)
                {
                    document.getElementById("father_designation_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_designation_err").innerHTML = " ";
                }
                if(!father_company)
                {
                    document.getElementById("father_company_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_company_err").innerHTML = " ";
                }

                if(!father_company_address)
                {
                    document.getElementById("father_company_address_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_company_address_err").innerHTML = " ";
                }

                if(!father_office_number)
                {
                    document.getElementById("father_office_number_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_office_number_err").innerHTML = " ";
                }

                if(!father_annual_income)
                {
                    document.getElementById("father_annual_income_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_annual_income_err").innerHTML = " ";
                }

                if(!mother_name)
                {
                    document.getElementById("mother_name_err").innerHTML = "This is Required Field";
                }
                else if(!/^[a-zA-Z ]*$/g.test(mother_name))
                {
                    document.getElementById("mother_name_err").innerHTML = "Only alphabets are allowed";
                }
                
                else
                {
                    document.getElementById("mother_name_err").innerHTML = " ";
                }

                if(!mother_mob)
                {
                    document.getElementById("mother_mob_err").innerHTML = "This is Required Field";
                }
                else if(!/^(0|91)?[6-9][0-9]{9}$/.test(mother_mob))
                {
                    document.getElementById("mother_mob_err").innerHTML = "Only Numbers are allowed";
                }
                else
                {
                    document.getElementById("mother_mob_err").innerHTML = " ";
                }

                if(!mother_email_verified_at)
                {
                    document.getElementById("mother_email_verified_at_err").innerHTML = "This is Required Field";
                }
                else if(!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mother_email_verified_at))
                {
                    document.getElementById("mother_email_verified_at_err").innerHTML = "Invalid Email ID";
                }
                else
                {
                    document.getElementById("mother_email_verified_at_err").innerHTML = " ";
                }

                if(!mother_mother_tongue)
                {
                    document.getElementById("mother_mother_tongue_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("mother_mother_tongue_err").innerHTML = " ";
                }

                if(!mother_residential_address)
                {
                    document.getElementById("mother_residential_address_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("mother_residential_address_err").innerHTML = " ";
                }

                if(!mother_area)
                {
                    document.getElementById("mother_area_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("mother_area_err").innerHTML = " ";
                }
                
                if(!mother_district)
                {
                    document.getElementById("mother_district_err").innerHTML = "This is Required Field";
                }
                else if(!/^[a-zA-Z ]*$/g.test(mother_district))
                {
                    document.getElementById("mother_district_err").innerHTML = "Only alphabets are allowed";
                }
                else
                {
                    document.getElementById("mother_district_err").innerHTML = " ";
                }

                if(!mother_state)
                {
                    document.getElementById("mother_state_err").innerHTML = "This is Required Field";
                }
                else if(!/^[a-zA-Z ]*$/g.test(mother_state))
                {
                    document.getElementById("mother_state_err").innerHTML = "Only alphabets are allowed";
                }
                else
                {
                    document.getElementById("mother_state_err").innerHTML = " ";
                }

                if(!mother_country)
                {
                    document.getElementById("mother_country_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("mother_country_err").innerHTML = " ";
                }

                if(!mother_pincode)
                {
                    document.getElementById("mother_pincode_err").innerHTML = "This is Required Field";
                }
                else if(!/^(\d{4}|\d{6})$/.test(mother_pincode))
                {
                    document.getElementById("mother_pincode_err").innerHTML = "Invalid Email ID";
                }
                else
                {
                    document.getElementById("mother_pincode_err").innerHTML = " ";
                }

                if(!mother_residential_no)
                {
                    document.getElementById("mother_residential_no_err").innerHTML = "This is Required Field";
                }
                else if(!/^(0|91)?[6-9][0-9]{9}$/.test(mother_residential_no))
                {
                    document.getElementById("mother_residential_no_err").innerHTML = "Only Numbers are allowed";
                }
                else
                {
                    document.getElementById("mother_residential_no_err").innerHTML = " ";
                }

         
            }
            
          
            // else if(!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(father_email_verified_at))
            // // /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            // {
            //     alert("okssss")
            //     document.getElementById("father_email_verified_at").innerHTML = "InValid  Email id";
            // }
                
            else
            {   
                document.getElementById("myForm").submit(); 
            }
        });
    </script>

</body>
</html>



<style>
    /* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: "Poppins", sans-serif;
} */

.step-wizard {
    /* background-color:  #00008B;
    background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
    height: 10vh;
    width: 10%;
    display: center;
    justify-content: center;
    align-items: center;
}
.step-wizard-list{
    /* background: #fff;
    box-shadow: 0 15px 25px rgba(0,0,0,0.1);
    color: #333;
    list-style-type: none;
    border-radius: 10px; */
    display: flex;
    padding: 20px 10px;
    position: relative;
    z-index: 10;
}

.step-wizard-item{
    padding: 0 20px;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive:1;
    flex-grow: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    min-width: 170px;
    position: relative;
}
.step-wizard-item + .step-wizard-item:after{
    content: "";
    position: absolute;
    left: 0;
    top: 19px;
    background:  #1338BE;
    width: 100%;
    height: 2px;
    transform: translateX(-50%);
    z-index: -10;
}
.progress-count{
    height: 40px;
    width:40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 600;
    margin: 0 auto;
    position: relative;
    z-index:10;
    color: transparent;
}
.progress-count:after{
    content: "";
    height: 40px;
    width: 40px;
    background:  #1338BE;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -10;
}
.progress-count:before{
    content: "";
    height: 10px;
    width: 20px;
    border-left: 3px solid #fff;
    border-bottom: 3px solid #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -60%) rotate(-45deg);
    transform-origin: center center;
}
.progress-label{
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
}
.current-item .progress-count:before,
.current-item ~ .step-wizard-item .progress-count:before{
    display: none;
}
.current-item ~ .step-wizard-item .progress-count:after{
    height:10px;
    width:10px;
}
.current-item ~ .step-wizard-item .progress-label{
    opacity: 0.5;
}
.current-item .progress-count:after{
    background: #ff0000;
    border: 2px solid #ff0000;
}
.current-item .progress-count{
    color: #1338BE;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*SSStable,tr,td
{
    border:none;}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
}
.container{
    position: relative;
    max-width: 1050px;
    width: 100%;
    border-radius: 6px;
    padding: 50px;
    margin: 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.5);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #fff;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #fff;
}
#HASH {
  display: flex;
  justify-content: space-between;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 790px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}

form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #fff;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.select{
    width:27px;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #333;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    .div.form.group{
        padding: 50%;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}
.input.form.group{
    width:20%;
}
</style>