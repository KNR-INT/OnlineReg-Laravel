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
    <!-- {{ url('store-student') }} -->
    <form id="myForm" action="{{ url('store-student') }}">
    @csrf
            <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <label>Name of the student*</label>
                            <input type="text" placeholder="Enter Student name"  id="name" name="name" >
                            <span id="name_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Gender*</label>
                            <select id="gender" name="gender">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                            <span id="gender_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth*</label>
                            <input type="date" placeholder="Enter birth date"  id="dob" name="dob">
                            <span id="dob_err" style="color:red;"></span>
                        </div>
                        <?php 
                            $class = $_GET['class'];
                        ?>
                        <div class="input-field">
                            <label>Class*</label>
                            <select  id="class" name="class">
                                <option disabled selected value="">--SELECT--</option>
                                <?php
                                    if($class == "mont")
                                    {
                                    ?>
                                    <option value="Montessori I">Montessori I</option>
                                    <option value="Montessori II" >Montessori II</option>
                                    <option value="Montessori II">Montessori III</option>
                                    <?php
                                    }
                                    elseif($class == "kinder")
                                    {
                                    ?>
                                    <option value="PRE-KG">PRE-KG</option>
                                    <option value="Kindergarten I">Kindergarten I</option>
                                    <option value="Kindergarten II" >Kindergarten II</option>
                                    <?php
                                    }
                                    elseif($class == "1to9")
                                    {
                                    ?>
                                    <option value="Grade 1">Grade 1</option>
                                    <option value="Grade 2">Grade 2</option>
                                    <option value="Grade 3">Grade 3</option>
                                    <option value="Grade 4">Grade 4</option>
                                    <option value="Grade 5">Grade 5</option>
                                    <option value="Grade 6">Grade 6</option>
                                    <option value="Grade 7">Grade 7</option>
                                    <option value="Grade 8">Grade 8</option>
                                    <option value="Grade 9">Grade 9</option>
                                    <?php
                                    }
                                    elseif($class == "11")
                                    {
                                    ?>
                                    <option value="Grade 11">Grade 11</option>
                                    <?php
                                    }
                                ?>
                                
                            </select>
                            <span id="class_name_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Birth Place*</label>
                            <input type="text" placeholder="Enter your Birth Place"  id="birth_place" name="birth_place">
                            <span id="birth_place_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Nationality*</label>
                            <select  id="nationality" name="nationality">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Indian">Indian</option>
                                <option value="American">American</option>
                                <option value="USA">USA</option>
                                <option value="Others">Others</option>
                            </select>
                            <span id="nationality_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Religion*</label>
                            <select  id="religion" name="religion">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Muslium">Muslium</option>
                                <option value="Christian">Christian</option>
                                <option value="Others">Others</option>
                            </select>
                            <span id="religion_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Mother Tongue*</label>
                            <select id="mother_tongue" name="mother_tongue">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Kannada">Kannada</option>
                                <option value="Tamil">Tamil</option>
                                <option value="Telugu">Telugu</option>
                                <option value="Hindi">Hindi</option>
                            </select>
                            <span id="mother_tongue_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                        </div>
                    </div>
                </div>
                    <br>
                <div class="sibling">
                    <span class="title">Sibling currently studying at NPS Yeshwanthpur
                    <div class="fields">
                        <div class="input-field">
                            <select id="sibling_change" name="sibling_change">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div></span>
                    <div class="fields siblings" hidden>
                        <div class="input-field">
                            <input type="text" placeholder="Enter name" id="sib1_name" name="sib1_name">
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter class and section" id="sib1_cls_sec" name="sib1_cls_sec">
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter name" id="sib2_name" name="sib2_name">
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter class and section " id="sib2_cls_sec" name="sib2_cls_sec">
                        </div>
                    </div>
                </div>
                <div class="physical">
                    <div class="fields">
                        <div class="input-field">
                            <label>Is your child physically challenged?</label>
                            <select  id="phy_clg" name="phy_clg">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <span id="phy_clg_err" style="color:red;"></span>
                         </div>
                         <div class="input-field">
                            <label>Child has any special need/learning challenges?</label>
                            <select  id="slp_need" name="slp_need">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <span id="slp_need_err" style="color:red;"></span>
                         </div>
                        <div class="input-field">
                            <label>Aadhar of the Student*</label>
                            <input type="text" placeholder="Enter Student Aadhar"  id="aadhar" name="aadhar">
                            <span id="aadhar_err" style="color:red;"></span>
                        </div>
                        <br>
                        <div class="input-field" style="margin-left:30px;">
                            <label>Mode of transport*</label>
                            <select  id="transport" name="transport">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="School_bus">School Bus</option>
                                <option value="Private">Private</option>
                            </select>
                            <span id="transport_err" style="color:red;"></span>
                        </div>
                        <br>
                        <div class="input-field">
                            <label> Upload a recent photograph of the Student * :</label>
                            <input type="file" id="myFile" name="image"> </input>
                            <!-- <span id="name_err" style="color:red;"></span> -->
                        </div>
                        <br> 
                       <a class="btn btn-submit btn-outline-success float-center">Save and Continue <i class="uil uil-navigator"></i></a>
                       <div>
                       @include('footer')
