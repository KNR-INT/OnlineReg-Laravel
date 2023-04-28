@extends('layout')
@section('content')

<script src='https://www.google.com/recaptcha/api.js'></script>
<!DOCTYPE html>
<html>
<head>


<main class="login-form">

    <div class="cotainer">
    
     
     <!-- <img src="https://mdbootstrap.com/img/Others/documentation/1.webp" class="img-fluid"
      alt="Responsive image">  -->
        
        <div class="justify-content-center">
            <div class="col-md-15">
                <div class="card">
                <div class="bg-image">
                <style> 
.bg-image {
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz_AfTJ_rzbaerb2HRwGoNsthQ2X9vIadfuA&usqp=CAU");
  background-color: #cccccc;
}
</style>
                    <h3 class="card-header text-center">National Public School</h3>
                 
                    @if(\Session::has('message'))
                        <div class="alert alert-info">
                            {{\Session::get('message')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('postlogin') }}">
                            
                            @csrf
                            <div class="d-flex justify-content-center">
                            <div class="col-md-6">


                                <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            </div>
                            <!-- <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div> -->
                            <div class="form-group mb-3">
                                <!-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div> -->
                                <!-- <div class="col-md-12">
                                <div class="d-flex justify-content-center" style="text-align:center; margin-top:30px;">
                                 <div style="text-align:center" class="g-recaptcha col-md-13 " data-sitekey="6Lclm3klAAAAAC5yeu5bs5THdLo8THJZIhwXM61X" data-callback="enableBtn">
                             </div><br> -->
                             <div class="col-md-12">
                                
                             <div class="d-flex justify-content-center" style="text-align:center; margin-top:30px;">
                            <div style="text-align:center"  class="g-recaptcha col-md-13 " data-sitekey="6LeUvnggAAAAABBDr_CIHhs3bKyQ5tNRhjWCGvy_"  data-callback="enableBtn">
                           </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center"  >
                                <button disabled="disabled" type="submit" id="button1" class="btn btn-dark btn-block">verify</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
              function enableBtn(){
                  document.getElementById("button1").disabled = false;
              }
          </script>
   <!-- footer -->
	<!-- <footer class="bg-li py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="subscribe mx-auto">
			
		</div>
	</footer> -->
	<!-- //footer -->
	<!-- copyright bottom -->
	<div class="justify-content-center" style="margin-top:100px;">
		<div class="container-fluid">
			<div class="justify-content-center px-md-3 position-relative text-center">
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
					<!-- <a text-align='left' href="https://npsypr.edu.in/careers/">
                  <p>&nbsp;&nbsp;  Careers  </a> <a href="https://npsypr.edu.in/virtual-tour/"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Virtual&nbsp;Tour </p>
                    </a> -->
					<!-- &nbsp;
                    &nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp; -->
					
					<!-- &nbsp;
					&nbsp; -->
					<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
					<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

					<a text-align='center' style="margin:left:1px;">
						<p> Phone : <a href = "tel:+91 8029501184">+91 8029501184</a>
         
          , <a  href = "tel:tel:+91 8023571220" >+91 8023571220</a>
          
          <br/>
          <a text-align='center' style="margin: left 1px;">
          Email : <a href = "mailto:info@npsypr.com">info@npsypr.com</a>
        
          , <a href = "admissions@npsypr.com">admissions@npsypr.com</a>
		  <br/>&nbsp;&nbsp;&nbsp;
		  <a tect-align='center'>
          © 2013 - 2022 by NPS Yeshwanthpur. All Rights Reserved.
      
Designed by <span style="color:#E31E25">K</span><span style="color:#19A9E4">N</span><span style="color:#67AE3B">R</span> Tech Solutions.</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<!-- © 2013 - 2022 by NPS Yeshwanthpur. All Rights Reserved. Designed by KNR Tech Solutions. -->
				<!-- <a text-align='right' href="https://npsypr.edu.in/facilities/">
                  <p> Facilities </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php#">Contact Us </p></a>
                    	 -->
				
			</div>
		</div>
	</div>
	<!-- //copyright bottom -->

</body>

</html>
</head>
<body>
    <!-- <p>Document Body</p> -->
</body>
</html>
@endsection
