@include('header')


<html>
<head>
<title>Student Registration Form</title>

</head>
 
<body>
  <div>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

 <section class="step-wizard">
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
             <li class="step-wizard-item ">
                <span class="progress-count">5</span>
                
            </li>
             <li class="step-wizard-item current-item">
                <span class="progress-count">6</span>
               
            </li>
        </ul>
    </section>
<br>
<br>
 <br>
<table text-align="center" cellpadding="20" style="margin-left:430px;">    <tr> <h2>Thank You</h2></tr>
    <br/>
      <tr>
            <td>Your admitted,payment is successfull</td>
       </tr>
           <tr>
             <td> transactionId=19238418432748423</td>
           </tr>
</table>
<div class="justify-content-center" style="margin-top:100px;">
		<div class="container-fluid">
			<div class="justify-content-center px-md-3 position-relative text-center">
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				<a text-align='center' style="margin-left:500px;">
						<p> Phone : <a href = "tel:+91 8029501184">+91 8029501184</a>
         
          , <a  href = "tel:tel:+91 8023571220" >+91 8023571220</a>
          
          <br/>
          <a text-align='center' style="margin-left:480px;">
          Email : <a href = "mailto:info@npsypr.com">info@npsypr.com</a>
        
          , <a href = "admissions@npsypr.com">admissions@npsypr.com</a>
		  <br/>&nbsp;&nbsp;&nbsp;
		  <a tect-align='center' style="margin-left:350px;">
          � 2013 - 2022 by NPS Yeshwanthpur. All Rights Reserved.
      
Designed by <span style="color:#E31E25">K</span><span style="color:#19A9E4">N</span><span style="color:#67AE3B">R</span> Tech Solutions.</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<!-- � 2013 - 2022 by NPS Yeshwanthpur. All Rights Reserved. Designed by KNR Tech Solutions. -->
				<!-- <a text-align='right' href="https://npsypr.edu.in/facilities/">
                  <p> Facilities </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php#">Contact Us </p></a>
                    	 -->
				
			</div>
		</div>
	</div>
</body>  
</html>
<!-- <div class="justify-content-center" style="margin-top:100px;">
		<div class="container-fluid">
			<div class="justify-content-center px-md-3 position-relative text-center">
			<br>
      <br/>
      <br>
      <br/>
      <br>
      <br/>
					<a text-align='center' style="margin-left:500px;">
						<p> Phone : <a href = "tel:+91 8029501184">+91 8029501184</a>
         
          , <a  href = "tel:tel:+91 8023571220" >+91 8023571220</a>
          
          <br/>
          <a text-align='center' style="margin-left:580px;">
          <p>   Email : <a href = "mailto:info@npsypr.com">info@npsypr.com</a>
        
          , <a href = "admissions@npsypr.com">admissions@npsypr.com</a>
		  <br/>&nbsp;&nbsp;&nbsp;
		  <a tect-align='center'  style="margin-left:450px;">
         @2013 - 2022 by NPS Yeshwanthpur. All Rights Reserved.
      
Designed by <span style="color:#E31E25">K</span><span style="color:#19A9E4">N</span><span style="color:#67AE3B">R</span> Tech Solutions.</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			</div>
		</div>
   </div> -->
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
    #btn1 {background-color: #008CBA;}
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

table{
  font-family: Calibri; 
  color:Black; 
  font-size:20pt; 
  width:700px;
  height:200px;
  text-align:center; 
  background-color:lightgrey; 
}

</style>

