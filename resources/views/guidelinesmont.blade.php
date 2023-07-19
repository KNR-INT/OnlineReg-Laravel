<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>online Registration</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	background: #eeeeee;
	font-family: 'Varela Round', sans-serif;
}
.navbar {
	color: #fff;
	background: blue !important;
	padding: 5px 16px;
	border-radius: 0;
	border: none;
	box-shadow: 0 0 4px rgba(0,0,0,0.5);
}
</style>

<!DOCTYPE html>
<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<html>
<head>
    <title>Online Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
@include('header')
<body>
    
<div>
<div class="justify-content-center" style="margin-top:50px; margin-left: 50px;">
		<div class="container-fluid">
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
      <center><h2><b>GUIDELINES AND CONTACT DETAILS</h2></center>
        <br>
         <h3><b>ADMISSIONS</b></h3>
        <br>
        <p>Welcome to National Public School, Yeshwanthpur, an institution which prepares and motivates the students for a rapidly changing world by
             
        instilling in them critical thinking skills, a global perspective and respect for core values of honesty, loyalty, perseverance and compassion.</p>
        
        <p>Admission to National Public School, Yeshwanthpur, is open to all children from Pre-K, Kindergarten and Classes 1 to 9 & 11 and to I-5 Academy for Montessori.</p>
    
        <p>REGISTRATION FOR ADMISSION Registration form is available online on our website from 10/10/2022.Click Here</p>
        
         <p>SUBMIT THE COMPLETED DOWNLOADED FORM ALONG WITH THE FOLLOWING DOCUMENTS ATTESTED BY THE PARENTS 
           
        DURING INTERACTION OR ENTRANCE EXAM:</p>
  
        <p>1. Passport size photo of the student</p>
   
        <p>2. Student’s Birth Certificate.</p>
      
        <p>3. Immunisation Card (applicable upto Class 1)</p>

        <p>4. Covid Vaccination Certificate</p>
 
        <p>5. Student’s Aadhar Card.</p>
       
        <p>6. Parent’s Aadhar Card.</p>
       
        <p>7. Registration Fee - ₹ {{ $registrationFee }}/- (Online Payment)</p>

        <p>We appreciate the interest evinced by the parents seeking admission to National Public School Yeshwanthpur. We would like to inform that we have 
            <br>
        very limited seats available for admission to all of the classes from Montessori, Pre-KG, KG and Classes 1 to 12. The seats will be available
        <br>
        in the open category according to the priority list given below:</p>
    
        <p>1. The first priority is for siblings.</p>
 
        <p>2. The second priority is for children of our teachers and other staff members.</p>
     
        <p>3. Priority for admission is also listed for Alumni of National Public School.</p>
      
        <p>4. Subsequent seats will be open to others.</p>
        
        <p>5. Applications for admission to Mont II, Mont III, KG II and classes 2-7 are based on vacancies.</p>
      
        <p>6. Class 10 & Class 12 admissions are based on Interstate transfer.</p>
   
        <p>To have an effective teaching & learning process, we maintain a limited class strength. Considering the limited number of seats available, it is
          
        expected that those who seek admission will realize and understand the constraints the institution faces.
     
         Admission to classes 1 to 9 & 11 are finalized based on the performance in the written admission test conducted in the month of January 2022.</p>
         <p><b>
         Address for Communication :</b>
            <br>
            NATIONAL PUBLIC SCHOOL
            <br>
            #9/1, Pipeline Road, Raghavendra Layout,
            <br>
            (Behind RNS Motors),
            <br>
             Yeshwanthpur,
            <br>
             Bengaluru – 560 022
            <br>
            Phone: 091-080-23571220 / 091-6364071122    Email: admissions@npsypr.com<p>

            <div class="icheck-primary d-inline">
            <input type='checkbox'  id="checkbox" name = "checkbox"> 
<label for="checkbox">
I Agree
</label>
</div>
<br>

<div>
	<input type="hidden" id="class" value="<?php echo $_GET['class']; ?>">
	<input type="hidden" id="appli_id" value="">

<?php 
	$class = $_GET['class'];
?>
<button class=" btn btn-primary" onclick="window.location.href = '{{ url ('dashboard')}}'" value=" $email = User::where('id',$id)->email();">Go to Home</button>
    <!-- <a href="{{ url ('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-home"></i><span>Home</span></a> -->
       <button  DISABLED class="btn btn-submit btn-primary" id="btn1" >continue </button>
         </div>
		</div>
	</div>
    <script>
  $('#checkbox').click(function() {
        if ($(this).is(':checked')) {
		let class_name = document.getElementById("class").value;

        		$('#btn1').removeAttr('disabled');
        		$('#checkbox').attr('disabled', 'disabled');

			   $.ajax({
                                   url: "{{ url('create-id') }}",
                                   type: "GET",
                                   data: {
                                        class_name: class_name,
                                   },
                                   dataType: 'json',
                                   success: function(response) {
								// alert(response)
                                        document.getElementById("appli_id").value = response;
                                   }
                              });
            
        } else {
            $('#btn1').attr('disabled', 'disabled');
        }
    });

	$('.btn-submit').click(function() {
        let class_name = document.getElementById("class").value;
        let appli_id = document.getElementById("appli_id").value;
	//  alert(appli_id);
		window.location.href = "{{ url('onlinereg') }}/a?class="+class_name+"&appli_id="+appli_id;
    });
</script>

</body>
</head>
</html>

@include('footer')
</body>

</html>
</head>
</html>
<?php

?>


        <!-- <?php
                $session = session()->all();
            
                print_r($session);?> -->