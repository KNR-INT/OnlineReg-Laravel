@include('header') 
<!DOCTYPE html>
<html>
<body>
     
     <div class="container">
          <div>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item ">
                <span class="progress-count">1</span>
               
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">2</span>
               
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">3</span>
               
            </li>
            <li class="step-wizard-item current-item">
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
                     <?php 
                            $id = $_GET['appli_id'];
                            $student = DB::select("SELECT * FROM `students` WHERE `id` = '$id'");
                            ?>
<div class="col-15">
<div class="text-align: center;" >	
<center>		
<label style="color:blue;">&nbsp;<h1 >NATIONAL PUBLIC SCHOOL</h1></label>
<br>
<label style="color:blue;"><h3>YESHWANTHPUR</h3></label>
<br>
<label style="color:blue;"><h4>Application For Registration</h4>	
<label style="color:blue;">&nbsp;<h2>Application Number: NPSYPR/<?php echo $student[0]->class;?>/0<?php echo $student[0]->id; ?></h2></label>
<br> 
&#160;&#160;&#160;&#160;&#160;&#160;

</div></center>
</div>
          <div class="card ">
           <div class="card-header" style="background-color:blue;height:50px;">            
             <label  style="color:white; margin-top:-5px; margin-left:420px"><h5>Personal Details</h5>
              <div class="card-tools">
               
              </div>
            </div> 
             <div class="d-flex border-bottom p-1 mb-3">
             </div>
                      <div class="card-body table-responsive p-1">
                           <table class="table table-bordered table-hover" id ="Applications">
                                             <thead>  
                                                  </tr>
                                             </thead>
                                             <tbody>
                            
     <form id="myForm" action="{{ url('update-applino') }}" enctype="multipart/form-data">
        <input type="hidden" id="page_type" name="page_type" value="<?php echo $_GET['class']; ?>">
    
        <input type="hidden" id="appli_no" name="appli_no" value="NPSYPR/<?php echo $student[0]->class;?>/0<?php echo $student[0]->id; ?>">

        <input type="hidden" id="appli_id" name="appli_id" value="<?php echo $_GET['appli_id']; ?>">

    </form>

    <table class="table table-bordered table-hover" id ="Applications">
                                             <thead>  
                                                  </tr>
                                             </thead>
                                             <tbody>
                                            
                                             </td>
                                             
                                             <table align="left" cellpadding = "20" >
                                             <?php 
                            $class = $_GET['class'];
                        ?>
                                             <?php 
                            $id = $_GET['appli_id'];
                            $student = DB::select("SELECT * FROM `students` WHERE `id` = '$id'");
                            ?>

<tr>
<td><b>Name Of the Student</b></td>
<td><input type="text" id="name" value="<?php echo $student[0]->name; ?>" readonly></td>


</tr>
 
<tr>
<td><b>Gender</b></td>
<td><input type="text" id="gender" value="<?php echo $student[0]->gender ?>" readonly></td>

</tr>

<tr>
<td><b>Nationality</b></td>
<td><input type="text" id="nationality" value="<?php echo $student[0]->nationality ?>" readonly></td>

</tr>
 

<td><b>Mother Tongue</b></td>
<td><input type="text" id="tongue" value="<?php echo $student[0]->mother_tongue ?>" readonly></td>
</tr>
 
<tr>
<td><b>Aadhar Card No</b></td>

<td><input type="text" id="aadhar" value="<?php echo $student[0]->aadhar ?>" readonly></td>


</tr>
<table align="right" cellpadding = "20">
 
<tr>
<td><b>Date Of Birth</b></td>
<td><input type="text" id="birth" value="<?php echo $student[0]->dob ?>" readonly></td>

</tr>
 
<tr>
<td><b>Class</b></td>
<td><input type="text" id="class1" value="<?php echo $student[0]->class ?>" readonly></td>

</tr>
 
<tr>
<td><b>Religion</b></td>
<td><input type="text" id="religion" value="<?php echo $student[0]->religion ?>" readonly></td>

</tr>
 
<tr>
<td><b>Birth Place</b></td>
<td><input type="text" id="place" value="<?php echo $student[0]->birth_place ?>" readonly></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td><b>Mode Of Transport</b></td>

<td><input type="text" id="transport" value="<?php echo $student[0]->transport ?>" readonly></td>


</tr>

</tbody>
</table>
</div>

            
            
     
          <div class="card ">
         
           <div class="card-header" style="background-color:blue;height:50px;">
             <label  style="color:white; margin-top:-5px; margin-left:420px"><h5>Parent Details</h5>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>

                </button>
              </div>
            </div>
             
                    <div class="card-body table-responsive p-1">
                        <table class="table  table-hover" id ="Applications">
                            <thead>
                                </tr>
                                             </thead>
                                             <tbody>
                                             <table align="left" cellpadding = "20">
 