</div>
                </div> 
            </div>
        </form>
                </div> 
            </div>
           
    </div>
                    
                 </div> 
                
                 
            </div>
        
    </div>

    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('#sibling_change').change(function(){
            let sibling_change = $(this).val();
            if(sibling_change == "Yes")
            {
                $('div.siblings').removeAttr('hidden');
            }
            else if(sibling_change == "No")
            {
                $('div.siblings').attr('hidden', 'hidden');
            }
        });
        $('.btn-submit').click(function(){
            let name = document.getElementById("name").value;
            let gender = document.getElementById("gender").value;
            let dob = document.getElementById("dob").value;
            let class_name = document.getElementById("class").value;
            let birth_place = document.getElementById("birth_place").value;
            let nationality = document.getElementById("nationality").value;
            let religion = document.getElementById("religion").value;
            let mother_tongue = document.getElementById("mother_tongue").value;
            let phy_clg = document.getElementById("phy_clg").value;
            let slp_need = document.getElementById("slp_need").value;
            let aadhar = document.getElementById("aadhar").value;
            let transport = document.getElementById("transport").value;
            if(!name || !gender || !dob || !class_name || !birth_place || !nationality || !religion || !mother_tongue || !phy_clg || !slp_need || !aadhar || !transport)
            {
                if(!name)
                {
                    document.getElementById("name_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("name_err").innerHTML = " ";
                }

                if(!gender)
                {
                    document.getElementById("gender_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("gender_err").innerHTML = " ";
                }

                if(!dob)
                {
                    document.getElementById("dob_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("dob_err").innerHTML = " ";
                }

                if(!class_name)
                {
                    document.getElementById("class_name_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("class_name_err").innerHTML = " ";
                }

                if(!birth_place)
                {
                    document.getElementById("birth_place_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("birth_place_err").innerHTML = " ";
                }

                if(!nationality)
                {
                    document.getElementById("nationality_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("nationality_err").innerHTML = " ";
                }
                
                if(!religion)
                {
                    document.getElementById("religion_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("religion_err").innerHTML = " ";
                }

                if(!mother_tongue)
                {
                    document.getElementById("mother_tongue_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("mother_tongue_err").innerHTML = " ";
                }

                if(!phy_clg)
                {
                    document.getElementById("phy_clg_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("phy_clg_err").innerHTML = " ";
                }

                if(!slp_need)
                {
                    document.getElementById("slp_need_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("slp_need_err").innerHTML = " ";
                }

                if(!aadhar)
                {
                    document.getElementById("aadhar_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("aadhar_err").innerHTML = " ";
                }

                if(!transport)
                {
                    document.getElementById("transport_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("transport_err").innerHTML = " ";
                }
            // name,gender,dob,class,birth_place,nationality,religion,mother_tongue,phy_clg,slp_need,aadhar,transport
            }
            else
            {
                document.getElementById("myForm").submit();
            }
        });
    </script>
</body>


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
    max-width: 1100px;
    width: 100%;
    height: 100%;
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
</html>