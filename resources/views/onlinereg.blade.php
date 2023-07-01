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
    <div>
   
    <div class="container">
        
<form id="myForm" action="{{ url('store-student') }}" enctype="multipart/form-data">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item current-item">
                <span class="progress-count">1</span>
               
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">2</span>
               
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">3</span>
               
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">4</span>
                
            </li>
             <li class="step-wizard-item ">
                <span class="progress-count">5</span>
                
            </li>
             <li class="step-wizard-item">
                <span class="progress-count">6</span>
               
            </li>
        </ul>
    </section>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <?php 
                            $id = $_GET['appli_id'];
                            $student = DB::select("SELECT * FROM `students` WHERE `id` = '$id'");
                            ?>
                            <label>Name of the student*</label>
                            <input type="text" placeholder="Enter Student name"  id="name" name="name" maxlength="20" value="<?php echo $student[0]->name; ?>" onchange="namevalidate()">
                            <label><b>Name of the student*</b></label>
                            <input type="text" placeholder="Enter Student name"  id="name" name="name" maxlength="50" value="<?php echo $student[0]->name; ?>" oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);" >
                            <span id="name_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Gender*</label>
                            <label><b>Gender*</b></label>
                            <select id="gender" name="gender">
                                <option disabled selected value="">--SELECT--</option>SS
                                <option value="Boy" <?php if($student[0]->gender == "Boy"){ echo "SELECTED"; } ?>>Boy</option>
                                <option value="Girl" <?php if($student[0]->gender == "Girl"){ echo "SELECTED"; } ?>>Girl</option>
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Boy" <?php if($student[0]->gender == "Boy"){ echo "SELECTED"; } ?>>Boy</option>
                                <option value="Girl" <?php if($student[0]->gender == "Girl"){ echo "SELECTED"; } ?>>Girl</option>
                            </select>
                            <span id="gender_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth*</label>
                            <input type="date" placeholder="Enter birth date"  id="dob" name="dob" value="<?php echo $student[0]->dob; ?>">
                            <label><b>Date of Birth*</b></label>
                            <input type="date" placeholder="Enter birth date"  id="dob" name="dob" value="<?php echo $student[0]->dob; ?>" >
                            <span id="dob_err" style="color:red;"></span>
                        </div>
                        <?php 
                            $class = $_GET['class'];
                        ?>
                        <div class="input-field">
                            <label>Class*</label>
                            <label><b> Class*</b></label>
                            <select  id="class" name="class">
                                <option disabled selected value="">--SELECT--</option>
                                <?php
                                    if($class == "mont")
                                    {
                                    ?>
                                    <option value="Montessori I"<?php if($student[0]->class == "Montessori I"){ echo "SELECTED"; } ?>>Montessori I</option>
                                    <option value="Montessori I"<?php if($student[0]->class == "Montessori_I"){ echo "SELECTED"; } ?>>Montessori I</option>

                                    <option value="Montessori II" <?php if($student[0]->class == "Montessori II"){ echo "SELECTED"; } ?> >Montessori II</option>
                                    <option value="Montessori II" <?php if($student[0]->class == "Montessori_II"){ echo "SELECTED"; } ?> >Montessori II</option>

                                    <option value="Montessori III" <?php if($student[0]->class == "Montessori III"){ echo "SELECTED"; } ?>>Montessori III</option>
                                    <option value="Montessori III" <?php if($student[0]->class == "Montessori_III"){ echo "SELECTED"; } ?>>Montessori III</option>
                                    <?php
                                    }
                                    elseif($class == "kinder")
                                    elseif($class == "kinder")  
                                    {
                                    ?>
                                    <option value="PRE-KG"<?php if($student[0]->class == "PRE-KG"){ echo "SELECTED"; } ?>>PRE-KG</option>

                                    <option value="Kindergarten I"<?php if($student[0]->class == "Kindergarten I"){ echo "SELECTED"; } ?>>Kindergarten I</option>
                                    <option value="Kindergarten I"<?php if($student[0]->class == "Kindergarten_I"){ echo "SELECTED"; } ?>>Kindergarten I</option>

                                    <option value="Kindergarten II" <?php if($student[0]->class == "Kindergarten II"){ echo "SELECTED"; } ?>>Kindergarten II</option>
                                    <option value="Kindergarten II" <?php if($student[0]->class == "Kindergarten_II"){ echo "SELECTED"; } ?>>Kindergarten II</option>
                                    <?php
                                    }
                                    elseif($class == "1to9")
                                    {
                                    ?>
                                    <option value="Grade 1"<?php if($student[0]->class == "Grade 1"){ echo "SELECTED"; } ?>>Grade 1</option>
                                    <option value="Grade 2"<?php if($student[0]->class == "Grade 2"){ echo "SELECTED"; } ?>>Grade 2</option>
                                    <option value="Grade 3"<?php if($student[0]->class == "Grade 3"){ echo "SELECTED"; } ?>>Grade 3</option>
                                    <option value="Grade 4"<?php if($student[0]->class == "Grade 4"){ echo "SELECTED"; } ?>>Grade 4</option>
                                    <option value="Grade 5"<?php if($student[0]->class == "Grade 5"){ echo "SELECTED"; } ?>>Grade 5</option>
                                    <option value="Grade 6"<?php if($student[0]->class == "Grade 6"){ echo "SELECTED"; } ?>>Grade 6</option>
                                    <option value="Grade 7"<?php if($student[0]->class == "Grade 7"){ echo "SELECTED"; } ?>>Grade 7</option>
                                    <option value="Grade 8"<?php if($student[0]->class == "Grade 8"){ echo "SELECTED"; } ?>>Grade 8</option>
                                    <option value="Grade 9"<?php if($student[0]->class == "Grade 9"){ echo "SELECTED"; } ?>>Grade 9</option>
                                    <?php
                                    }
                                    elseif($class == "11")
                                    {
                                    ?>
                                    <option value="Grade 11" <?php if($student[0]->class == "Grade 11"){ echo "SELECTED"; } ?>>Grade 11</option>
                                    <?php
                                    }
                                ?>
                                
                            </select>
                            <span id="class_name_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Birth Place*</label>
                            <label><b>Birth Place*</b></label>
                            <input type="text" placeholder="Enter your Birth Place"  id="birth_place" name="birth_place" value="<?php echo $student[0]->birth_place; ?>">
                            <span id="birth_place_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Nationality*</label>
                            <label><b>Nationality*</b></label>
                            <select  id="nationality" name="nationality">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Indian" <?php if($student[0]->nationality == "Indian"){ echo "SELECTED"; } ?>>Indian</option>
                                <option value="American"<?php if($student[0]->nationality == "American"){ echo "SELECTED"; } ?>>American</option>
                                <option value="USA"<?php if($student[0]->nationality == "USA"){ echo "SELECTED"; } ?>>USA</option>
                                <option value="Others"<?php if($student[0]->nationality == "Others"){ echo "SELECTED"; } ?>>Others</option>
                            </select>
                            <span id="nationality_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Religion*</label>
                            <label><b>Religion*</b></label>
                            <select  id="religion" name="religion">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Hindu" <?php if($student[0]->religion == "Hindu"){ echo "SELECTED"; } ?>>Hindu</option>
                                <option value="Muslium"<?php if($student[0]->religion == "Muslium"){ echo "SELECTED"; } ?>>Muslium</option>
                                <option value="Christian"<?php if($student[0]->religion == "Christian"){ echo "SELECTED"; } ?>>Christian</option>
                                <option value="Others"<?php if($student[0]->religion == "Others"){ echo "SELECTED"; } ?>>Others</option>
                                <option disabled selected value="">--SELECT Religion--</option>
                                <option value="Hindu" <?php if($student[0]->religion =="Hindu"){ echo "SELECTED"; } ?>>Hindu</option>
                                <option value="Muslium"<?php if($student[0]->religion=="Muslium"){ echo "SELECTED"; } ?>>Muslium</option>
                                <option value="Christian"<?php if($student[0]->religion=="Christian"){ echo "SELECTED"; } ?>>Christian</option>
                                <option value="Buddist" <?php if($student[0]->religion =="Buddist"){ echo "SELECTED"; } ?>>Buddist</option>
                                <option value="Jain"<?php if($student[0]->religion=="Jain"){ echo "SELECTED"; } ?>>Jain</option>
                                <option value="Sikh"<?php if($student[0]->religion=="Sikh"){ echo "SELECTED"; } ?>>Sikh</option>
                                <option value="Islam"<?php if($student[0]->religion=="Islam"){ echo "SELECTED"; } ?>>Islam</option>
                                <option value="Others"<?php if($student[0]->religion=="Others"){ echo "SELECTED"; } ?>>Others</option>
                            </select>
                            <span id="religion_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Mother Tongue*</label>
                            <label><b>Mother Tongue*</b></label>
                            <select id="mother_tongue" name="mother_tongue">
                                <option disabled selected value="">--SELECT--</option>
                                <option disabled selected value="">--SELECT Mother Tongue --</option>
                                <option value="Kannada"<?php if($student[0]->mother_tongue == "Kannada"){ echo "SELECTED"; } ?>>Kannada</option>
                                <option value="Tamil"<?php if($student[0]->mother_tongue == "Tamil"){ echo "SELECTED"; } ?>>Tamil</option>
                                <option value="Telugu"<?php if($student[0]->mother_tongue == "Telugu"){ echo "SELECTED"; } ?>>Telugu</option>
                                <option value="Hindi"<?php if($student[0]->mother_tongue == "Hindi"){ echo "SELECTED"; } ?>>Hindi</option>
                                <option value="Assamese"<?php if($student[0]->mother_tongue == "Assamese"){ echo "SELECTED"; } ?>>Assamese</option>
                                <option value="Bengali"<?php if($student[0]->mother_tongue == "Bengali"){ echo "SELECTED"; } ?>>Bengali</option>
                                <option value="English"<?php if($student[0]->mother_tongue == "English"){ echo "SELECTED"; } ?>>English</option>
                                <option value="Marathi"<?php if($student[0]->mother_tongue == "Marathi"){ echo "SELECTED"; } ?>>Marathi</option>
                                <option value="Urdu"<?php if($student[0]->mother_tongue == "Urdu"){ echo "SELECTED"; } ?>>Urdu</option>
                                <option value="Malayalam"<?php if($student[0]->mother_tongue == "Malayalam"){ echo "SELECTED"; } ?>>Malayalam</option>
                                <option value="Gujarathi"<?php if($student[0]->mother_tongue == "Gujarathi"){ echo "SELECTED"; } ?>>Gujarathi</option>
                                <option value="Others"<?php if($student[0]->mother_tongue == "Others"){ echo "SELECTED"; } ?>>Others</option>
                            </select>
                            <span id="mother_tongue_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">













                        </div>                        
                    </div>
                </div>
                    <br>

                 <div class="language_mont" hidden>
                     <div class="fields">
                         <div class="input-field">
                            <input type="hidden" id="sec_language" name="sec_language" value=" ">
                         </div>
                            <input type="hidden" id="third_language" name="third_language" value=" ">
                     </div>
                </div> 
                <div class="language12345" hidden>
                    <div class="fields">
                        <div class="input-field">
                            <label><b>Second Language*</b></label>
                            <select id="sec_language" name="sec_language">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Kannada">Kannada</option>
                            </select>
                            <span id="sec_language_err" style="color:red;"></span>









                        </div>

                        <div class="input-field">
                            <label><b>Third Language*</b></label>
                            <select id="third_language" name="third_language">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Kannada">Kannada</option>
                            </select>
                            <span id="third_language_err" style="color:red;"></span>
                        </div>
                    </div>
                </div>
                    <br>




                <div class="language6" hidden>
                    <div class="fields">
                        <div class="input-field">
                            <label><b>Second Language*</b></label>
                            <select id="sec_language" name="sec_language">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Kannada">Kannada</option>
                            </select>
                            <span id="sec_language_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label><b>Third Language*</b></label>
                            <select id="third_language" name="third_language">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Kannada">Kannada</option>
                                <option value="Sanskrit">Sanskrit</option>
                            </select>
                            <span id="third_language_err" style="color:red;"></span>
                        </div>
                    </div>
                </div>
                <div class="language78" hidden>
                    <div class="fields">
                        <div class="input-field">
                            <label><b>Second Language*</b></label>
                            <select id="sec_language" name="sec_language">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Hindi">Hindi</option>
                            </select>
                            <span id="sec_language_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label><b>Third Language*</b></label>
                            <select id="third_language" name="third_language">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Kannada">Kannada</option>
                                <option value="Sanskrit">Sanskrit</option>
                            </select>
                            <span id="third_language_err" style="color:red;"></span>
                        </div>
                    </div>
                </div>
                <div class="language9" hidden>
                    <div class="fields">
                        <div class="input-field">
                            <label><b>Second Language*</b></label>
                            <select id="sec_language" name="sec_language">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Sanskrit">Sanskrit</option>
                            </select>
                            <span id="sec_language_err" style="color:red;"></span>
                        </div>
                        <input type="hidden" id="third_language" name="third_language" value=" ">
                    </div>
                </div>
                <div class="language11" hidden>
                    <div class="fields">
                        <div class="input-field">
                            <label><b>Second Language(Compulsary Language:English)*</b></label>
                            <select id="sec_language" name="sec_language">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="pcmb" <?php if($student[0]->sec_language == "pcmb"){ echo "SELECTED"; } ?>>Physics, Chemistry, Mathematics, Biology</option>
                                <option value="pcmc" <?php if($student[0]->sec_language == "pcmc"){ echo "SELECTED"; } ?>>Physics, Chemistry, Mathematics, ComputerScience</option>
                                <option value="pcme" <?php if($student[0]->sec_language == "pcme"){ echo "SELECTED"; } ?>>Physics, Chemistry, Mathematics, Economics</option>
                                <option value="pcib" <?php if($student[0]->sec_language == "pcib"){ echo "SELECTED"; } ?>>Physics, Chemistry, Informatics Practices, Biology</option>
                                <option value="baei" <?php if($student[0]->sec_language == "baei"){ echo "SELECTED"; } ?>>Business Studies, Accountancy, Economics, Informatics Practices</option>
                                <option value="eaba" <?php if($student[0]->sec_language == "eaba"){ echo "SELECTED"; } ?>>Economics, Accountancy, Business Studies, Applied Mathematics</option>
                            </select>
                            <span id="sec_language_err" style="color:red;"></span>
                        </div>
                        <input type="hidden" id="third_language" name="third_language" value=" ">
                    </div>
                </div>
                <div class="sibling">
                    <span class="title">Sibling currently studying at NPS Yeshwanthpur
                    <span class="title"><b>Sibling currently studying at NPS Yeshwanthpur</b>
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
                               </div>
                                    <div class="input-field">
                                  <input type="text" placeholder="Enter class and section" id="sib1_cls_sec" name="sib1_cls_sec">
                                  </div>
                                  <div class="input-field">
                               <input type="text" placeholder="Enter name" id="sib2_name" name="sib2_name">
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
                            <label><b>Is your child physically challenged?</b></label>
                            <select  id="phy_clg" name="phy_clg">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Yes" <?php if($student[0]->phy_clg == "Yes"){ echo "SELECTED"; } ?>>Yes</option>
                                <option value="No" <?php if($student[0]->phy_clg == "No"){ echo "SELECTED"; } ?>>No</option>
                            </select>
                            <span id="phy_clg_err" style="color:red;"></span>
                         </div>
                         <div class="input-field">
                            <label>Child has any special need/learning challenges?</label>
                            <label><b>Child has any special need/learning challenges?</b></label>
                            <select  id="slp_need" name="slp_need">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="Yes" <?php if($student[0]->slp_need == "Yes"){ echo "SELECTED"; } ?>>Yes</option>
                                <option value="No" <?php if($student[0]->slp_need == "No"){ echo "SELECTED"; } ?>>No</option>
                            </select>
                            <span id="slp_need_err" style="color:red;"></span>
                         </div>
                        <div class="input-field">
                            <label>Aadhar of the Student*</label>
                            <input type="text" placeholder="Enter Student Aadhar"  id="aadhar" name="aadhar" value="<?php echo $student[0]->aadhar; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\.*)\./g, '$1')" maxlength="12">
                            <label><b>Aadhar of the Student*</b></label>
                            <input type="text" placeholder="Enter Student Aadhar"  id="aadhar" name="aadhar" value="<?php echo $student[0]->aadhar; ?>" maxlength="14">
                            <span id="aadhar_err" style="color:red;"></span>
                        </div>
                        <br>
                        <br> 
                        <div class="input-field" style="margin-left:30px;">
                            <label>Mode of transport*</label>
                            <label><b>Mode of transport*</b></label>
                            <select  id="transport" name="transport">
                                <option disabled selected value="">--SELECT--</option>
                                <option value="School_bus"<?php if($student[0]->transport == "School_bus"){ echo "SELECTED"; } ?>>School Bus</option>
                                <option value="Private"<?php if($student[0]->transport == "Private"){ echo "SELECTED"; } ?>>Private</option>
                            </select>
                            <span id="transport_err" style="color:red;"></span>
                        </div>
                        <br>

                        <div class="input-field">
                            <label> Upload a recent photograph of the Student * :</label>
                            <input type="file" id="myFile" name="image" required> </input>
                            <!-- <span id="name_err" style="color:red;"></span> -->
                            <label><b> Upload a recent photograph of the Student * :</b></label>
                            <input type="file" id="upload" name="image"><span id="upload_err" style="color:red;"></span>


                        </div>





                        <input type="hidden" id="page_type" name="page_type" value="<?php echo $_GET['class']; ?>">
                        <input type="hidden" id="appli_id" name="appli_id" value="<?php echo $_GET['appli_id']; ?>">
                        
                        <br> 
                       <a  type="submit" class="btn btn-submit btn-outline-success float-center ">Save and Continue <i class="uil uil-navigator"></i></a>
                       <a  type="submit" class="btn btn-submit btn-outline-success float-center "><b>Save and Continue</b><i class="uil uil-navigator"></i></a>
                       <div>
                       @include('footer')
