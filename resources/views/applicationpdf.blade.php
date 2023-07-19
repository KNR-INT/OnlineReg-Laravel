<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;900&display=swap');

html, body{
    /* font-family: 'Roboto', sans-serif; */
    text-transform: uppercase;
    font-size: 12px;
    font-family:'Times New Roman';
}

.table-no-border,
.table-no-border th,
.table-no-border td,
.table-no-border tr, {
    border: none;
}

.school-logo{
    width:90px;
    height:90px;
    float:left;
}

table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
    padding: 12px;
    text-align: left;
    margin: 0;
}

.page-break {
    page-break-after: always;
}

#applicationNo{
    font-size: 12px;
    font-weight: bold;
    float: right;
}

.student-photo{
    height: 100px;
    float: right;
    /* border: 3px solid #555; */
}

li{
    padding: 3px;
}

.text-uppercase{
    text-transform: uppercase;
}


</style>
<body>
<div>

     <img  src="public/Image/logo.png">
<!-- </div>
<div class="d-flex justify-content-center"> -->
    <center>
        <strong style="text-align: center; font-family:'Times New Roman';font-size:16px; justify-content: center; ">
            NATIONAL PUBLIC SCHOOL - YESHWANTHPUR<br>
                APPLICATION FOR REGISTRATION-1
        </strong>
    <!-- <span  style=" float:right; font-family:'Times New Roman';font-size:12px"><strong>YPR/NUR/YEAR/APPLNO</strong></span></br> -->

    </center>
    <span  style=" float:right; font-family:'Times New Roman';font-size:12px"><strong>YPR/NUR/YEAR/APPLNO</strong></span></br>
</div>

<div style="margin-top: 20px">
<img  src="public/Image/logo.png">
    <div style="margin-top: 90px;">
        <div style="margin-left: 10px; margin-top: 20px;">
        <form id="myForm" action="{{ url('update-applino') }}" enctype="multipart/form-data">
        <input type="hidden" id="page_type" name="page_type" value="<?php echo $_GET['class']; ?>">
    
        <input type="hidden" id="appli_no" name="appli_no" value="NPSYPR/<?php echo $student[0]->class;?>/0<?php echo $student[0]->id; ?>">

        <input type="hidden" id="appli_id" name="appli_id" value="<?php echo $_GET['appli_id']; ?>">

    </form>
        <?php 
                            $id = $_GET['appli_id'];
                            $student = DB::select("SELECT * FROM `students` WHERE `id` = '$id'");
                            ?>
</br>
            <span>
                <strong>Class:</strong>
                <span><?php echo $student[0]->class; ?></span>
            </span>
            <span style="float:right">
                <span><strong>YEAR : </strong></span>
                <span><?php echo $student[0]->dob ?></span>
            </span>
        </div>
    </div>
