@extends('layout')
@section('content')

<script src='https://www.google.com/recaptcha/api.js'></script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="My Application Description">
    <meta name="author" content="Sammy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<main class="login-form">

    <div class="cotainer">
        <div class="justify-content-center">
            <div class="col-md-15">
                <div class="card">
                <div class="bg-image">
                <style> 
.bg-image {
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdqvMGCmxHw4vgaPbmwJnSg_0Yrw3FIu2qeg&usqp=CAU");
  background-color: #cccccc;
}
</style>
                   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         <img  src="public/Image/logo.jpg">
        </div>
        <div class="card-body">
          <h2>National Public School</h2></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
      </div>
                 
                    @if(\Session::has('message'))
                        <div class="alert alert-info">
                            {{\Session::get('message')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('otp') }}">
                            
                            @csrf
                            <div class="d-flex justify-content-center">
                            <div class="col-md-6">
                                <input type="text" placeholder="Enter the OTP" id="otp" class="form-control" name="otp"
                                    autofocus>
                                @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
</div>
                            <div class="form-group mb-3">
                             <div class="col-md-12">
                                
                                <div class="d-flex justify-content-center" style="text-align:center; margin-top:30px;">
                               <div style="text-align:center"  class="g-recaptcha col-md-13 " data-sitekey="6LeUvnggAAAAABBDr_CIHhs3bKyQ5tNRhjWCGvy_"  data-callback="enableBtn">
                              </div>
                               </div>
                               <br>
                               <div class="d-flex justify-content-center"  >
                                   <button disabled="disabled" type="submit" id="button1" class="btn btn-dark btn-block">Verify</button>
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


<script>
              function enableBtn(){
                  document.getElementById("button1").disabled = false;
              }
          </script>
          <style>
          img {
  display: flex;
  margin-left: 35%;
  margin-right: 35%;
  width: 25%;
          }
  h3 {
  font-family: Calibri; 
  color:Black; 
  font-size:20pt; 
  text-align:center; 
  width:500px;
  /* background-color:lightgrey;  */
}


</style>
   <!-- footer -->
	<!-- <footer class="bg-li py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="subscribe mx-auto">
			
		</div>
	</footer> -->
	<!-- //footer -->
	<!-- copyright bottom -->
	<!-- //copyright bottom -->
    @include('footer')
</body>

</html>
</head>
</html>
@endsection
