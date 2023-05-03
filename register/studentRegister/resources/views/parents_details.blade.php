<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>nps</title>

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


<nav class="navbar navbar-expand-xl navbar-dark bg-dark navbar-default navbar-fixed-top ">
            <a href="#" class="navbar">NPS YPR</a>  		
			<span>NPS YPR</span>
                <div class=" navbar-nav ml-auto ">
                    <div class=" justify-content-end">
                    <a href="homepage" class="nav-item nav-link active"><i class="fa fa-home"></i><span>Home</span></a>
                    <a href="{{ route('signout') }}"  class="nav-item nav-link active"><i class="fa fa-power-off"></i><span>Logout</span></a>
                     </div> -->
<!--                 
                </div>


    </nav>

    </body>
</html> -->


@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
    </head>
<body>    
<div class="container " >
<div class="row" id="HASH">
<div class="col-6">
                    <div class="row ">
                         <!-- <div class="card "> -->
                              <form>
                              <h3>Father Details</h3>
                                   <!-- <div class="card body"> -->
                                   
                        <div class="form-group">
                            <label>Father Name*</label>
                            <input type="text"  class="form-control" placeholder="Enter Father name" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number*</label>
                            <input type="number" class="form-control" placeholder="Enter Father mobile number" required>
                        </div>
                        <div class="form-group">
                            <label>Father Email Id*</label>
                            <input type="text" class="form-control" placeholder="Enter Father Email Id" required>
                        </div>
                        <div class="form-group">
                            <label style=" width:400px;"> Father's Mother Tongue</label><br>
                            <select required class="form-select form-select-lg mb-3">
                                <option disabled selected>Select  Father Mother Tongue</option>
                                <option>Kannada</option>
                                <option>Tamil</option>
                                <option>Telugu</option>
                                <option>Hindi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Residential Address*</label>
                            <input type="text" class="form-control" placeholder="Enter Residential Address" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Area*</label>
                            <input type="text" class="form-control" placeholder="Enter Area" required>
                        </div>
                        <div class="form-group">
                            <label>District*</label>
                            <input type="text"  class="form-control" placeholder="Enter District" required>
                        </div>
                        <div class="form-group">
                            <label>State*</label>
                            <input type="text"  class="form-control" placeholder="Enter state" required>
                        </div> <div class="form-group">
                            <label >Country*</label><br>
                            <!-- <input type="number" placeholder="Enter Residential Address" required> -->
                            <select required>
                                <option disabled selected>Select</option>
                                <option>India</option>
                                <option>America</option>
                                <option>Australia</option>
                                <option>Brazil</option>
                                <option>Canada</option>
                                <option>Germany</option>
                                <option>France</option>
                                <option>Italy</option>
                                <option>Others</option>

                            </select>
                        </div>

                         <div class="form-group">
                            <label>Pincode*</label>
                            <input type="number" class="form-control" placeholder="Enter Pincode" required>
                         </div> 
                         <div class="form-group">
                            <label>Residential Number</label>
                            <input type="number"  class="form-control" placeholder="Enter Residential Number" required>
                        </div>
                        <div class="form-group">
                        <label>Enter Designation</label><br>
                             <!-- <input type="text" placeholder="Enter Designation" required> -->
                             <select required>
                               <option disabled selected>Enter Designation</option>
                                <option>Private Sector</option>
                                <option>Public sector</option>
                                <option>Bussiness</option>
                                <option>Agriculture</option>
                                <option>Others</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Enter Company</label>
                             <input type="text" class="form-control" placeholder="Enter Company" required>
                            </div>
                        <div class="form-group">
                        <label>Enter Company Address</label>
                             <input type="text" class="form-control"  placeholder="Enter Company Address" required>
                             </div>
                             <div class="form-group">
                             <label>Enter Office Number</label>
                             <input type="number"  class="form-control" placeholder="Enter Office Number" required>
                             </div>
                             <div class="form-group">
                            <label>Gross Annual Income (INR)*</label>
                            <input type="number"  class="form-control" placeholder="Enter Gross Annual Income" required>
                        </div>
                        </div>

            </form>