</div>

    <table>
        <thead>
            <tr>
                <th colspan="4" style="text-align: center">Personal Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Name of the Student:</th>
                <td><?php echo $student[0]->name; ?></td>
                <th>Gender:</th>
                <td><?php echo $student[0]->gender; ?></td>
            </tr>
            
            <tr>
                <th>Date of Birth:</th>
                <td><?php echo $student[0]->dob; ?></td>
                <th>Mother Tongue</th>
                <td><?php echo $student[0]->Mother_tongue; ?></td>
            </tr>
            
            <tr>
                <th>Place Of Birth:</th>
                <td><?php echo $student[0]->birth_place; ?></td>
                <th>Religion</th>
                <td><?php echo $student[0]->religion; ?></td>
            </tr>
            
            <tr>
                <th colspan="2">Siblings studying in NPS Yeshwanthpur</th>
                <td colspan="2"><?php echo  $student[0]->slp_need ?>;</td>  
            </tr>
            
            <tr>
                <th colspan="3">Is your Child Physically Challanged ? </th>
                <td><?php echo  $student[0]->phy_clg?></td>  
            </tr>
            
            <tr>
                <th colspan="3">Does your child have any special need/learning challenges ? </th>
                <td><?php echo $row->physical ?></td>  
            </tr>
            
            <tr>
                <th>Aadhar Card No.</th>
                <td><?php echo $row->aadhar ?></td>
                <th>Mode of Transport</th>
                <td><?php echo $row->transport ?></td>
            </tr>
            
            <tr>
                <th colspan="2" style="text-align: center;">Father Details</th>
                <th colspan="2" style="text-align: center;">Mother Details</th>
            </tr>
            
            <tr>
                <th>Father's Name</th>
                <td><?php echo $row->fatherName ?></td>
                <th>Mother's Name</th>
                <td><?php echo $row->motherName ?></td>
            </tr>
            
            <tr>    
                <th>Residential Address</th>
                <td><?php echo $row->resadd ?></td>
                <th>Residential Address</th>
                <td><?php echo $row->resadd1 ?></td>
            </tr>
            
            <tr>
                <th>Email Id</th>
                <td><?php echo $row->email ?></td>
                <th>Email Id</th>
                <td><?php echo $row->email1 ?></td>
            </tr>
            
            <tr>
                <th>Phone Number (Res)</th>
                <td><?php echo $row->resnum ?></td>
                <th>Phone Number (Res)</th>
                <td><?php echo $row->resnum1 ?></td>
            </tr>

            <tr>
                <th>Phone Number (O)</th>
                <td><?php echo $row->phone ?></td>
                <th>Phone Number (O)</th>
                <td><?php echo $row->phone1 ?></td>
            </tr>

            <tr>
                <th>Gross Annual Income (INR)</th>
                <td><?php echo $row->gross ?></td>
                <th>Gross Annual Income (INR)</th>
                <td><?php echo $row->gross1 ?></td>
            </tr>

            <tr>
                <th colspan="4" style="text-align:center">Company Details</th>
            </tr>

            <tr>
                <th>Designation (Father)</th>
                <td><?php echo $row->dateOfBirth ?></td>
                <th>Designation (Mother)</th>
                <td><?php echo $row->dateOfBirth ?></td>
            </tr>
            
            <tr>
                <th>Company Name (Father)</th>
                <td><?php echo $row->working ?></td>
                <th>Company Name (Mother)</th>
                <td><?php echo $row->working ?></td>
            </tr>
            
            <!-- <tr>
                <th>Company Address (Father)</th>
                <td>Whitefield Bangalore</td>
                <th>Company Address (Mother)</th>
                <td>Koramangala Bangalore</td>
            </tr> -->
            
            <!-- <tr>
                <th colspan="4" style="text-align: center">Document Submitted</th>
            </tr>
            
            <tr>
                <td colspan="4">Birth Certificate, Aadhar/Passport, Father Aadhar</td>
            </tr> -->


        </tbody>
    </table>
    

<!-- ------------------------- PAGE BREAK -------------------------- -->
    <div class="page-break"></div>

        <div style="border: 1px solid black; margin-top: 30px">
            <!-- <p style="text-align: center; font-size: 16px; font-weight:bold ">DECLARATION</p> -->
            <ul>
                <li>Performance indicators used are:
                    <ol><br>
                        <li>E - EMERGING</li>
                        <li>P - PROGRESSING</li>
                        <li>M - MASTERING</li>
                        <li>Student’s Aadhar Card</li>
                        <li>Parents’s Aadhar Card</li>
                    </ol><br>
                <li>Aadipta is an active student. She listens to instructions attentively and is enthusiastic about participating in hands-on
activities. She is able to trace and recognise letter sounds and associates numbers with quantities. She enjoys singing
rhymes. Her participation during Fancy Dress activity is commendable. Well done! Keep it up!</li>
                <li>
                    Registration for admission does not ensure an admission. Admission is granted on merit andavailability of seats. 
                    Entrance test for classes 1 to 9 & 11 is conducted before granting admission. 
                    An annual fee increase of 10 to 15 percent is effective to offset the increasing expenditure 
                    by wayof salary, maintenance, material and other expenditure. 
                    National Public School Yeshwanthpur is aprivate unaided self-financing institution.
                </li><br>
                <li>
                    If an intimation is not received from the school, 
                    it should be presumed that there is no vacancy andno separate intimation 
                    will be sent to the applicants who are not selected.
                </li><br>
                <li>
                    I have read the rules and regulations of National Public School, Yeshwanthpur and 
                    I fully agree toabide by them as long as my child is a student at this school if selected.
                </li><br>
                <li>
                    I hereby declare that the information furnished above is true and 
                    correct to the best of myknowledge and I undertake to inform you of any changes therein, immediately.
                </li><br>
            </ul>
        </div>

    <div>                    
        <div style="margin-top: 60px">
            <span style="float: left;">Signature of Father</span>
            <span style="float: right;">Signature of Mother</span>                
        </div>
    </div>
<style>
    #title{
        font-weight:bold;
        text-align:auto;
        margin-left:-150px;
    }
    #app{
        font-weight:bold;
        text-align:auto;
        margin-left:-150px;
    }
</style>
        <!-- <strong>
           <span id = "title">
            NATIONAL PUBLIC SCHOOL - YESHWANTHPUR<br></span>
            <span id = "app">
                APPLICATION FEE RECEIPT / ADMISSION CARD </strong>
                </span>
    </center>
    <span id="applicationNo">YPR/NUR/YEAR/APPLNO</span>
