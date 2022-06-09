
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.png"/>

    

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/morris.js/morris.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link href="lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">
    <?php 
    include 'talum.php';
   
    ?>

    <?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $ic=$_SESSION['ic'];      
   $id = $_REQUEST['id'];

    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    while($data2 = mysqli_fetch_array($records)) { 
      
           
  $role = $data2['role'];
   $agent=$data2['stud_name'];  

        include 'main_menu.php';
      }
       
    ?>
    <?php     
    $sql31 = "SELECT * FROM `spm_subject`";
    $all_sub = mysqli_query($dbconfig,$sql31);
    $sql32 = "SELECT * FROM `spm_grade`";  
    $records3 = mysqli_query($dbconfig,"select * from application where stud_ic='$ic'"); 
    while($data = mysqli_fetch_array($records3)) {   

    ?>
  </head>
    <body class="az-body az-body-sidebar">

      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Application Information</h2>
          <p class="mg-b-0">Please complete all the information below.</p>
        </div>
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-10">
        <div class="card card-dashboard-seven">
          <div class="card-body">
      <form action="save_personal.php" method="post">
      <div class="row row-sm">

        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="form-group">
                         <input type="text" class="form-control" name="id" placeholder="Enter your full name"  style="text-transform:uppercase" value="<?php echo $id?>">


    <label for="seeAnotherField">MODE OF PROGRAMME</label>
    <select class="form-control" id="seeAnotherField" name="seeAnotherField">
    <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM program ";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['pg_code'];
                                $pgName=strtolower($row4['pg_name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                        <?php } ?>
        
    </select>
  </div>

        </div> 
        <div class="col-md-12 col-lg-12 col-xl-6">
        
      </div>

      </div>

<!--DIPLOMA -->

      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
<div class="form-group" id="otherFieldDiv">
    <label for="otherField">RK </label>
    <select class="form-control" id="otherField" name="otherField">
      <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM inst where inst_name='$agent'";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['code_rk'];
                                $pgName=strtolower($row4['inst_name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                        <?php } ?>
        
    </select>
  </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-6">
        
      </div>
      </div><!-- row -->
      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
           <div class="form-group" id="otherP" >
    <label for="otherPO">PROGRAMME OFFERED</label>
    <select class="form-control" id="otherPO" name="otherPO">
      <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM program_diploma where inst_name='$agent' ";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['pg_code'];
                                $pgName=strtolower($row4['pg_name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                        <?php } ?>
        
    </select>
  </div>
        </div>
       
      </div>
<!--MASTER -->
       <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
           <div class="form-group" id="otherP1">
    <label for="otherPO1">PROGRAMME OFFERED</label>
    <select class="form-control" id="otherPO1">
      <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM program_degree where inst_name='$agent' ";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['pg_code'];
                                $pgName=strtolower($row4['pg_name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                        <?php } ?>
        
    </select>
  </div>
        </div>
       
      </div><!-- row -->


    <?php } ?>
     <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                <div>
                    <button type="submit" name="submit_program"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                    <button type="button" onclick="window.location.href = 'tab_personal.php'" class="btn btn-lg btn-secondary waves-effect waves-light">
                        Seterusnya&nbsp;&nbsp;<i class="far fa-arrow-alt-circle-right"></i>
                    </button>
                </div>
            </div>
        </div>
     
      </form>            
            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->

</div>
</div>
    <div class="az-footer ht-40">
      <div class="container-fluid pd-t-0-f ht-100p">
        <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
      </div><!-- container -->
    </div><!-- az-footer -->
  </div><!-- az-content -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../lib/raphael/raphael.min.js"></script>
    <script src="../lib/morris.js/morris.min.js"></script>
    <script src="../lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="../lib/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script>
//DIPLOMA IKUT RK
$("#seeAnotherField").change(function() {
      if ($(this).val() == "DIP") {
        $('#otherFieldDiv').show();
         $('#otherP').show();
         $('#otherP1').hide();
        
      } 


else if($(this).val() == "MASTER") {
        $('#otherFieldDiv').show();
         $('#otherP1').show();
         $('#otherP').hide();




}
else if($(this).val() == "MASTER") {
        $('#otherFieldDiv').show();
         $('#otherP1').show();
         $('#otherP').hide();




}

      else {
        
        $('#otherP').hide();
        $('#otherP1').hide();
           
      }
    
     
      
    });
    $("#seeAnotherField").trigger("change");


    
     
      
    

    </script>
    
     

   

  
    <script src="../js/azia.js"></script>
    <script>  
   
          
    </script>

    <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        })

        /* ----------------------------------- */
        /* Dashboard content */

        $('#compositeline').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline2').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline3').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline4').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });


        var morrisData = [
          { y: 'Oct 01', a: 95000, b: 70000 },
          { y: 'Oct 05', a: 75000,  b: 55000 },
          { y: 'Oct 10', a: 50000,  b: 40000 },
          { y: 'Oct 15', a: 75000,  b: 65000 },
          { y: 'Oct 20', a: 50000,  b: 40000 },
          { y: 'Oct 25', a: 80000, b: 90000 },
          { y: 'Oct 30', a: 75000,  b: 65000 }
        ];

        new Morris.Bar({
          element: 'morrisBar1',
          data: morrisData,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Online', 'Offline'],
          barColors: ['#560bd0', '#00cccc'],
          preUnits: '$',
          barSizeRatio: 0.55,
          gridTextSize: 11,
          gridTextColor: '#494c57',
          gridTextWeight: 'bold',
          gridLineColor: '#999',
          gridStrokeWidth: 0.25,
          hideHover: 'auto',
          resize: true,
          padding: 5
        });

        $('#vmap2').vectorMap({
          map: 'usa_en',
          showTooltip: true,
          backgroundColor: '#fff',
          color: '#60adff',
          colors: {
            mo: '#9fceff',
            fl: '#60adff',
            or: '#409cff',
            ca: '#005cbf',
            tx: '#005cbf',
            wy: '#005cbf',
            ny: '#007bff'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderWidth: 1,
          borderColor: '#fff',
          hoverOpacity: .85
        });

      });
    </script>

  </body>
</html>
