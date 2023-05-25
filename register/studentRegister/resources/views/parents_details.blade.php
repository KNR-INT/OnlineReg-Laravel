@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/> 
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>-->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>
<body>

<div class="container">
  <table class="table table-responsive">
    <thead>
      <tr>
        <th><h4><b>Father Details</b></h4></th>
        <th><h4><b>Mother Details</b></h4></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td >Father Name*
         <input type="text"  class="form-control" placeholder="Enter Father name" required></td>
        <td>Mother Name*
         <input type="text"  class="form-control" placeholder="Enter Father name" required></td>
       </tr>
      <tr>
        <td>Mobile Number*
         <input type="number" class="form-control" placeholder="Enter Father mobile number" required></td>
        <td>Mobile Number*
        <input type="number" class="form-control" placeholder="Enter Mother mobile number" required></td>
      </tr>
      <tr>
        <td>Father Email Id*
        <input type="text" class="form-control" placeholder="Enter Father Email Id" required></td>
        <td>Father Email Id*
         <input type="text" class="form-control" placeholder="Enter Mother Email Id" required></td>
       </tr>
       <tr>
        <td> Father's Mother Tongue
        <br>
        <select required style="width: 440px;">
                                <option disabled selected>Select  Father's Mother Tongue</option>
                                <option>Kannada</option>
                                <option>Tamil</option>
                                <option>Telugu</option>
                                <option>Hindi</option>
                            </select></td>
        <td> Mother's Mother Tongue
        <br>
         <select required style="width: 440px;">
                                <option disabled selected>Select  Mother's Mother Tongue</option>
                                <option>Kannada</option>
                                <option>Tamil</option>
                                <option>Telugu</option>
                                <option>Hindi</option>
                            </select></td>
       </tr>
       <tr>
        <td>Residential Address*
           <input type="text" class="form-control" placeholder="Enter Residential Address" required>
        <td>Residential Address*
          <input type="text" class="form-control" placeholder="Enter Residential Address" required></td>
      </tr>
      <tr>
        <td>Area*
            <input type="text" class="form-control" placeholder="Enter Area" required>
        <td>Area*
            <input type="text" class="form-control" placeholder="Enter Area" required></td>
      </tr>
       <tr>
        <td>District*
            <input type="text"  class="form-control" placeholder="Enter District" required>
        <td>District*
             <input type="text"  class="form-control" placeholder="Enter District" required></td>
      </tr>
        <tr>
        <td>State*
            <input type="text"  class="form-control" placeholder="Enter state" required>
        <td>State*
             <input type="text"  class="form-control" placeholder="Enter state" required></td>
      </tr>
       <tr>
        <td>Country*
        <br>
           <select required style="width: 440px;">
                                <option disabled selected>Select the country</option>
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
        <td>Country*
        <br>
            <select required style="width: 440px;">
                                <option disabled selected>Select the country</option>
                                <option>India</option>
                                <option>America</option>
                                <option>Australia</option>
                                <option>Brazil</option>
                                <option>Canada</option>
                                <option>Germany</option>
                                <option>France</option>
                                <option>Italy</option>
                                <option>Others</option>

                            </select></td>
                            <tr>
        <td>Pincode*
            <input type="number" class="form-control" placeholder="Enter Pincode" required>
        <td>Pincode*
             <input type="number" class="form-control" placeholder="Enter Pincode" required></td>
      </tr>
       <tr>
          <td>Residential Number
            <input type="number" class="form-control" placeholder="Enter Residential Number" required>
        <td>Residential Number
             <input type="number" class="form-control" placeholder="Enter Residential Number" required></td>
      </tr>
       <tr class="form-group">
          <td>Enter Designation
          <br>
            <select class="form-select" required style="width: 440px;">
                               <option disabled selected>Enter Designation</option>
                                <option>Private Sector</option>
                                <option>Public sector</option>
                                <option>Bussiness</option>
                                <option>Agriculture</option>
                                <option>Others</option>
                                </select>
        <td>Enter Designation
        <br>
             <select  class="form-select" required style="width: 440px;">
                               <option disabled selected>Enter Designation</option>
                                <option>Private Sector</option>
                                <option>Public sector</option>
                                <option>Bussiness</option>
                                <option>Agriculture</option>
                                <option>Others</option>
                                </select></td>
      </tr>
       <tr>
          <td>Enter Company
            <input type="number" class="form-control" placeholder="Enter Company" required>
        <td>Enter Company
             <input type="number" class="form-control" placeholder="Enter Company" required></td>
      </tr>
       <tr>
          <td>Enter Company Address
            <input type="number" class="form-control" placeholder="Enter Company" required>
        <td>Enter Company Address
             <input type="number" class="form-control" placeholder="Enter Company" required></td>
      </tr>
      <tr>
          <td>Enter Office Number
             <input type="text" class="form-control"  placeholder="Enter Office Number" required>
        <td>Enter Office Number
              <input type="text" class="form-control"  placeholder="Enter Office Number" required></td>
      </tr>
      <tr>
          <td>Gross Annual Income (INR)*
             <input type="text" class="form-control"  placeholder="Enter Gross Annual Income (INR)*" required>
        <td>Gross Annual Income (INR)*
              <input type="text" class="form-control"  placeholder="Enter Gross Annual Income (INR)*" required></td>
      </tr>
    </tbody>
  </table>
 <center><div class="col">  
              <div class="form-check">  
                <button class=" btn btn-primary" onclick="window.location.href ='onlinereg'">Go back</button>
                <button class="btn btn-primary"  id="btn1" onclick="window.location.href = 'upload_doc'">Save & continue</button>
             </div>
          </div></center>
  <div class="modal-footer justify-content-center ">  
            @include('footer')
        </div>
</div>

</body>
</html>                                                                                                                  
</body> 
</html>

<style>
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
    max-width: 1050px;
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