</div>

<div style="margin-top: 30px">
    <img src="" class="student-photo">

    <div class="row">
        <div class="col-md-12" style="margin-top: 90px;">
            <div style="margin-left: 10px; margin-top: 20px;">
                <span>
                    <strong>Class:</strong>
                    <span><?php echo $row->class1 ?></span>
                </span>
                <span style="float:right">
                    <span><strong>YEAR : </strong></span>
                    <span><?php echo $row->date1 ?></span>
                </span>
            </div>
        </div>
    </div>

</div>
    <table style="width: 100%;" class="table-border">
        <tbody>
            <tr>
                <th>Rec No</th>
                <td>NPSYPR/22-23/0905</td>
            </tr>
            <tr>
                <th>Student Name</th>
                <td><?php echo $row->fullName ?></td>
            </tr>
            <tr>
                <th>Father Name</th>
                <td><?php echo $row->fatherName ?></td>
            </tr>
            <tr>
                <th>Mother Name</th>
                <td><?php echo $row->motherName ?></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><?php echo $row->date1 ?></td>
            </tr>
            <tr>
                <th>Class</th>
                <td><?php echo $row->class1 ?></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><?php echo $row->date1 ?>r</td>
            </tr>
        </tbody>
    </table>

    </div>

    <table style="width: 100%">
        <thead>
            <tr>
                <th colspan="3" style="text-align: center">Application Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Sl No.</th>
                <th>Particulars</th>
                <th>Amount Paid (Rs)</th>
            </tr>
            
            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->orderID ?></td>
                <td><?php echo $row->transactionSignature ?></td>
            </tr>
        </tbody>
    </table>

    <table style="width: 100%;">
        <thead>
            <th colspan="2">Payment Mode</th>
        </thead>
        <tbody>
            <tr>
                <th>Online</th>
                <td>
                    <span>Transaction ID : </span>
                    <strong><?php echo $row->transactionId ?></strong>
                </td>
            </tr>
        </tbody>
    </table>
    This is an electronically generated receipt, hence no signature required.

<div class="page-break"></div> -->

    <!-- <img src="" class="school-logo" style="float-left">
    <center>
        <strong>
            NATIONAL PUBLIC SCHOOL - YESHWANTHPUR<br/>
            ACKNOWLEDGEMENT / ADMIT CARD FOR ENTRANCE TEST 2022-23<br/>
            (To be furnished along with the Application Form)
        </strong>
    </center>
    <h4>Application Number : YPR/GRADE3/2022/01011</h4>
    <div style="border: 1px solid black; padding: 10px;">
    <img src="" height="100" style="float: right; margin: 10px 10px 0 0"/>
    <div>
        <p><strong>Name of the Student: </strong><?php echo $row->fullName ?></p>
        <p><strong>Seeking admission for : </strong><?php echo $row->class1 ?></p>
        <p><strong>Father's Name : </strong><?php echo $row->fatherName ?></p>
        <p><strong>Mother's Name : </strong><?php echo $row->motherName ?></p>
    </div> -->
    
    <!-- <div>
        <p><strong>Note : </strong></p>
        <ul>
            <li>
                <Strong>Subjects for Entrance Test</strong>
                <p><strong>Class 1 : </strong>English and Mathematics</p>
                <p><strong>Class 2-5 : </strong>English, Mathematics and Hindi / Kannada</p>
                <p><strong>Class 6 : </strong>English, Mathematics and Hindi</p>
                <p><strong>Class 7-8 : </strong>English, Mathematics, Science and Hindi</p>
                <p><strong>Class 9 : </strong>English, Mathematics, Science and Hindi / Sanskrit</p>
                <p>
                    <strong>Class 11 : </strong>
                    <u>For Science Stream</u> - English, Physics, Chemistry and Mathematics <br/>
                    <u>For Commerce Stream</u> - Mathematics and English <br/>           
                </p>
            </li>

            <li>Please Check our website periodically for further details on the entrance examination dates, timings etc.</li>
            <li>This Admit card is valid for <strong>NPS Yeshwanthpur</strong> only.</li>
            <li>Results of the Entrance Test will be uploaded on our website within a week of the Entrance Test.</li>
        </ul>
        <p style="margin: 0;"><strong><u>STUDENTS TO BRING THIS ACKNOWLEDGEMENT SLIP FOR THE ENTRANCE TEST.</u></strong></p>
        <p style="float: right; margin-bottom: 55px;"><strong>Office seal and signature</strong></p>
        <p><strong>Place :</strong></p>
        <p><strong>Date :</strong></p>
    </div> -->
</body>





    

