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
  
<body>  <div> 
    <div class="container">

        
<form id="myForm"  action="{{ url('storeImage') }}" method="post" enctype="multipart/form-data">
    @csrf
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item">
                <span class="progress-count">1</span>
               
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">2</span>
               
            </li>
            <li class="step-wizard-item current-item">
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
    <center> <header><b><u><h2>Upload Documents</h2></u></header></center>           
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <?php 
                            $id = $_GET['appli_id'];
                            $student = DB::select("SELECT * FROM `students` WHERE `id` = '$id'");
                            ?>
                            <label>Upload Student Aadhar card * :</label>
<input type="file" id="Student_Aadhar_card" name="image"  onchange="preview()" >
                            <img id="blah" src="#"  style="width:150px;height:200px; margin-left:150px;" class="img-fluid img-thumbnail">                            <span id="Student_Aadhar_card_err" style="color:red;"></span>
                        </div>

                      


                        <div class="input-field">
                            <label>Upload Father's Aadhar card * :</label>
                            <input type="file" id="Fathers_Aadhar_card" name="image1"  onchange="preview1()">
                            <img id="blah1" src="#" alt="your image" style="width:150px;height:200px; margin-left:150px;" class="img-fluid img-thumbnail">
                            <span id="Fathers_Aadhar_card_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label>Birth Certificate Of Student * :</label>
                            <input type="file" id="Birth_Certificate_Of_Student"name="image2"  onchange="preview2()">
                            <img id="blah2" src="#" alt="your image" style="width:150px;height:200px; margin-left:150px;" class="img-fluid img-thumbnail">
                            <span id="Birth_Certificate_Of_Student_err" style="color:red;"></span>
                        </div>
                        <div class="input-field">
                            <label> Upload Mother's Aadhar card* : </label>
                            <input type="file" id="Mothers_Aadhar_card" name="image3"   onchange="preview3()">
                            <img id="blah3" src="#" alt="your image" style="width:150px;height:200px; margin-left:150px;" class="img-fluid img-thumbnail">
                            <span id="Mothers_Aadhar_card_err" style="color:red;"></span>
                        </div>



                        
               <?php
                  $class = $_GET['class'];
                 if($class == '1to9' || $class == '11')
                        {
                         ?>
                        <div class="input-field">
                        <label> Upload Previous year Marks Card's *: </label>
                            <input type="file" id="Previous_year_Marks_Cards" name="Previous_year_Marks_Cards" onchange="preview4()">
                            <img id="blah4" src="#" alt="your image" style="width:150px;height:200px; margin-left:150px;" class="img-fluid img-thumbnail">
                            <span id="Previous_year_Marks_Cards_err" style="color:red;"></span>
                        </div>
                    <?php
                    }
                    ?>

          
                </div> 
            </div>
            <?php 
                if($class == '1to9' || $class == '11')
                {
                    $users = DB::select("SELECT * FROM `old_school` WHERE `appli_id` = '$id'");
                    // print_r($users);
                    if(!empty($users))
                    {
                        ?>
                    
                <center> <header><b><u><h3>Details of Schooling </h3></u></b></header><button type="button" class="btn btn-outline-warning add-row">Add</button></center>
                <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                <td>
                        <?php
                        foreach ($users as $item):
                            ?>
                        <table>
    <tr>
        
        <td>
        
            <div class="input-field"> From Year   <br>
                <input type="date" name="from_year[]"  id="from_year" value="<?php echo $item->from_year; ?>
" placeholder="From date" required>
                <span id="from_year_err" style="color:red;"></span>
            </div>
        </td>
        <td>
            <div class="input-field"> From Class   <br>
                <select name="from_class[]" id="from_class" class="from-class" required>
                    <option disabled selected value="">From Class :</option>
                    <option value="1" <?php if($item->from_class == "1"){ echo "SELECTED";} ?>>Grade1</option>
                               <option value="2" <?php if($item->from_class == "2"){ echo "SELECTED";} ?>>Grade2</option>
                               <option value="3" <?php if($item->from_class == "3"){ echo "SELECTED";} ?>>Grade3</option>
                               <option value="4"<?php if($item->from_class == "4"){ echo "SELECTED";} ?>>Grade4</option>
                               <option value="5" <?php if($item->from_class == "5"){ echo "SELECTED";} ?>>Grade5</option>
                               <option value="6"<?php if($item->from_class == "6"){ echo "SELECTED";} ?>>Grade6</option>
                               <option value="7"<?php if($item->from_class == "7"){ echo "SELECTED";} ?>>Grade7</option>
                               <option value="8"<?php if($item->from_class == "8"){ echo "SELECTED";} ?>>Grade8</option>
                               <option value="9"<?php if($item->from_class == "9"){ echo "SELECTED";} ?>>Grade9</option>
                               <option value="10"<?php if($item->from_class == "10"){ echo "SELECTED";} ?>>Grade10</option>
                    <!-- Add more options here -->
                </select>
                <span id="from_class_err" style="color:red;"></span>

            </div>
        </td>
        <td>
            <div class="input-field">To Year   <br>
                <input type="date" name="to_year[]" id="to_year"  value="<?php echo $item->to_year; ?>" placeholder="To date" required>
                <span id="to_date_err" style="color:red;"></span>
            </div>
        </td>
        <td>
            <div class="input-field">To Class   <br>
                <select name="to_class[]" id="to_class" required>
                    <option disabled selected value="">To Class :</option>
                    <option value="1"<?php if($item->to_class == "1"){ echo "SELECTED";} ?>>Grade1</option>
                               <option value="2" <?php if($item->to_class == "2"){ echo "SELECTED";} ?>>Grade2</option>
                               <option value="3"<?php if($item->to_class == "3"){ echo "SELECTED";} ?>>Grade3</option>
                               <option value="4" <?php if($item->to_class == "4"){ echo "SELECTED";} ?>>Grade4</option>
                               <option value="5"<?php if($item->to_class == "5"){ echo "SELECTED";} ?>>Grade5</option>
                               <option value="6"<?php if($item->to_class == "6"){ echo "SELECTED";} ?>>Grade6</option>
                               <option value="7"<?php if($item->to_class == "7"){ echo "SELECTED";} ?>>Grade7</option>
                               <option value="8"<?php if($item->to_class == "8"){ echo "SELECTED";} ?>>Grade8</option>
                               <option value="9"<?php if($item->to_class == "9"){ echo "SELECTED";} ?>>Grade9</option>
                               <option value="10"<?php if($item->to_class == "10"){ echo "SELECTED";} ?>>Grade10</option>
                    <!-- Add more options here -->
                </select>
                <span id="to_class_err" style="color:red;"></span>
            </div>
        </td>
        </tr>
        <tr>
                <td style="width:250px;">
                    <div class="input-field">School Name <br>  
                    <input type="text" name="school_name[]" id="school_name"  value="<?php echo $item->school_name; ?>" placeholder="School Name" >
                <span id="school_name_err" style="color:red;"></span>
                    </div>
                </td>
                <td style="width:250px;">
                    <div class="input-field">City <br>
                    <input type="text" name="city[]" id="city"  value="<?php echo $item->city; ?>" placeholder="City"> 
                <span id="city_err" style="color:red;"></span>
                    </div>
                </td>
                <td style="width:250px;">
                    <div class="input-field">State  <br>
                        <input type="text" name="state[]" id="state"  value="<?php echo $item->state; ?>" placeholder="State">
                <span id="state_err" style="color:red;"></span>
                    </div>
                </td>
                <td>
                    <div class="input-field">Country  <br>
                        <input type="text" name="country[]" id="country"   value="<?php echo $item->country; ?>" placeholder="Country">
                <span id="country_err" style="color:red;"></span>

                    </div>
                </td>
                <td>
                <button type="button" class="btn btn-danger" id="remove">Remove</button>
                </td>
            </tr>
            </table>
                            <?php

                    endforeach;
                        ?>
                    </td>
                    </tr>
                    </table>
                        <?php
                    }
                    else
                    {

                
                ?>
                <center> <header><b><u><h3>Details of Schooling </h3></u></b></header></center>
          
          <table class="table table-bordered" id="dynamicAddRemove">

<!-- Table rows for dynamically added data -->
    <tr>
    <td>
    <table>
    <tr>
        
        <td>
            <div class="input-field"> From Year   <br>
                <input type="date" name="from_year[]"  id="from_year" placeholder="From date" required>
                <span id="from_year_err" style="color:red;"></span>
            </div>
        </td>
        <td>
            <div class="input-field"> From Class   <br>
                <select name="from_class[]" id="from_class" class="from-class" required>
                    <option disabled selected value="">From Class :</option>
                    <option value="1">Grade1</option>
                               <option value="2">Grade2</option>
                               <option value="3">Grade3</option>
                               <option value="4">Grade4</option>
                               <option value="5">Grade5</option>
                               <option value="6">Grade6</option>
                               <option value="7">Grade7</option>
                               <option value="8">Grade8</option>
                               <option value="9">Grade9</option>
                               <option value="10">Grade10</option>
                    <!-- Add more options here -->
                </select>
                <span id="from_class_err" style="color:red;"></span>

            </div>
        </td>
        <td>
            <div class="input-field">To Year   <br>
                <input type="date" name="to_year[]" id="to_year"placeholder="To date" required>
                <span id="to_date_err" style="color:red;"></span>
            </div>
        </td>
        <td>
            <div class="input-field">To Class   <br>
                <select name="to_class[]" id="to_class" required>
                    <option disabled selected value="">To Class :</option>
                    <option value="1">Grade1</option>
                               <option value="2">Grade2</option>
                               <option value="3">Grade3</option>
                               <option value="4">Grade4</option>
                               <option value="5">Grade5</option>
                               <option value="6">Grade6</option>
                               <option value="7">Grade7</option>
                               <option value="8">Grade8</option>
                               <option value="9">Grade9</option>
                               <option value="10">Grade10</option>
                    <!-- Add more options here -->
                </select>
                <span id="to_class_err" style="color:red;"></span>
            </div>
        </td>
        </tr>
        <tr>
                <td style="width:250px;">
                    <div class="input-field">School Name <br>  
                    <input type="text" name="school_name[]" id="school_name" placeholder="School Name" >
                <span id="school_name_err" style="color:red;"></span>
                    </div>
                </td>
                <td style="width:250px;">
                    <div class="input-field">City <br>
                    <input type="text" name="city[]" id="city" placeholder="City"> 
                <span id="city_err" style="color:red;"></span>
                    </div>
                </td>
                <td style="width:250px;">
                    <div class="input-field">State  <br>
                        <input type="text" name="state[]" id="state" placeholder="State">
                <span id="state_err" style="color:red;"></span>
                    </div>
                </td>
                <td>
                    <div class="input-field">Country  <br>
                        <input type="text" name="country[]" id="country" placeholder="Country">
                <span id="country_err" style="color:red;"></span>

                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-outline-warning add-row">Add</button>
                </td>
            </tr>
            </table>
            </td>
            </tr>
    
</table>
<?php
}
                    }
                    ?>
              </center>
                <input type="hidden" id="page_type" name="page_type" value="<?php echo $_GET['class']; ?>">
                <input type="hidden" id="appli_id" name="appli_id" value="<?php echo $_GET['appli_id']; ?>">
            <br>
            <br>
             <center>
                       <a class="btn btn-back btn-outline-success float-center ">Go Back</a>
                       <a class="btn btn-submit btn-outline-success float-center ">Save and Continue <i class="uil uil-navigator"></i></a>
                       <div></center>
                       @include('footer')
            </div>
                </form>
                </div> 
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // Add row on click of "Add" button
    $('.add-row').click(function () {
        var row = '<tr>' +
            '<td>' +
            '<table>' +
            '<tr class="dynamic-row">' +
            '<td>' +
            '<div class="input-field"> From Year   <br>' +
            '<input type="date" name="from_year[]" id="from_year" placeholder="From date" required>' +
            '</div>' +
            '</td>' +
            '<td>' +
            '<div class="input-field"> From Class   <br>' +
            '<select name="from_class[]" id="from_class" class="from-class" required>' +
            '<option disabled selected value="">From Class :</option>' +
            '<option value="1">Grade1</option>'+
            '<option value="2">Grade2</option><option value="3">Grade3</option>'+
            '<option value="4">Grade4</option>'+
            '<option value="5">Grade5</option><option value="6">Grade6</option>'+
            '<option value="7">Grade7</option><option value="8">Grade8</option>'+
            '<option value="9">Grade9</option><option value="10">Grade10</option>'+
            '</select>' +
            '</div>' +
            '</td>' +
            '<td>' +
            '<div class="input-field">To Year   <br>' +
            '<input type="date" name="to_year[]"  id="to_year" placeholder="To date" required>' +
            '</div>' +
            '</td>' +
            '<td>' +
            '<div class="input-field">To Class   <br>' +
            '<select name="to_class[]" id="to_class" class="to-class" required>' +
            '<option disabled selected value="">To Class :</option>' +
            '<option value="1">Grade1</option>'+
            '<option value="2">Grade2</option><option value="3">Grade3</option>'+
            '<option value="4">Grade4</option>'+
            '<option value="5">Grade5</option><option value="6">Grade6</option>'+
            '<option value="7">Grade7</option><option value="8">Grade8</option>'+
            '<option value="9">Grade9</option><option value="10">Grade10</option>'+
            '</select>' +
            '</div>' +
            '</td>' +
            '</tr><tr>'+
            '<td>' +
            '<div class="input-field"> School Name  <br>' +
            '<input type="text" name="school_name[]" id="school_name" placeholder="School Name" >' +
            '</div>' +
            '</td>' +
            '<td>' +
            '<div class="input-field"> City  <br>' +
            '<input type="text" name="city[]" id="city" placeholder="City" >' +
            '</div>' +
            '</td>' +
            '<td>' +
            '<div class="input-field">State   <br>' +
            '<input type="text" name="state[]" id="state" placeholder="State" >'  +
            '</div>' +
            '</td>' +
            '<td>' +
            '<div class="input-field">Country  <br>' +
            '<input type="text" name="country[]" id="country" placeholder="Country" >'  +
            '</div>' +
            '</td>' +
            '<td>' +
            '<button type="button" class="btn btn-danger" id="remove">Remove</button>' +
            '</td>' +
            '</tr>'+
            '</table>' +
            '</td>' +
            '</tr>';  
            
        $('#dynamicAddRemove').append(row);
    });

    // Remove row on click of "Remove" button
    $('#dynamicAddRemove').on('click', '#remove', function () {
$(this).closest('table').remove();
});
});   
</script>

            
<script>
document.getElementById('myForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission
    var formData = new FormData();
    var imageFile = document.getElementById('Student_Aadhar_card').files[0];
     var imageFile = document.getElementById('Fathers_Aadhar_card').files[1];
      var imageFile = document.getElementById('Birth_Certificate_Of_Student').files[2];
       var imageFile = document.getElementById('Mothers_Aadhar_card').files[3];
       var imageFile = document.getElementById('Previous_year_Marks_Cards').files[4];
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
</script><script>
    function preview() {
   blah.src=URL.createObjectURL(event.target.files[0]);
}

    function preview1() {
   blah1.src=URL.createObjectURL(event.target.files[0]);
}

    function preview2() {
   blah2.src=URL.createObjectURL(event.target.files[0]);
}

    function preview3() {
   blah3.src=URL.createObjectURL(event.target.files[0]);
}
function preview4() {
   blah4.src=URL.createObjectURL(event.target.files[0]);
}

      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                       
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah1')
                        .attr('src', e.target.result);
                       
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2')
                        .attr('src', e.target.result);
                       
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah3')
                        .attr('src', e.target.result);
                       
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah4')
                        .attr('src', e.target.result);
                       
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

                <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.getElementById('myForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission
    var formData = new FormData();
    var imageFile = document.getElementById('Student_Aadhar_card').files[0];
     var imageFile = document.getElementById('Fathers_Aadhar_card').files[1];
      var imageFile = document.getElementById('Birth_Certificate_Of_Student').files[2];
       var imageFile = document.getElementById('Mothers_Aadhar_card').files[3];
       var imageFile = document.getElementById('Previous_year_Marks_Cards').files[4];
    formData.append('image', imageFile);

    axios.post('/upload-image', formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    })
    .then(function(response) {
        // Handle the response here
        console.log(response);
    })
    .catch(function(error) {
        // Handle error
        console.log(error);
    });
});
</script>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.btn-back').click(function(){
            let class_name = document.getElementById("page_type").value;
            let appli_id = document.getElementById("appli_id").value;
            window.location.href = "{{ url('parents_details') }}/a?class="+class_name+"&appli_id="+appli_id;
        });
        
        $('.btn-submit').click(function(){
            let Student_Aadhar_card = document.getElementById("Student_Aadhar_card").value;
            let Fathers_Aadhar_card = document.getElementById("Fathers_Aadhar_card").value;
            let Birth_Certificate_Of_Student = document.getElementById("Birth_Certificate_Of_Student").value;
            let Mothers_Aadhar_card = document.getElementById("Mothers_Aadhar_card").value;
 let appli_id = document.getElementById("appli_id").value;
           {
            
            

            if(appli_id == "1to9" || appli_id == "11")
            {

                let from_year = [];
            $("input:text[name='from_year']").each(function() {
                from_year.push($(this).val());
            });

            let from_class = [];
            $("input:text[name='from_class']").each(function() {
                from_class.push($(this).val());
            });
            let to_year = [];
            $("input:text[name='to_year']").each(function() {
                to_year.push($(this).val());
            });
            let to_class = [];
            $("input:text[name='to_class']").each(function() {
                to_class.push($(this).val());
            });
            let school_name = [];
            $("input:text[name='school_name']").each(function() {
                school_name.push($(this).val());
            });
            let city = [];
            $("input:text[name='city']").each(function() {
                city.push($(this).val());
            });
            let state = [];
            $("input:text[name='state']").each(function() {
                state.push($(this).val());
            });
            let country = [];
            $("input:text[name='country']").each(function() {
                country.push($(this).val());
            });
   alert(country);
                if(!Student_Aadhar_card || !Fathers_Aadhar_card || !Birth_Certificate_Of_Student || !Mothers_Aadhar_card || !from_year || !from_class || !to_year || !to_class || !school_name || !city || !state || !country)
            {
                if(!Student_Aadhar_card)
                {
                    document.getElementById("Student_Aadhar_card_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("Student_Aadhar_card_err").innerHTML = " ";
                }

                if(!Fathers_Aadhar_card)
                {
                    document.getElementById("Fathers_Aadhar_card_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("Fathers_Aadhar_card_err").innerHTML = " ";
                }

                if(!Birth_Certificate_Of_Student)
                {
                    document.getElementById("Birth_Certificate_Of_Student_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("Birth_Certificate_Of_Student_err").innerHTML = " ";
                }

                if(!Mothers_Aadhar_card)
                {
                    document.getElementById("Mothers_Aadhar_card_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("Mothers_Aadhar_card_err").innerHTML = " ";
                }

                if(!from_year)
                {
                    document.getElementById("from_year_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("from_year_err").innerHTML = " ";
                }
                if(!from_class)
                {
                    document.getElementById("from_class_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("from_class_err").innerHTML = " ";
                }
                if(!to_year)
                {
                    document.getElementById("to_year_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("to_year_err").innerHTML = " ";
                }
                if(!to_class)
                {
                    document.getElementById("to_class_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("to_class_err").innerHTML = " ";
                }
                if(!school_name)
                {
                    document.getElementById("school_name_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("school_name_err").innerHTML = " ";
                }
                if(!city)
                {
                    document.getElementById("city_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("city_err").innerHTML = " ";
                }
                if(!country)
                {
                    document.getElementById("country_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("country_err").innerHTML = " ";
                }
                if(!state)
                {
                    document.getElementById("state_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("state_err").innerHTML = " ";
                }
            }            

        else
            {
                document.getElementById("myForm").submit();
            }

            }
            else
            {

            
            if(!Student_Aadhar_card || !Fathers_Aadhar_card || !Birth_Certificate_Of_Student || !Mothers_Aadhar_card)
            {
                if(!Student_Aadhar_card)
                {
                    document.getElementById("Student_Aadhar_card_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("Student_Aadhar_card_err").innerHTML = " ";
                }

                if(!Fathers_Aadhar_card)
                {
                    document.getElementById("Fathers_Aadhar_card_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("Fathers_Aadhar_card_err").innerHTML = " ";
                }

                if(!Birth_Certificate_Of_Student)
                {
                    document.getElementById("Birth_Certificate_Of_Student_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("Birth_Certificate_Of_Student_err").innerHTML = " ";
                }

                if(!Mothers_Aadhar_card)
                {
                    document.getElementById("Mothers_Aadhar_card_err").innerHTML = "This is Required Field";
                }
                else
                {
                    document.getElementById("Mothers_Aadhar_card_err").innerHTML = " ";
                }
            }            

        else
            {
                document.getElementById("myForm").submit();
            }
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
    max-width: 1200px;
    width: 200%;
    height: 200%;
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
    height:100%;
    min-height: 2000px;
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
    transform: translateX(100%);
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

@media (max-width: 850px) {
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
