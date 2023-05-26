
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
    <br>
<h3>Application Fee Payment For Academic Year 2022-23</h3>

 <br>
 <div>
<table align="center" cellpadding = "20">

<tr id="a">
<th>Student Name</th>
<td>Virat</td>
</tr>
<tr>
<th>Father Name</th>
<td>Kohli</td>
</tr>
<tr id="a">
<th>Mother Name</th>
<td>Sarojini</td>
</td>
</tr>
<tr>
<th>For Class</th>
<td>Montessori I</td>
</tr>
<tr id="a">
    <th>Application No</th>
    <td>2023-24/4567</td>
</tr>
</table>
</div>
<br>
<div class="justify-content-center">
    
<button class="btn btn-primary" style="margin-left:550px;" height="100px;" id="btn1" onclick="window.location.href = 'admitted'">
Payment</button>
</div>
@include('footer') 
</form>
     
</body>  
</html>
<style>
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
