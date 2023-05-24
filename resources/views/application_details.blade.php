@include('header') 
<!DOCTYPE html>
<html>
<body>
     <div class="container">
<div class="col-15">
<div class="text-align: center;" >	
<center>		
<label style="color:blue;">&nbsp;<h1 >NATIONAL PUBLIC SCHOOL</h1></label>
<br>
<label style="color:blue;"><h3>YESHWANTHPUR</h3></label>
<br>
<label style="color:blue;"><h4>Application For Registration</h4>	
<label style="color:blue;">&nbsp;<h2>Application Number</h2></label>
<br> 
&#160;&#160;&#160;&#160;&#160;&#160;
<label style="color:black;"><h3>YESHWANTHPUR</h3></label><br>
<label style="color:black; margin-left:20px;"><h4>Application For Registration</h4>
</div></center>
</div>
	

 
            
            
     
          <div class="card ">
         
           <div class="card-header" style="background-color:blue;height:50px;">
             <!-- <h3 class="card-title" style="color: #ffffff; ">  </h3> -->
            
             <label  style="color:white; margin-top:-5px; margin-left:420px"><h5>Personal Details</h5>
          
             
              <div class="card-tools">
               
              </div>
            </div> 
             <div class="d-flex border-bottom p-1 mb-3">
             </div>
           


             <!-- get_entry -->
                                   <div class="card-body table-responsive p-1">
                                        <table class="table table-bordered table-hover" id ="Applications">
                                             <thead>
                                            
                                                
                                                  
                                                  </tr>
                                             </thead>
                                             <tbody>
                                             @foreach ($students as $item)
                                             <input type="hidden" class='form-control id' id="{{ $item->id }}"  ></td>
                                             
                                             <table align="left" cellpadding = "20" >
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td><b>Name Of the Student</b></td>
<td>{{ $item->name }}</td>
</td>

</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td><b>Gender</b></td>
<td>{{ $item->gender }}</td>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td><b>Nationality</b></td>
<td>{{ $item->nationality }}</td>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td><b>Mother Tongue</b></td>
<td>{{ $item->mother_tongue }}</td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td><b>Aadhar Card No</b></td>
<td>
<td>{{ $item->aadhar }}</td>

</td>
</tr>
<table align="right" cellpadding = "20">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td><b>Date Of Birth</b></td>
<td>{{ $item->dob }}</td>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td><b>Class</b></td>
<td>{{ $item->class }}</td>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td><b>Religion</b></td>
<td>{{ $item->religion }}</td>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td><b>Birth Place</b></td>
<td>{{ $item->birth_place }}</td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td><b>Mode Of Transport</b></td>
<td>
<td>{{ $item->transport }}</td>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>

            
            
     
          <div class="card ">
         
           <div class="card-header" style="background-color:blue;height:50px;">
             <!-- <h3 class="card-title" style="color: #ffffff; ">  </h3> -->
            
             <label  style="color:white; margin-top:-5px; margin-left:420px"><h5>Parent Details</h5>
          
           
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>

                </button>
              </div>
            </div>
             <div class="d-flex border-bottom p-1 mb-3">
             </div>
           


             <!-- get_entry -->
                                   <div class="card-body table-responsive p-1">
                                        <table class="table  table-hover" id ="Applications">
                                             <thead>
                                            
                                                
                                                  
                                                  </tr>
                                             </thead>
                                             <tbody>
                                             <table align="left" cellpadding = "20">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td><b>Father Name</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td><b>Mobile Number</b></td>
<td><input type="text" name="Father_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td><b>Email Id</b></td>
<td><input type="text" name="Mother_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td><b> Mother Tongue</b></td>
<td><input type="text" name="For_class" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->




<tr>
<td><b>Area</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>District</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>State</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Country</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Pincode</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Residential Address</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Telephone(R)</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Gross  annual Income(INR)</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<table align="right" cellpadding = "20">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td><b>Mother Name</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td><b>Mobile Number</b></td>
<td><input type="text" name="Father_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td><b>Email Id</b></td>
<td><input type="text" name="Mother_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td><b>Mother Tongue</b></td>
<td><input type="text" name="For_class" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->




