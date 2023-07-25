@extends('layout')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!DOCTYPE html>
<html>
<head>
<body>
<style> 
.bg-image {
  background-image: url("https://t3.ftcdn.net/jpg/03/55/60/70/360_F_355607062_zYMS8jaz4SfoykpWz5oViRVKL32IabTP.jpg");
  background-color: #cccccc;
}
</style>
<div class="container">
    <div class="bg-image">     
          <div class="card-header">
            <div class="d-flex border-bottom p-1 mb-3">
            <div class="container-fluid row">
            <div class = "col-md-18">
        
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                
        <div class="image">
            
         <img  src="public/Image/logo.png">




        </div>
       
        <div class="card-body">
          <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> National Public School </b> </h2></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
      </div>
      
                    <!-- <h3 class="card-header text-center">National Public School</h3> -->
                 
                    @if(\Session::has('message'))
                        <div class="alert alert-info">
                            {{\Session::get('message')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="GET" action="{{ route('postlogin') }}">
                            
                            @csrf
                            <div class="d-flex justify-content-center">
                            <div class="col-md-6">
                           <input type="text" placeholder="Enter your Email" id="email" class="form-control" name="email"
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <span id="email_err" style="color:red;"></span>
                            </div>
 </div>
                            <div class="form-group mb-3">                            
                                     <div class="col-md-12">
                             <div class="d-flex justify-content-center" style="text-align:center; margin-top:30px;">                               <div style="text-align:center"  class="g-recaptcha col-md-13 " data-sitekey="6LeUvnggAAAAABBDr_CIHhs3bKyQ5tNRhjWCGvy_"  data-callback="enableBtn">
                              </div>
                               </div>
                               <br>
                               <div class="d-flex justify-content-center"  >
                                  
 <button disabled="disabled" type="submit" id="button1" class="btn btn-dark btn-block">Verify</button>                               </div>
                                 @include('footer')
                           </form>
                           
                       </div>
                   </div>
                 
               </div>
               
           </div>
           
       </div>
 </div>
  </div>
</div>   </main>



   
<script>
 $('#email').on('change', function() {
            if (/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/.test($(this).val())) {
                document.getElementById("email_err").innerHTML = "";
            } else {
                document.getElementById("email_err").innerHTML = "Invalid Gmail ID";
            }
        })
 function enableBtn(){

                  document.getElementById("button1").disabled = false;
              }

          </script>
          <style>
 body {
 
  overflow: auto;
}         img {
  display: flex;
  margin-left: 15%;
  margin-right: 15%;
  width: 60%; /* Increase the value to make the image larger */
}

  h3 {
  font-family: Calibri; 
  color:Black; 
  font-size:20pt; 
  text-align:center; 
  
  width:500px;

  
  
}
container {
            max-height: 300px; /* Set the maximum height of the container */
            overflow-y: auto; }

</style>
  
    
</body>
</html>
</head>

<body>
</body>

@endsection