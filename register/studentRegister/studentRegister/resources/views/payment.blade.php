
@include('header')
<html>
<head>
<!-- <title>Student Registration Form</title> -->
</head>
<body>
    <br>
<h3>Application Fee Payment For Academic Year 2022-23</h3>

 <br>
<table align="center" cellpadding = "20">
 
<!----- First Name ---------------------------------------------------------->
<tr id="a">
<th>Student Name</th>
<td>Virat</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<th>Father Name</th>
<td>Kohli</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr id="a">
<th>Mother Name</th>
<td>Sarojini</td>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<th>For Class</th>
<td>Montessori I</td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr id="a">
    <th>Application No</th>
    <td>2023-24/4567</td>
</tr>
</table>
<div>
    <br>
    <br>
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
  width:700px;
  height:100px;
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