</div>
                         <!-- </div> -->
                    <!-- </div>   -->
                   
            <br>
            <div class="col-6">
                
          
               <!-- <div class="row mb-2"> -->
                    <!-- left column -->
                    <div class="row">
                    <!-- general form elements -->
                         <!-- <div class="card "> -->
                         <!-- form start -->
                              <form>
                              <h3>Mother Details</h3>
                                   <!-- <div class="card body"> -->
                        <div class="form-group"> 
                            <label>Mother Name*</label>
                            <input type="text" class="form-control" placeholder="Enter Mother name" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number*</label>
                            <input type="number" class="form-control" placeholder="Enter Mother mobile number" required>
                        </div>
                        <div class="form-group">
                            <label>Father Email Id*</label>
                            <input type="number" class="form-control" placeholder="Enter Mother Email Id" required>
                        </div>
                        <div class="form-group">
                            <label style=" width:400px;"> Mothers's Mother Tongue</label><br>
                            <select required>
                                <option disabled selected>Select  Mother Mother Tongue</option>
                                <option>Kannada</option>
                                <option>Tamil</option>
                                <option>Telugu</option>
                                <option>Hindi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Residential Address*</label>
                            <input type="text" class="form-control" placeholder="Enter Residential Address" required>
                        </div>
                    
<div class="justify-content-sm-end">
    <label>Same as Fathers Details</label>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
</div>

          
            <div class="form-group">
                            <label>Area*</label>
                            <input type="text" class="form-control" placeholder="Enter Area" required>
                        </div>
                        <div class="form-group">
                            <label>District*</label>
                            <input type="text"  class="form-control" placeholder="Enter District" required>
                        </div>
                        <div class="form-group">
                            <label>State*</label>
                            <input type="text" class="form-control" placeholder="Enter state" required>
                        </div> 
                        
                        <div class="form-group">
                            <label>Country*</label><br>
                            <!-- <input type="number" placeholder="Enter Residential Address" required> -->
                            <select required>
                                <option disabled selected>Select</option>
                                <option>India</option>
                                <option>America</option>
                                <option>Australia</option>
                                <option>Brazil</option>
                                <option>Canada</option>
                                <option>Germany</option>
                                <option>France</option>
                                <option>Italy</option>
                                <option>Others</option>

                            </select>
                        </div>
<!-- </div> -->
                        <div class="form-group">
                            <label>Pincode*</label>
                            <input type="number" class="form-control" placeholder="Enter Pincode" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Residential Number</label>
                            <input type="number" class="form-control" placeholder="Enter Residential Number" required>
                        </div>
                        <div class="form-group">
                        <label>Enter Designation</label><br>
                             <!-- <input type="text" placeholder="Enter Designation" required> -->
                             <select required>
                                <option disabled selected>Enter Designation</option>
                                <option>Private Sector</option>
                                <option>Public sector</option>
                                <option>Bussiness</option>
                                <option>Agriculture</option>
                                <option>Others</option>
                                </select>
                        </div>
                        <div class="form-group">
                        <label>Enter Company</label>
                             <input type="text" class="form-control" placeholder="Enter Company" required>
                            </div>
                        <div class="form-group">
                        <label>Enter Company Address</label>
                             <input type="text" class="form-control" placeholder="Enter Company Address" required>
                             </div>
                             <div class="form-group">
                             <label>Enter Office Number</label>
                             <input type="number" class="form-control" placeholder="Enter Office Number" required>
                             </div>
                             <div class="form-group">
                            <label>Gross Annual Income (INR)*</label>
                            <input type="number" class="form-control" placeholder="Enter Gross Annual Income" required>
                        </div>
        </form>
    </div>
    <!-- </div>
 
        <div> -->
           
</div>

    <div class="row justify-content-center mt-4">  
            <div class="col">  
              <div class="form-check">  
<button class=" btn btn-primary" 
    onclick="window.location.href ='onlinereg'">
    Go back
    </button>

<button class="btn btn-primary"  id="btn1" onclick="window.location.href = 'upload_doc'">
 Save & continue</button>

         </div>
         </div>
         
         </div>
       
    <script src="script.js"></script>
    </div>
    @include('footer')
</body>

</html>


<style>
/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
}
.container{
    position: relative;
    max-width: 1200px;
    width: 100%;
    border-radius: 6px;
    padding: 50px;
    margin: 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.5);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #fff;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #fff;
}
#HASH {
  display: flex;
  justify-content: space-between;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 790px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #fff;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.select{
    width:27px;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #333;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    .div.form.group{
        padding: 50%;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}
.input.form.group{
    width:20%;
}
</style>

<script>
const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
</script>


<!-- <div class="row justify-content-start mt-4"> -->
