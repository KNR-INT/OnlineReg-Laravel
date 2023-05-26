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

<div class="container">
<form id="myForm" action = "{{ url('store-parent') }}">
  <table class="table table-responsive">
    <thead>
      <tr>
        <th><h4><b>Father Details</b></h4></th>
        <th><h4><b>Mother Details</b></h4></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td >Father Name*
         <input type="text"  class="form-control" placeholder="Enter Father name" required id="father_name" name="father_name">
         <span id="father_name_err" style="color:red;"></span></td>
        <td>Mother Name*
         <input type="text"  class="form-control" placeholder="Enter Mother name" required id="mother_name" name="mother_name">
         <span id="mother_name_err" style="color:red;"></span></td>

       </tr>

      <tr>
        <td>Mobile Number*
         <input type="text" class="form-control" placeholder="Enter Father mobile number" required id="father_mob" name="father_mob" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"><span id="father_mob_err" style="color:red;"></span></td>
        <td>Mobile Number*
        <input type="text" class="form-control" placeholder="Enter Mother mobile number" required id="mother_mob" name="mother_mob" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"><span id="mother_mob_err" style="color:red;"></span></td>
      </tr>


      <tr>
        <td>Father Email Id*
        <input type="text" class="form-control" placeholder="Enter Father Email Id" required id="father_email_verified_at" name="father_email_verified_at"><span id="father_email_verified_at_err" style="color:red;"></span></td>
        <td>Mother Email Id*
         <input type="text" class="form-control" placeholder="Enter Mother Email Id" required id="mother_email_verified_at" name="mother_email_verified_at"><span id="mother_email_verified_at_err" style="color:red;"></span></td>
       </tr>


       <tr>
        <td> Father's Mother Tongue*
        <br>
        <select required id="father_mother_tongue" name="father_mother_tongue" style="width: 440px;">
        <option disabled selected value="">--SELECT--</option>
                                <option>Kannada</option>
                                <option>Tamil</option>
                                <option>Telugu</option>
                                <option>Hindi</option>
                            </select><span id="father_mother_tongue_err" style="color:red;"></span></td>
                <td> Mother's Mother Tongue*
                <br>
                    <select required id="mother_mother_tongue" name="mother_mother_tongue" style="width: 440px;">
                    <option disabled selected value="">--SELECT--</option>
                                            <option>Kannada</option>
                                            <option>Tamil</option>
                                            <option>Telugu</option>
                                            <option>Hindi</option>
                                    </select><span id="mother_mother_tongue_err" style="color:red;"></span>
                 </td>
       </tr>


       <tr>
        <td>Residential Address*
           <input type="text" class="form-control" placeholder="Enter Residential Address" required id="father_residential_address" name="father_residential_address"><span id="father_residential_address_err" style="color:red;"></span></td>
        <td>Residential Address*
          <input type="text" class="form-control" placeholder="Enter Residential Address" required id="mother_residential_address" name="mother_residential_address"><span id="mother_residential_address_err" style="color:red;"></span></td>
      </tr>


      <tr>
        <td>Area*
            <input type="text" class="form-control" placeholder="Enter Area" required id="father_area" name="father_area"><span id="father_area_err" style="color:red;"></span></td>
        <td>Area*
            <input type="text" class="form-control" placeholder="Enter Area" required id="mother_area" name="mother_area"><span id="mother_area_err" style="color:red;"></span></td>
      </tr>


       <tr>
        <td>District*
            <input type="text"  class="form-control" placeholder="Enter District" required id="father_district" name="father_district"><span id="father_district_err" style="color:red;"></span></td>
        <td>District*
             <input type="text"  class="form-control" placeholder="Enter District" required id="mother_district" name="mother_district"><span id="mother_district_err" style="color:red;"></span></td>
      </tr>


        <tr>
        <td>State*
            <input type="text"  class="form-control" placeholder="Enter state" required id="father_state" name="father_state"><span id="father_state_err" style="color:red;"></span></td>
        <td>State*
             <input type="text"  class="form-control" placeholder="Enter state" required id="mother_state" name="mother_state"><span id="mother_state_err" style="color:red;"></span></td>
      </tr>


       <tr>
        <td>Country*
        <br>
           <select required id="father_country" name="father_country" style="width: 440px;">
           <option disabled selected value="">--SELECT--</option>
                                <option>India</option>
                                <option>America</option>
                                <option>Australia</option>
                                <option>Brazil</option>
                                <option>Canada</option>
                                <option>Germany</option>
                                <option>France</option>
                                <option>Italy</option>
                                <option>Others</option>

                            </select><span id="father_country_err" style="color:red;"></span></td>
                <td>Country*
                <br>
                    <select required id="mother_country" name="mother_country" style="width: 440px;">
                    <option disabled selected value="">--SELECT--</option>
                                        <option>India</option>
                                        <option>America</option>
                                        <option>Australia</option>
                                        <option>Brazil</option>
                                        <option>Canada</option>
                                        <option>Germany</option>
                                        <option>France</option>
                                        <option>Italy</option>
                                        <option>Others</option>

                                    </select><span id="mother_country_err" style="color:red;"></span></td>
            </tr>


         <tr>
        <td>Pincode*
            <input type="text" class="form-control" placeholder="Enter Pincode" required id="father_pincode" name="father_pincode" 
            oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="6"><span id="father_pincode_err" style="color:red;"></span></td>
        <td>Pincode*
             <input type="text" class="form-control" placeholder="Enter Pincode" required id="mother_pincode" name="mother_pincode"
             oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="6"><span id="mother_pincode_err" style="color:red;"></span></td>
      </tr>


       <tr>
          <td>Residential Number*
            <input type="text" class="form-control" placeholder="Enter Residential Number" required id="father_residential_no" name="father_residential_no" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="12"><span id="father_residential_no_err" style="color:red;"></span></td>
        <td>Residential Number*
             <input type="text" class="form-control" placeholder="Enter Residential Number" required id="mother_residential_no" name="mother_residential_no" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="12"><span id="mother_residential_no_err" style="color:red;"></span></td>
      </tr>

       <tr class="form-group">
          <td>Enter Designation*
          <br>
            <select class="form-select" required id="father_designation" name="father_designation" style="width: 440px;">
            <option disabled selected value="">--SELECT--</option>
                                <option>Private Sector</option>
                                <option>Public sector</option>
                                <option>Bussiness</option>
                                <option>Agriculture</option>
                                <option>Others</option>
                                </select>
                                <span id="father_designation_err" style="color:red;"></span>
                            </td>
        <td>Enter Designation
        <br>
             <select  class="form-select" required id="mother_designation" name="mother_designation"style="width: 440px;">
             <option disabled selected value="">--SELECT--</option>
                                <option>Private Sector</option>
                                <option>Public sector</option>
                                <option>Bussiness</option>
                                <option>Agriculture</option>
                                <option>Others</option>
                                </select></td>
      </tr>


       <tr>
          <td>Enter Company*
            <input type="text" class="form-control" placeholder="Enter Company" required id="father_company" name="father_company"><span id="father_company_err" style="color:red;"></span></td>
        <td>Enter Company
             <input type="text" class="form-control" placeholder="Enter Company" required id="mother_company" name="mother_company"></td>
      </tr>


       <tr>
          <td>Enter Company Address*
            <input type="text" class="form-control" placeholder="Enter Company" required id="father_company_address" name="father_company_address"><span id="father_company_address_err" style="color:red;"></span></td>
        <td>Enter Company Address
             <input type="text" class="form-control" placeholder="Enter Company" required id="mother_company_address" name="mother_company_address"></td>
      </tr>


      <tr>
          <td>Enter Office Number*
             <input type="text" class="form-control"  placeholder="Enter Office Number" required id="father_office_number" name="father_office_number" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"><span id="father_office_number_err" style="color:red;"></span></td>
        <td>Enter Office Number
              <input type="text" class="form-control"  placeholder="Enter Office Number" required id="mother_office_number" name="mother_office_number" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"></td>
      </tr>


      <tr>
          <td>Gross Annual Income (INR)*
             <input type="text" class="form-control"  placeholder="Enter Gross Annual Income" required id="father_annual_income" name="father_annual_income" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"><span id="father_annual_income_err" style="color:red;"></span></td>
        <td>Gross Annual Income (INR)
              <input type="text" class="form-control"  placeholder="Enter Gross Annual Income" required id="mother_annual_income" name="mother_annual_income" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="10"></td>
      </tr>
      <input type="hidden" id="page_type" name="page_type" value="<?php echo $_GET['class'];?>">
    </tbody>
  </table>
        </form>
        <center><div class="col">  
              <div class="form-check">  
                <button class=" btn btn-back btn-primary">Go back</button>
                <button class="btn btn-submit btn-primary">Save & continue</button>
             </div></center>
          
                <div class="modal-footer justify-content-center">  
                    @include('footer')
                </div>
