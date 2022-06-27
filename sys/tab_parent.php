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
    <link rel="stylesheet" href="css/azia.css">    <?php include 'talum.php'; ?>

    <?php 
    include 'talum.php';
   
    ?>

    <?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $ic=$_SESSION['ic'];       
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    while($data2 = mysqli_fetch_array($records)) { 
      
           
  $role = $data2['role'];
   $agent=$data2['stud_name'];  
   $app_status = $data2['app_status'];

        include 'main_menu.php';
      }
      ?>
    <?php 
    $records2 = mysqli_query($dbconfig,"select * from parent where stud_ic='$ic'"); // fetch data from database
     
    
    $sql21 = "SELECT * FROM `nationality`";
    $all_nation = mysqli_query($dbconfig,$sql21);
    $all_nation2 = mysqli_query($dbconfig,$sql21);
    $sql22 = "SELECT * FROM `marital`";
    $all_marital = mysqli_query($dbconfig,$sql22);
    $all_marital2 = mysqli_query($dbconfig,$sql22);
    $sql23 = "SELECT * FROM `race` ";
    $all_race = mysqli_query($dbconfig,$sql23);
    $all_race2 = mysqli_query($dbconfig,$sql23);
    $sql24 = "SELECT * FROM `religion` ";
    $all_religion = mysqli_query($dbconfig,$sql24);
    $all_religion2 = mysqli_query($dbconfig,$sql24);
    $sql25 = "SELECT * FROM `guardian_relations` ";
    $all_relation = mysqli_query($dbconfig,$sql25);
    $all_relation2 = mysqli_query($dbconfig,$sql25);
    $sql26 = "SELECT * FROM `household` ";
    $all_household = mysqli_query($dbconfig,$sql26);
    $sql27 = "SELECT * FROM `household_income` ";
    $all_income = mysqli_query($dbconfig,$sql27);
    
    ?>
  </head>

      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Family Background</h2>
          <p class="mg-b-0">Please complete all the information below.</p>
        </div>
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card card-dashboard-seven">
          <div class="card-body">
            <p class="mg-b-20"></p>
            <form action="save_personal.php" method="post">     
<?php while($data2 = mysqli_fetch_array($records2)) { 
     $occupationStatus = $data2['p1_occupation'];
     $occupationStatus1 = $data2['p2_occupation'];
     ?>
<p class="mg-b-20"></p>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name of Parent/Guardian: <span class="tx-danger">*</span></label>
      <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep1" placeholder="Full Name" value="<?php echo $data2['p1_name']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp1" class="form-control" name="icp1" placeholder="IC Number" type="text" value="<?php echo $data2['p1_ic']; ?>" >
    </div><!-- form group -->
  </div><!--col-->
</div><!-- row -->
  <div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Occupation Status: <span class="tx-danger">*</span></label>
        <select name="occupationStatus" id="occupationStatus" class="form-control select" required>
           <option selected disabled="" style="font-size:14px;">Please Select</option>
             <option <?php if ($occupationStatus == "Working") {
                       echo 'selected';
             } ?> value="Working">Working</option>
             <option <?php if ($occupationStatus == "Not Working") {
                        echo 'selected';
             } ?> value="Not Working">Not Working</option>
       </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->

<p class="mg-b-20"></p>
<hr/>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name of Parent/Guardian 2: <span class="tx-danger">*</span></label>
      <input id="namep2" class="form-control" style="text-transform:uppercase" name="namep2" placeholder="Full Name" value="<?php echo $data2['p2_name']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp2" class="form-control" name="icp2" placeholder="IC Number" type="text" value="<?php echo $data2['p2_ic']; ?>" >
    </div><!-- form group -->
  </div><!--col-->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
  <div class="form-group">
      <label class="form-control-label">Occupation Status: <span class="tx-danger">*</span></label>
      <select name="occupationStatus1" id="occupationStatus1" class="form-control select" required>
           <option selected disabled="" style="font-size:14px;">Please Select</option>
             <option <?php if ($occupationStatus1 == "Working") {
                       echo 'selected';
             } ?> value="Working">Working</option>
             <option <?php if ($occupationStatus1 == "Not Working") {
                        echo 'selected';
             } ?> value="Not Working">Not Working</option>
       </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->  
<p class="mg-b-20"></p>
<hr/>
<div class="row row-sm">
<div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Income: <span class="tx-danger">*</span></label>
    <input id="income" class="form-control" name="income" placeholder="Eg: RM 5500" type="text" value=" <?php echo $data2['income']; ?>" >
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Number: <span class="tx-danger">*</span></label>
      <select name="household" class="form-control select2">
      <option value="NULL">Select</option>
      <?php while ($hhold = mysqli_fetch_array($all_household,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $hhold["household_code"];?>"<?php if($hhold["household_code"]==$data2['household']) echo 'selected="selected"'; ?>><?php echo $hhold["household_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
<?php } ?>
<div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_parent"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                    <button type="button" onclick="window.location.href = 'tab_workexp.php'" class="btn btn-lg btn-secondary waves-effect waves-light">
                        Seterusnya&nbsp;&nbsp;<i class="far fa-arrow-alt-circle-right"></i>
                    </button>
                </div>
            
            </form>
            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->

  </div><!-- row --></div>
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

    <script src="../js/azia.js"></script>
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
