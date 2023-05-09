
          @include('header')
                    <!DOCTYPE html>
                        <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                                <link rel="stylesheet" href="style.css">
                                
                                <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
                                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>  
                            </head>
                        
                        <body>
                            <div class="container">
                                <form action="" method="POST">
                                    <div class="form first">
                                        <div class="details personal">
                                            <div class="fields">
                                                <div class="input-field">
                                                    <label>Name of the student*</label>
                                                    <input type="text" placeholder="Enter Student name" required name="name">
                                                </div>
                                                <div class="input-field">
                                                    <label>Gender*</label>
                                                    <select required>
                                                        <option disabled selected>Select gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                                <div class="input-field">
                                                            <label>Date of Birth*</label>
                                                            <input type="date" placeholder="Enter birth date" required name="dob">
                                                        </div>

                                                    <div class="input-field">
                                                        <label>Class*</label>
                                                        <select required>
                                                            <option disabled selected>Select Class</option>
                                                            <option value="Mont_1">Montessori I</option>
                                                            <option value="Mont_2" >Montessori II</option>
                                                            <option value="Mont_3">Montessori III</option>
                                                        </select>
                                                    </div>
                                                        <div class="input-field">
                                                            <label>Birth Place*</label>
                                                            <input type="text" placeholder="Enter your Birth Place" required name="birth_place">
                                                        </div>
                                                        <div class="input-field">
                                                            <label>Nationality*</label>
                                                            <select required>
                                                                <option disabled selected>Select Nationality</option>
                                                                <option value="Indian">Indian</option>
                                                                <option value="American">American</option>
                                                                <option value="USA">USA</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-field">
                                                            <label>Religion*</label>
                                                            <select required>
                                                                <option disabled selected>Select Religion</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Muslium">Muslium</option>
                                                                <option value="Christian">Christian</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>

                                                <div class="input-field">
                                                    <label>Mother Tongue*</label>
                                                    <select required>
                                                        <option disabled selected>Select Mother Tongue</option>
                                                        <option value="Kannada">Kannada</option>
                                                        <option value="Tamil">Tamil</option>
                                                        <option value="Telugu">Telugu</option>
                                                        <option value="Hindi">Hindi</option>
                                                    </select>
                                                </div>
                                                    <div class="input-field">
                                                    </div>
                                            
                                            </div>
                                        </div>
                                            <br>
                                        <div class="sibling">
                                            <span class="title">Sibling currently studying at NPS Yeshwanthpur</span>
                                            <div class="fields">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Enter name">
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Enter class and section">
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Enter name">
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Enter class and section ">
                                                </div>
                                            
                                                    <div class="input-field">
                                                        <label>Is your child physically challenged?</label>
                                                        <select required >
                                                        <option disabled selected>Is your child physically challenged?</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                        
                                                    <div class="input-field">
                                                <label>Child has any special need/learning challenges?</label>
                                                        <select required class="ms-auto" >
                                                <option disabled selected>Child has any special need/learning challenges<option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>

                                                        <div class="input-field">
                                                            <label>Aadhar of the Student*</label>
                                                            <input type="text" placeholder="Enter Student Aadhar" required name="aadhar" >
                                                        </div>
                                                            <br>

                                                            <div class="input-field" style="margin-left:30px;">
                                                                <label>Mode of transport*</label>
                                                                <select required>
                                                                <option disabled selected>Mode of transport</option>
                                                                <option value="School_bus">School Bus</option>
                                                                <option value="Private">Private</option>
                                                                </select>
                                                            </div>
                                                    <br>
                                                    <div class="input-field">
                                                    <label> Upload a recent photograph of the Student * :</label>
                                                    <input type="file" id="myFile" name="filename"> </input>
                                                            </div>
                                                    <br> 

                                                <button class="nextBtn">
                                                <span class="btnText" onclick="window.location.href='parents_details'">save and continue</span>
                                                <i class="uil uil-navigator"></i>
                                            </button>
                                        <div>
                                    </form>
                                </body>
                            </html>




          <div class="row parents_details" hidden>
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
                <div class="container">
                <div class="row" id="HASH">
                <div class="col-6">
                            <div class="row ">
                                    <form>
                                    <h3>Father Details</h3>
                                        
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
                                    <input type="email" class="form-control" placeholder="Enter Father Email Id" required>
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
            <br>
            <div class="col-6">
                    <div class="row">
                              <form>
                              <h3>Mother Details</h3>
                        <div class="form-group"> 
                            <label>Mother Name*</label>
                            <input type="text" class="form-control" placeholder="Enter Mother name" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number*</label>
                            <input type="number" class="form-control" placeholder="Enter Mother mobile number" required>
                        </div>
                        <div class="form-group">
                            <label>Mother Email Id*</label>
                            <input type="email" class="form-control" placeholder="Enter Mother Email Id" required>
                        </div>
                        <div class="form-group">
                            <label style=" width:400px;">Mothers's Mother Tongue</label><br>
                            <select required>
                                <option disabled selected>Select Mother Mother Tongue</option>
                                <option>Kannada</option>
                                <option>Tamil</option>
                                <option>Telugu</option>
                                <option>Hindi</option>
                            </select>
                        </div>
                        <div class="justify-content-sm-end">
                            <label>Same as Fathers Details</label>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </div>
                        <div class="form-group">
                            <label>Residential Address*</label>
                            <input type="text" class="form-control" placeholder="Enter Residential Address" required>
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
                </div>
                            <div class="row justify-content-center mt-4">  
                                    <div class="col">  
                                    <div class="form-check">  
                                    <button class=" btn btn-primary" onclick="window.location.href ='onlinereg'">Go back</button>
                                    <button class="btn btn-primary"  onclick="window.location.href = 'upload_doc'">Save & continue</button>
                                </div>
                            </div>    
                        </div>
                     </div> 
                    @include('footer')               
             </body> 
         </html>                 
     </div>

     <script>

        
     </script>


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 170vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container{
    position: relative;
    max-width: 1000px;
    width: 100%;
    border-radius: 6px;
    padding: 50px;
    margin: 15px;
    background-color: #fffd;
    box-shadow: 0 5px 10px rgba(0,0,0,0.5);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
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
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 800px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    transition: 0.3s ease;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 2 - 15px);
    flex-direction: column;
    margin: 3px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
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
<div>

</div>

