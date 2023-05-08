<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Custom Auth Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #0dcaf0;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">National Public School</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                </ul>
            </div>
            <a href="/" style="float: right;"><img height="20" width="20" color="white" src="{{URL::asset('/img/1st')}}"></a>
        </div>
    </nav>
    
<div >
    <div class="container">
    <!-- <div class="justify-content-center     -->


    <div class="justify-content-center">
             <div class="row ">
            <div class="col-md-2">
            </div>

            <div class="col-md-4">
                     <div class="card">
                        <div class="alert alert-info">
                        <img src="https://www.mavinlearning.com/wp-content/uploads/2017/12/Online_Employment_Application_Guide_New_User_Image_021_493505_7.jpg" alt="" height="300" width="300">
                        </div>
                    <div class="card-body">
                        
                       <h4 class="card-footer text-center">Submitted Application</h4>
                       
                                
                    </div>
                </div>
             </div>

               <div class="col-md-4">
             
             <div class="card" alt="" height="300" width="300">
              
                        <div class="alert alert-info" >
                        <img src="" alt="" height="300" width="300">     
                   </div>
                    <div class="card-body">
                       <h4 class="card-footer text-center">Draft Application</h4>
                      
                    </div>
                </div>
                <div class="col-md-2">
            </div>
             </div>

             
</div>
</div>


	<!-- //copyright bottom -->
@include('footer')   
</body>

</html>
</head>
<body>
    <!-- <p>Document Body</p> -->
</body>
</html>