<tr>
<td><b>Area</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>District</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>State</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Country</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Pincode</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Residential Address</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Telephone(R)</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
<tr>
<td><b>Gross  annual Income(INR)</b></td>
<td>
<input type="text" name="Application_No" maxlength="10" />

</td>
</tr>
</tbody>
</table>
</div>



     
          <div class="card ">
         
           <div class="card-header" style="background-color:blue;height:50px;">
             <!-- <h3 class="card-title" style="color: #ffffff; ">  </h3> -->
            
             <label  style="color:white; margin-top:-5px; margin-left:400px"><h5>Company Details</h5>
          
            
              <div class="card-tools">
               
              </div>
            </div>
             <div class="d-flex border-bottom p-1 mb-3">
             </div>
           


             <!-- get_entry -->
                                   <div class="card-body table-responsive p-1">
                                        <table class="table table-bordered table-hover" id ="Applications">
                                             <thead>
                                            
                                                
                                                  
                                                  </tr>
                                             </thead>
                                             <tbody>
                                             <table align="left" cellpadding = "20">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td><b>Designation</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td><b>Company Name</b></td>
<td><input type="text" name="Father_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td><b>Company address</b></td>
<td><input type="text" name="Mother_Name" maxlength="30"/>
</td>
</tr>
 

<table align="right" cellpadding = "20">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td><b>Designation</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td><b>Company Name</b></td>
<td><input type="text" name="Father_Name" maxlength="30"/>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td><b>Company address</b></td>
<td><input type="text" name="Mother_Name" maxlength="30"/>
</td>
</tr>
 

</tbody>
</table>
</div>




            
            
     
          <div class="card ">
         
           <div class="card-header" style="background-color:blue;height:50px;">
             <!-- <h3 class="card-title" style="color: #ffffff; ">  </h3> -->
            
             <label  style="color:white; margin-top:-5px; margin-left:400px"><h5>Documents</h5>
          
             <!-- curriculumname -->
             <!-- sub_activity -->
             <!-- activityname -->
             <!-- sub_act -->
              <div class="card-tools">
              
              </div>
            </div>
             <div class="d-flex border-bottom p-1 mb-3">
             </div>
           


             <!-- get_entry -->
                                   <div class="card-body table-responsive p-1">
                                        <table class="table table-bordered table-hover" id ="Applications">
                                             <thead>
                                            
                                                
                                                  
                                                  </tr>
                                             </thead>
                                             <tbody>
                                             <table align="left" cellpadding = "20">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td><b>1. Student Photo</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
<tr>
<td><b>2. Birth Certificate</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
<tr>
<td><b>3. Aadhar Passport</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
<tr>
<td><b>4. Father Aadhar</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
<tr>
<td><b>5. Mother Aadhar</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>

 

<table align="right" cellpadding = "20">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td><b>Selected File Name</b></td>
<td><img src="http://your.url/img/stuvi-logo.png" class="css-class" alt="image">
</td>
</tr>
 
<tr>
<td><b>Selected File Name</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>

<tr>
<td><b>Selected File Name</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>

<tr>
<td><b>Selected File Name</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>

<tr>
<td><b>Selected File Name</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
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



<style>
      .div.card.header{
          color: white;   
     }
     .nav.main-header.navbar.navbar-expand.navbar-white.navbar-light{
          background: white !important;   
     }
     </style>
<div>

<button class=" btn btn-primary" 
    onclick="window.location.href = 'onlinereg'">
    Edit Application
    </button>

<button DISABLED class= "btn btn-primary"  id="btn1" onclick="window.location.href = 'payment'">
Submit</button>

         </div>

        	<!-- </div> -->
		</div>
        <script>
  $('#checkbox').click(function() {
        if ($(this).is(':checked')) {
        		$('#btn1').removeAttr('disabled');
            
        } else {
            $('#btn1').attr('disabled', 'disabled');
        }
    });
</script>
	</div>
     @include('footer')