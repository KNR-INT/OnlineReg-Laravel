<!DOCTYPE html>
<html>
<head>
    <title>Online Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('header')
    <div class="container">
        <div class="justify-content-center" style="margin-top:40px;">
        <h2><b>We are showing the Draft Application</b></h2>
        </div> 
        <div class="card-body table-responsive p-1">
                           <table class="table table-bordered table-hover" id ="Applications">
                                             
                                             <tbody>
        @foreach ($student as $item)

                                             <table align="left" cellpadding = "10"  cellspacing="10" border="1">


                                        


<!-- <tr>
<td><img src="/images/carrot.jpg" alt="carrot" width="200"></td>

<td>Name ={{ $item->name }}</td>



</tr> -->
 
<tr>
<td>Class={{ $item->class }}</td> 

</td>

</tr>       
<tr>
<td>Application Id={{ $item->id }}</td>



</tr>   
 <tr>
 
 <td><a href = "{{ url('onlinereg') }}/a?class={{ $item->link_class }}&appli_id={{ $item->id }}" class="d-block">Edit Application</a></td>
 
 </tr>

        @endforeach
        </tbody>
 
        
</table>

</div>  
</body>
   
@include('footer')  
</html>
</head>
</html>
<!-- <?php
 $session = session()->all();
 print_r($session);
 ?> -->



