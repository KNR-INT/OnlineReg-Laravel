@include('header')

<div >
    <div class="container">
    <!-- <div class="justify-content-center     -->


    <div class="d-flex align-items-start">
             <div class="row-ms-1">
            <!-- <div class="col-md-2"> -->
            </div>

            <div class="row-ms-1">
                     <div class="card">
                        <div class="alert alert-info">
                        <img src="https://cache.careers360.mobi/media/schools/social-media/media-gallery/8350/2019/7/20/National%20Public%20School-Computer%20Lab.jpg"  alt="" height="250" width="250">
                        </div>
                        <!-- <div>
    {{ Session::get('id') }}
                         </div> -->
                    <div class="card-body">
                       <!-- <h3 class="card-footer text-center">Montessori</h3> -->
                       <h3 class="card-footer text-center"><a href="guidelinesmont" value="_d" id="mont" name="mont" class="d-block js-submit">Montessori </a></h3>
                            
                                
                    </div>
                </div>
             </div>
&nbsp;
               <div class="row-md-1">
             
             <div class="card">
              
                        <div class="alert alert-info">
                        <img src="https://cache.careers360.mobi/media/schools/social-media/media-gallery/8350/2019/7/20/National%20Public%20School-Art_Craft.jpg " alt="" height="250" width="250">     
                   </div>
                    <div class="card-body">
                       
                       <h3 class="card-footer text-center"><a href="guidelinesmont" class="d-block">Kindergarten </a></h3>

                      
                    </div>
                </div>
                <div class="col-md-1">
            </div>
             </div>

             
<!-- </div>
</div> -->

<!-- <div class="justify-content-center"> -->
             <!-- <div class="row ">
            <div class="col-md-2">
            </div> -->
            &nbsp;
            <div class="row-md-1">
                     <div class="card">
                        <div class="alert alert-info">
                        <img src="https://cache.careers360.mobi/media/schools/social-media/media-gallery/8350/2019/7/20/National%20Public%20School-Computer%20Lab.jpg" alt="" height="250" width="250">
                        </div>
                    <div class="card-body">
                       
                       <h3 class="card-footer text-center"><a href="guidelinesmont" class="d-block">Grade 1-9 </a></h3>

                            
                                
                    </div>
                </div>
             </div>
             &nbsp;
               <div class="row-md-1">
             
             <div class="card">
              
                        <div class="alert alert-info">
                        <img src="https://cache.careers360.mobi/media/schools/social-media/media-gallery/8350/2019/7/20/National%20Public%20School-Computer%20Lab.jpg" alt="" height="250" width="250">     
                   </div>
                    <div class="card-body">
                       <h3 class="card-footer text-center"><a href="guidelinesmont" class="d-block">Grade 11</a></h3>

                       
                      
                    </div>
                </div>
                <div class="col-md-1">
            </div>
             </div>

</div>      
</div>
</div>


	<!-- //copyright bottom -->
 @include('footer')
</body>

</html>
</head>
<body>
    <!-- <p>Document Body</p> -->
</body>
</html>

<script>
     $('.js-submit').click(function(){
            var section = document.getElementById("section").value;
           
            
            //  alert(academic);

             window.location.href="('guidelinesmont/a?section=')"+section;

            
          
        });
        </script>