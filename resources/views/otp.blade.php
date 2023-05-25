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

    @include('footer')
</body>

</html>
</head>
</html>
@endsection
