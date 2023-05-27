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
                                             <?php 
                            $id = $_GET['appli_id'];
                            $student = DB::select("SELECT * FROM `students` WHERE `id` = '$id'");
                            ?>
                                             <input type="hidden" class='form-control id' id="{{ $student->id }}"  ></td>
                                             
                                             <table align="left" cellpadding = "20" >
<tr>
<td><b>Name Of the Student</b></td>
<td>{{ $student->name }}</td>
</td>

</tr>
 
<tr>
<td><b>Gender</b></td>
<td>{{ $student->gender }}</td>
</td>
</tr>

<tr>
<td><b>Nationality</b></td>
<td>{{ $student->nationality }}</td>
</td>
</tr>
 

<td><b>Mother Tongue</b></td>
<td>{{ $student->mother_tongue }}</td>
</tr>
 
<tr>
<td><b>Aadhar Card No</b></td>
<td>
<td>{{ $student->aadhar }}</td>

</td>
</tr>
<table align="right" cellpadding = "20">
 
<tr>
<td><b>Date Of Birth</b></td>
<td>{{ $student->dob }}</td>
</td>
</tr>
 
<tr>
<td><b>Class</b></td>
<td>{{ $student->class }}</td>
</td>
</tr>
 
<tr>
<td><b>Religion</b></td>
<td>{{ $student->religion }}</td>
</td>
</tr>
 
<tr>
<td><b>Birth Place</b></td>
<td>{{ $student->birth_place }}</td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td><b>Mode Of Transport</b></td>
<td>
<td>{{ $student->transport }}</td>

</td>
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
             <div class="d-flex border-bottom p-1 mb-3">
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
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
 
<tr>
<td><b>Mobile Number</b></td>
<td><input type="text" name="Father_Name" maxlength="30"/>
</td>
</tr>

<tr>
<td><b>Email Id</b></td>
<td><input type="text" name="Mother_Name" maxlength="30"/>
</td>
</tr>

<tr>
<td><b> Mother Tongue</b></td>
<td><input type="text" name="For_class" maxlength="100" /></td>
</tr>

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
 
<tr>
<td><b>Mother Name</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
 
<tr>
<td><b>Mobile Number</b></td>
<td><input type="text" name="Father_Name" maxlength="30"/>
</td>
</tr>
 
<tr>
<td><b>Email Id</b></td>
<td><input type="text" name="Mother_Name" maxlength="30"/>
</td>
</tr>
 
<tr>
<td><b>Mother Tongue</b></td>
<td><input type="text" name="For_class" maxlength="100" /></td>
</tr>
 
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
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
 
<tr>
<td><b>Company Name</b></td>
<td><input type="text" name="Father_Name" maxlength="30"/>
</td>
</tr>
 
<tr>
<td><b>Company address</b></td>
<td><input type="text" name="Mother_Name" maxlength="30"/>
</td>
</tr>
 

<table align="right" cellpadding = "20">
 
<tr>
<td><b>Designation</b></td>
<td><input type="text" name="Student_Name" maxlength="30"/>
</td>
</tr>
 
<tr>
<td><b>Company Name</b></td>
<td><input type="text" name="Father_Name" maxlength="30"/>
</td>
</tr>
 
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
<div>

<button class=" btn btn-primary" 
    onclick="window.location.href = 'onlinereg'">
    Edit Application
    </button>

<button DISABLED class= "btn btn-primary"  id="btn1" onclick="window.location.href = 'payment'">
Submit</button>

         </div>
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