</div>
                       <center>@include('footer')</center>
                   </div>
                </div> 
            </div>
        </form>
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.getElementById('myForm').addEventListener('submit', function(e) {
    e.preventDefault(); 
    var formData = new FormData();
    var imageFile = document.getElementById('upload').files[0];
    
    formData.append('image', imageFile);

    axios.post('/upload-image', formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    })
    .then(function(response) {
        console.log(response);
    })
    .catch(function(error) {
        console.log(error);
    });
});
</script>































    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        // function namevalidate() {
        //     let name = document.getElementById("name").value;
        //     if(!/^[a-zA-Z]*$/g.test(name)) {
        //         document.getElementById("name_err").innerHTML = "Contains only alphabets";
        //     }
        //     else {
        //         document.getElementById("name_err").innerHTML = "";
        //     }
            
        // }

        $('#class').on('change', function() {
            let class_name = $(this).val();
            if(class_name == "Grade 1" || class_name == "Grade 2" || class_name == "Grade 3" || class_name == "Grade 4" || class_name == "Grade 5")
            {
                $('div.language_mont').attr('hidden', 'hidden');
                $('div.language12345').removeAttr('hidden');
                $('div.language6').attr('hidden', 'hidden');
                $('div.language78').attr('hidden', 'hidden');
                $('div.language9').attr('hidden', 'hidden');
            }
            else if(class_name == "Grade 6")
            {
                $('div.language_mont').attr('hidden', 'hidden');
                $('div.language12345').attr('hidden', 'hidden');
                $('div.language6').removeAttr('hidden');
                $('div.language78').attr('hidden', 'hidden');
                $('div.language9').attr('hidden', 'hidden');
            }
            else if(class_name == "Grade 7" || class_name == "Grade 8")
            {
                $('div.language_mont').attr('hidden', 'hidden');
                $('div.language12345').attr('hidden', 'hidden');
                $('div.language6').attr('hidden', 'hidden');
                $('div.language78').removeAttr('hidden');
                $('div.language9').attr('hidden', 'hidden');
            }
            else if(class_name == "Grade 9")
            {
                $('div.language_mont').attr('hidden', 'hidden');
                $('div.language12345').attr('hidden', 'hidden');
                $('div.language6').attr('hidden', 'hidden');
                $('div.language78').attr('hidden', 'hidden');
                $('div.language9').removeAttr('hidden');
            }
            else if(class_name == "Grade 11")
            {
                $('div.language_mont').attr('hidden', 'hidden');
                $('div.language12345').attr('hidden', 'hidden');
                $('div.language6').attr('hidden', 'hidden');
                $('div.language78').attr('hidden', 'hidden');
                $('div.language9').attr('hidden', 'hidden');
                $('div.language11').removeAttr('hidden');
            }
            else if(class_name == "Montessori_I"||class_name == "Montessori_II"||class_name == "Montessori_III"||class_name == "PRE-KG"||class_name == "Kindergarten_I"||class_name == "Kindergarten_II")
            {
                $('div.language12345').attr('hidden', 'hidden');
                $('div.language6').attr('hidden', 'hidden');
                $('div.language78').attr('hidden', 'hidden');
                $('div.language9').attr('hidden', 'hidden');
                $('div.language11').attr('hidden', 'hidden');
                $('div.language_mont').removeAttr('hidden');

            }

        })

        $('#name').on('change', function() {
            if (/^[a-zA-Z]*$/g.test($(this).val())) {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("name_err").innerHTML = "";
                // Contain numbers only
            } else {
                document.getElementById("name_err").innerHTML = "Contains only alphabets";
                // Contain other characters also
                document.getElementById("name_err").innerHTML = "Only alphabets are allowed";

            }
        })




        $('#birth_place').on('change', function() {
            if (/^[a-zA-Z ]*$/g.test($(this).val())) {
                document.getElementById("birth_place_err").innerHTML = "";
            } else {
                document.getElementById("birth_place_err").innerHTML = "Only alphabets are allowed";
            }
        })



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
            if(!name || !/^[a-zA-Z]*$/g.test(name) || !gender || !dob || !class_name || !birth_place || !nationality || !religion || !mother_tongue || !phy_clg || !slp_need || !aadhar || !transport)
            let sec_language = document.getElementById("sec_language").value;
            let third_language = document.getElementById("third_language").value;
            if(!name || !/^[a-zA-Z ]*$/g.test(name) || !gender || !dob || !class_name || !birth_place || !/^[a-zA-Z ]*$/g.test(birth_place) || !nationality || !religion || !mother_tongue || !phy_clg || !slp_need || !aadhar || !transport || !sec_language || !third_language)
            {
                if(!name)
                {
                    document.getElementById("name_err").innerHTML = "This is Required Field";
                }
                else if(!/^[a-zA-Z]*$/g.test(name))
                else if(!/^[a-zA-Z ]*$/g.test(name))
                {
                    document.getElementById("name_err").innerHTML = "Contains only alphabets";
                    document.getElementById("name_err").innerHTML = "Only alphabets are allowed";
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
                else if(!/^[a-zA-Z ]*$/g.test(birth_place))
                {
                    document.getElementById("birth_place_err").innerHTML = "Only alphabets are Allowed";
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

                if(!sec_language)
                {
                    document.getElementById("sec_language_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("sec_language_err").innerHTML = " ";
                }

                if(!third_language)
                {
                    document.getElementById("third_language_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("third_language_err").innerHTML = " ";
                }
            // name,gender,dob,class,birth_place,nationality,religion,mother_tongue,phy_clg,slp_need,aadhar,transport
            }
            else if(aadhar.length != 12)
            else if(!/^[2-9]{1}[0-9]{3}\s{1}[0-9]{4}\s{1}[0-9]{4}$/.test(aadhar))   
            {
                document.getElementById("aadhar_err").innerHTML = "InCorrect Aadhaar Number";
            }
            else
            {
                document.getElementById("aadhar_err").innerHTML = " ";
                document.getElementById("myForm").submit();
            }
        });
    </script>
</body>


<style>
    /* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: "Poppins", sans-serif;
} */

.step-wizard {
    /* background-color:  #00008B;
    background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
    height: 10vh;
    width: 10%;
    display: center;
    justify-content: center;
    align-items: center;
}
.step-wizard-list{
    /* background: #fff;
    box-shadow: 0 15px 25px rgba(0,0,0,0.1);
    color: #333;
    list-style-type: none;
    border-radius: 10px; */
    display: flex;
    padding: 20px 10px;
    position: relative;
    z-index: 10;
}

.step-wizard-item{
    padding: 0 20px;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive:1;
    flex-grow: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    min-width: 170px;
    position: relative;
}
.step-wizard-item + .step-wizard-item:after{
    content: "";
    position: absolute;
    left: 0;
    top: 19px;
    background:  #1338BE;
    width: 100%;
    height: 2px;
    transform: translateX(-50%);
    z-index: -10;
}
.progress-count{
    height: 40px;
    width:40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 600;
    margin: 0 auto;
    position: relative;
    z-index:10;
    color: transparent;
}
.progress-count:after{
    content: "";
    height: 40px;
    width: 40px;
    background:  #1338BE;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -10;
}
.progress-count:before{
    content: "";
    height: 10px;
    width: 20px;
    border-left: 3px solid #fff;
    border-bottom: 3px solid #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -60%) rotate(-45deg);
    transform-origin: center center;
}
.progress-label{
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
}
.current-item .progress-count:before,
.current-item ~ .step-wizard-item .progress-count:before{
    display: none;
}
.current-item ~ .step-wizard-item .progress-count:after{
    height:10px;
    width:10px;
}
.current-item ~ .step-wizard-item .progress-label{
    opacity: 0.5;
}
.current-item .progress-count:after{
    background: #ff0000;
    border: 2px solid #ff0000;
}
.current-item .progress-count{
    color: #1338BE;
}
/* ===== Google Font Import - Poppins ===== */
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
    min-height: 1050px;
    min-height: 1200px;
    background-color: #fff;
    overflow: hidden;
    /* overflow: hidden; */
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