<tr>
<td><b>Father Name</b></td>
<td><input type="text" id="father_name" value="<?php echo $student[0]->father_name ?>" readonly></td>
</td>
</tr>
 
<tr>
<td><b>Mobile Number</b></td>
<td><input type="text" id="mobile_number" value="<?php echo $student[0]->father_mob ?>" readonly></td>
</td>
</tr>

<tr>
<td><b>Email Id</b></td>
<td><input type="text" id="email_id" value="<?php echo $student[0]->father_email_verified_at ?>" readonly></td>

</td>
</tr>

<tr>
<td><b> Mother Tongue</b></td>
<td><input type="text" id="name1" value="<?php echo $student[0]->father_mother_tongue ?>" readonly></td>

</tr>

<tr>
<td><b>Area</b></td>
<td><input type="text" id="area" value="<?php echo $student[0]->father_area ?>" readonly></td>

</tr>
<tr>
<td><b>District</b></td>
<td><input type="text" id="district" value="<?php echo $student[0]->father_district ?>" readonly></td>

</tr>
<tr>
<td><b>State</b></td>
<td><input type="text" id="state" value="<?php echo $student[0]->father_state ?>" readonly></td>

</tr>
<tr>
<td><b>Country</b></td>

<td><input type="text" id="country" value="<?php echo $student[0]->father_country ?>" readonly></td>


</td>
</tr>
<tr>
<td><b>Pincode</b></td>
<td><input type="text" id="pincode" value="<?php echo $student[0]->father_pincode ?>" readonly></td>
</tr>
<tr>
<td><b>Residential Address</b></td>
<td><input type="text" id="residential" value="<?php echo $student[0]->father_residential_address ?>" readonly></td>
</tr>
<tr>
<td><b>Telephone(R)</b></td>
<td><input type="text" id="telephone" value="<?php echo $student[0]->father_residential_no ?>" readonly></td>
</tr>
<tr>
<td><b>Gross  annual Income(INR)</b></td>
<td><input type="text" id="gross" value="<?php echo $student[0]->father_annual_income ?>" readonly></td>
</tr>
<table align="right" cellpadding = "20">
 
<tr>
<td><b>Mother Name</b></td>
<td><input type="text" id="mother_name" value="<?php echo $student[0]->mother_name ?>" readonly></td>
</tr>
 
<tr>
<td><b>Mobile Number</b></td>
<td><input type="text" id="mobile_number1" value="<?php echo $student[0]->mother_mob ?>" readonly></td>
</tr>
 
<tr>
<td><b>Email Id</b></td>
<td><input type="text" id="mother_email_id" value="<?php echo $student[0]->mother_email_verified_at ?>" readonly></td>
</td>
</tr>
 
<tr>
<td><b>Mother Tongue</b></td>
<td><input type="text" id="mother_tongue" value="<?php echo $student[0]->mother_mother_tongue ?>" readonly></td>
</tr>
 
<tr>
<td><b>Area</b></td>
<td><input type="text" id="mother_area" value="<?php echo $student[0]->mother_area ?>" readonly></td>
</tr>
<tr>
<td><b>District</b></td>
<td><input type="text" id="mother_district" value="<?php echo $student[0]->mother_district ?>" readonly></td>
</tr>
<tr>
<td><b>State</b></td>
<td><input type="text" id="mother_state" value="<?php echo $student[0]->mother_state ?>" readonly></td>
</tr>
<tr>
<td><b>Country</b></td>
<td><input type="text" id="mother_country" value="<?php echo $student[0]->mother_country ?>" readonly></td>
</tr>
<tr>
<td><b>Pincode</b></td>
<td><input type="text" id="mother_pincode" value="<?php echo $student[0]->mother_pincode ?>" readonly></td>
</tr>
<tr>
<td><b>Residential Address</b></td>
<td><input type="text" id="mother_residential_address" value="<?php echo $student[0]->mother_residential_address ?>" readonly></td>
</tr>
<tr>
<td><b>Telephone(R)</b></td>
<td><input type="text" id="mother_telephone" value="<?php echo $student[0]->mother_residential_no ?>" readonly></td>
</tr>
<tr>
<td><b>Gross  annual Income(INR)</b></td>
<td><input type="text" id="mother_gross" value="<?php echo $student[0]->mother_annual_income ?>" readonly></td>
</tr>
</tbody>
</table>
</div>



     
          <div class="card ">
         
           <div class="card-header" style="background-color:blue;height:50px;">

             <label  style="color:white; margin-top:-5px; margin-left:400px"><h5>Company Details</h5>
          
            
              <div class="card-tools">
               
              </div>
            </div>
             <div class="d-flex border-bottom p-1 mb-3">
             </div>
     
                                   <div class="card-body table-responsive p-1">
                                        <table class="table table-bordered table-hover" id ="Applications">
                                             <thead>
                                            
                                                
                                                  
                                                  </tr>
                                             </thead>
                                             <tbody>
                                             <table align="left" cellpadding = "20">

