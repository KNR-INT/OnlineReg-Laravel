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
                    <h3 class="card-header text-center">OTP_Login</h3>
                 
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
                                <input type="text" placeholder="Enter the OTP" id="email" class="form-control" name="email"
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
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
	<!-- //copyright bottom -->
    @include('footer')
</body>

</html>
</head>
<body>
    <!-- <p>Document Body</p> -->
</body>
</html>
@endsection
