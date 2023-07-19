
@include('header')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="My Application Description">
    <meta name="author" content="Sammy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
&nbsp;&nbsp;&nbsp;&nbsp;
<section class="step-wizard" style="margin-left: 250px;">
        <ul class="step-wizard-list">
            <li class="step-wizard-item ">
                <span class="progress-count">1</span>
               
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">2</span>
               
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">3</span>
               
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">4</span>
                
            </li>
             <li class="step-wizard-item current-item">
                <span class="progress-count">5</span>
                
            </li>
             <li class="step-wizard-item">
                <span class="progress-count">6</span>
               
            </li>
        </ul>
    </section>
    <br>
<h3>Application Fee Payment For Academic Year 2022-23</h3>


<?php 
                            $id = $_GET['appli_id'];
                            $student = DB::select("SELECT * FROM `students` WHERE `id` = '$id'");
                            ?>
                            
 <br>


 <form id="myForm" action="{{ url('update-updateadmitted') }}" enctype="multipart/form-data">
        <input type="hidden" id="page_type" name="page_type" value="<?php echo $_GET['class']; ?>">
    
        <input type="hidden" id="appli_no" name="appli_no" value="NPSYPR/<?php echo $student[0]->class;?>/0<?php echo $student[0]->id; ?>">

        <input type="hidden" id="appli_id" name="appli_id" value="<?php echo $_GET['appli_id']; ?>">

    </form>
    <?php 
                            $class = $_GET['class'];
                        ?>
                                             <?php 
                            $id = $_GET['appli_id'];
                            $student = DB::select("SELECT * FROM `students` WHERE `id` = '$id'");
                            ?>
 <div>
<table align="center" cellpadding = "20">
<form action="">
     <input type="hidden" id="page_type" name="page_type" value="<?php echo $_GET['class']; ?>">
    
        <input type="hidden" id="appli_no" name="appli_no" value="NPSYPR/<?php echo $student[0]->class; ?>/0<?php echo $student[0]->id; ?>">
        <input type="hidden" id="status" name="status" value="Submitted">
        <input type="hidden" id="appli_id" name="appli_id" value="<?php echo $_GET['appli_id']; ?>">

    </form>
<tr id="a">
<th>Student Name</th>
<td><input type="text"  value="<?php echo $student[0]->name; ?>" readonly></td>
</tr>
<tr>
<th>Father Name</th>
<td><input type="text" value="<?php echo $student[0]->father_name ?>" readonly></td>
</tr>
<tr id="a">
<th>Mother Name</th>
<td><input type="text" value="<?php echo $student[0]->mother_name ?>" readonly></td>
</td>
</tr>
<tr>
<th>For Class</th>
<td><input type="text" value="<?php echo $student[0]->class ?>" readonly></td>
</tr>
<tr id="a">
    <th>Application No</th>
    <td><?php echo $student[0]->class; ?>/0<?php echo $student[0]->id; ?></td>
</tr>
<tr id="a">
    <th>Payable amount</th>
    <td>{{ $registrationFee }}</td>
</tr>
</table>
</div>

<br>
<div class="justify-content-center">
    
<button class="btn  btn-submit btn-primary" style="margin-left:530px;" height="100px;" id="btn1" >
Payment</button>


</div>
@include('footer') 
</form>
<script>
        $('.btn-submit').click(function(){
            document.getElementById("myForm").submit();
        });
</script>
</body>  
</html>
<style>
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
    #btn1 {background-color: #008CBA;
    height:50px;
    width:100px;
    }
    </style>
<style>
    h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: normal; 
  color:Black;
  text-align: center; 
}

table{
  font-family: Calibri; 
  color:Black; 
  font-size: 18pt; 
  font-style: normal;
  font-weight: normal;
  text-align:; 
  width:450px;
  height:80px;
  background-color: white; 
  border-collapse: collapse; 
   
}
#a{
  background-color:lightgrey;
  height:10px;
}
table.inner{
  border: 0px;
}

</style>
<style>
    h2{
  font-family: Calibri; 
  font-size: 35pt;         
  font-style:normal; 
  font-weight:bold; 
  color:Black;
  text-align: center; 
}

h4{
  font-family: Calibri; 
  color:Black; 
  font-size:20pt; 
  text-align:center; 
  width:500px;
  background-color:lightgrey; 
}

</style>