<tr>
<td><b>Designation</b></td>
<td><input type="text" id="father_designation" value="<?php echo $student[0]->father_designation ?>" readonly></td>

</tr>
 
<tr>
<td><b>Company Name</b></td>
<td><input type="text" id="father_company" value="<?php echo $student[0]->father_company ?>" readonly></td>


</tr>
 
<tr>
<td><b>Company address</b></td>
<td><input type="text" id="father_company_address" value="<?php echo $student[0]->father_company_address ?>" readonly></td>


</tr>
 

<table align="right" cellpadding = "20">
 
<tr>
<td><b>Designation</b></td>
<td><input type="text" id="mother_designation" value="<?php echo $student[0]->mother_designation ?>" readonly></td>


</tr>
 
<tr>
<td><b>Company Name</b></td>
<td><input type="text" id="mother_company" value="<?php echo $student[0]->mother_company ?>" readonly></td>

</tr>
 
<tr>
<td><b>Company address</b></td>
<td><input type="text" id="mother_company_address" value="<?php echo $student[0]->mother_company_address ?>" readonly></td>

</tr>
 

</tbody>
</table>
</div>
<div class="card ">
           <div class="card-header" style="background-color:blue;height:50px;">
             <label  style="color:white; margin-top:-5px; margin-left:400px"><h5>Documents</h5>
              <div class="card-tools">
              
              </div>
            </div>
             <div class="d-flex border-bottom p-1 mb-3">
             </div>
        <div class="card-body table-responsive p-1">
                <table class="table table-bordered table-hover" id ="Applications">
                          <thead>
                                 
                          </tr>
                          </thead>
                               <tbody>
                         <table align="left" cellpadding = "20">
                                            
                         <tr>
<td><b>1. Student Photo</b></td>
</td>
</tr>
<tr>
<td><b>2. Birth Certificate</b></td>
</td>
</tr>
<tr>
<td><b>3. Aadhar Passport</b></td>
</td>
</tr>
<tr>
<td><b>4. Father Aadhar</b></td>
</td>
</tr>
<tr>
<td><b>5. Mother Aadhar</b></td>
</td>
</tr>
<table align="center" cellpadding = "20">
<tr>
<td><input type="text" value="<?php echo $student[0]->image ?>" readonly></td>

</tr>
<tr>
<td><input type="text" value="<?php echo $student[0]->birth_cer ?>" readonly></td>

</tr>

<tr>
<td><input type="text" value="<?php echo $student[0]->student_adr ?>" readonly></td>

</tr>

<tr>
<td><input type="text" value="<?php echo $student[0]->father_aadhar ?>" readonly></td>

</tr>

<tr>
<td><input type="text" value="<?php echo $student[0]->mother_aadhar ?>" readonly></td>
</tr>

</tbody>
</table>

</div>
</div>
</div>
</body>
</html>
<div class="justify-content-center" style="margin-top:50px; margin-left: 50px;">
		<div class="container-fluid">
<h3 style= "color:blue">DECLARATION BY PARENT/GUARDIAN</h3>

<p>I have read the rules and regulations of NPS YPR and I fully agree to abide by them so long as my child is a student at this school if selected.</p>
<br>
<p>I hereby declare that the information furnished above is true and correct to the best of my knowledge and I undertake to inform you of any changes therein, immediately.</p>
<br>
<p>Application once submitted connot be edited. Kindly note your application no : YPR/mont/2022/00981</p>
</div>
	</div>
    <div class="icheck-primary d-inline">
            <input type='checkbox'  id="checkbox" name = "checkbox"> 
<label for="checkbox">
<b>I Agree</b>
</label>
</div>
<br>
                    <center>
                       <a class="btn btn-back btn-outline-success float-center ">Edit Application</a>
                       <a class="btn btn-submit btn-outline-success float-center ">Submit</a>
                       <div>
                    </center>

        

<style>
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
      .div.card.header{
          color: white;   
     }
     .nav.main-header.navbar.navbar-expand.navbar-white.navbar-light{
          background: white !important;   
     }
     </style>
		</div>
        <script>
  $('#checkbox').click(function() {
        if ($(this).is(':checked')) {
        		$('#btn1').removeAttr('disabled');
            
        } else {
            $('#btn1').attr('disabled', 'disabled');
        }
    });
    $('.btn-back').click(function(){
            let class_name = document.getElementById("page_type").value;
            let appli_id = document.getElementById("appli_id").value;
            window.location.href = "{{ url('onlinereg') }}/a?class="+class_name+"&appli_id="+appli_id;
        });

        $('.btn-submit').click(function(){
            document.getElementById("myForm").submit();
        });

</script>



	</div>
     @include('footer')