</div>
  <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.btn-back').click(function(){
            let page_type = document.getElementById("page_type").value;
            window.location.href ="{{ url('onlinereg/a?class=') }}"+page_type;
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

            if(!father_name || !father_mob || !father_email_verified_at || !father_mother_tongue || !father_residential_address || !father_area 
            || !father_district || !father_state || !father_country || !father_pincode || !father_residential_no || !father_designation|| !father_company 
            || !father_company_address || !father_office_number || !father_annual_income || !mother_name || !mother_mob || !mother_email_verified_at || !mother_mother_tongue || !mother_residential_address || !mother_area 
            || !mother_district || !mother_state || !mother_country || !mother_pincode || !mother_residential_no)
            {
                if(!father_name)
                {
                    document.getElementById("father_name_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_name_err").innerHTML = " ";
                }

                if(!father_mob)
                {
                    document.getElementById("father_mob_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("father_mob_err").innerHTML = " ";
                }

                if(!father_email_verified_at)
                {
                    document.getElementById("father_email_verified_at_err").innerHTML = "This is Required Field";
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
                else
                {
                    document.getElementById("father_district_err").innerHTML = " ";
                }

                if(!father_state)
                {
                    document.getElementById("father_state_err").innerHTML = "This is Required Field";
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
                else
                {
                    document.getElementById("father_pincode_err").innerHTML = " ";
                }

                if(!father_residential_no)
                {
                    document.getElementById("father_residential_no_err").innerHTML = "This is Required Field";
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
                else
                {
                    document.getElementById("mother_name_err").innerHTML = " ";
                }

                if(!mother_mob)
                {
                    document.getElementById("mother_mob_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("mother_mob_err").innerHTML = " ";
                }

                if(!mother_email_verified_at)
                {
                    document.getElementById("mother_email_verified_at_err").innerHTML = "This is Required Field";
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
                else
                {
                    document.getElementById("mother_district_err").innerHTML = " ";
                }

                if(!mother_state)
                {
                    document.getElementById("mother_state_err").innerHTML = "This is Required Field";
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
                else
                {
                    document.getElementById("mother_pincode_err").innerHTML = " ";
                }

                if(!mother_residential_no)
                {
                    document.getElementById("mother_residential_no_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("mother_residential_no_err").innerHTML = " ";
                }

         
            }
            else
            {
                document.getElementById("myForm").submit();
            }
        });
    </script>

</body>
</html>



<style>
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