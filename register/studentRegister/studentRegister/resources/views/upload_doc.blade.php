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
    <center> <header><b><u><h2>Upload Documents</h2></u></header></center>
        <center>
            <table style="justify-content:space-between;">
                <tr>
                    <td  style="width:400px;">
                        <div class="input-field">
                            Upload Aadhar card * :  
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </td>
                    <td>
                        <div class="input-field">
                            Upload Father's Aadhar card * :  
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </td>
                 </tr>
                 <br>
                 <tr>
                    <td>
                        <div class="input-field">
                            Birth Certificate Of Student * :  
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </td>
                    <td>
                        <div class="input-field">
                            Upload Mother's Aadhar card* :  
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </td>
                </tr><br>
                <tr>
                    <td>
                        <div class="input-field">
                            Upload Student's passport:  
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </td>
                    <td>
                        <div class="input-field">
                            Upload Previous year Marks Card's *:  
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </td>
                </tr><br>
            </table>
        </center>
        <br>
        <center> <header><b><u><h3>Details of Schooling </h3></u></b></header></center>
        <center>
            <table>
                <tr>
                    <td >
                        <div class="input-field">
                            From Year   <br>
                            <input type="date" placeholder="From date" required>
                        </div>
                    </td>
                    <td>
                        <div class="input-field">
                        From Class   <br>
                        <select name="drop" id="drop">
                                   <option disabled selected>From Class :</option><option value="1">1</option>
                                   <option value="2">2</option><option value="3">3</option>
                                   <option value="4">4</option><option value="4">4</option>
                                   <option value="5">5</option><option value="6">6</option>
                                   <option value="7">7</option><option value="8">8</option>
                                   <option value="9">9</option><option value="10">10</option>
                        </div>
                    </td>
                    <td>
                        <div class="input-field">
                        To Year   <br>
                        <input type="date" placeholder="To date" required>
                        </div>
                    </td>
                    <td>
                        <div class="input-field">
                           To Class   <br>
                           <select name="drop" id="drop">
                                   <option disabled selected>To Class :    </option><option value="1">1</option>
                                   <option value="2">2</option><option value="3">3</option>
                                   <option value="4">4</option><option value="4">4</option>
                                   <option value="5">5</option><option value="6">6</option>
                                   <option value="7">7</option><option value="8">8</option>
                                   <option value="9">9</option><option value="10">10</option>
                                   </select>
                    
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:250px;">
                        <div class="input-field">
                        School Name <br>  
                        <input type="text" name="" id="" placeholder="School Name" >
                        </div>
                    </td>
                    <td style="width:250px;">
                        <div class="input-field">
                        City <br>
                        <input type="text" name="" id="" placeholder="City">  
                        </div>
                    </td>
                    <td style="width:250px;">
                        <div class="input-field">
                            State  <br>
                            <input type="text" name="" id="" placeholder="State">
                        </div>
                    </td>
                    <td>
                        <div class="input-field">
                            Country  <br>
                            <input type="text" name="" id="" placeholder="Country">
                        </div>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
        <div class="row justify-content-center mt-4">  
            <div class="col">  
              <div class="form-check">  
                    <button class=" btn btn-primary" 
                        onclick="window.location.href ='parents_details'">
                        Go back
                        </button>

        <button class="btn btn-primary"  id="btn1" onclick="window.location.href= 'application_details'">
        Save & continue</button>

         </div>
         </div>
         </div>
         </center>
         @include('footer')
            </div>
   <script src="script.js"></script>
   
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
sec{
    justify-content: space-between;
}
body{
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container{
    position: relative;
    max-width: 1200px;
    height:800px;
    width: 90%;
    border-radius: 6px;
    padding: 50px;
    margin: 15px;
    background-color: #fffdff;
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
    margin-top: 5px;
    min-height: 790px;
    display: flex;
    justify-content:space-between;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    transition: 0.3s ease;
}

.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 2-15px);
    flex-direction: column;
    margin: 4px 0;
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
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
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