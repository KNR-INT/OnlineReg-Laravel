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
       <center><header><h2>Student Registration</header></h2></center>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <!-- <span class="title">Personal Details</span> -->
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
                                    <input type="date" placeholder="Enter birth date" required>
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
                            <input type="text" placeholder="Enter your Birth Place" required>
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
                        <!-- <div class="input-field">
                            <input type="text" placeholder="Enter section">
                        </div> -->
                        <div class="input-field">
                            <input type="text" placeholder="Enter name">
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter class and section ">
                        </div>
                        <!-- <div class="input-field">
                            <input type="text" placeholder="Enter section">
                        </div> -->
                   
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
                            <input type="text" placeholder="Enter Student Aadhar" required>
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
                
                </div> 
            </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
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
    /* background: #4070f4; */
}
.container{
    position: relative;
    max-width: 1100px;
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
    min-height: 790px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    /* background-color: #fff; */
    transition: 0.3s ease;
}
/* .container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
} */
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