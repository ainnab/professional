

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
    <link rel="stylesheet" href="css/azia.css"><?php 
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
       $app_status = $data2['app_status'];
        include 'main_menu.php';
     
       }     
    ?>

  <?php 
  $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
  $now_year = date('Y');
  $card_year  = substr($ic,0,2);
  if ($card_year<50){
  $age = $now_year - intval("20".$card_year);
  }else{
  $age = $now_year - intval("19".$card_year);
  }


  $sql1 = "SELECT * FROM `nationality`";
  $all_nation = mysqli_query($dbconfig,$sql1);
  $sql2 = "SELECT * FROM `state_my` group by state_name";
  $all_state = mysqli_query($dbconfig,$sql2);
  $sql3 = "SELECT * FROM `gender` ";
  $all_gender = mysqli_query($dbconfig,$sql3);
  $sql4 = "SELECT * FROM `marital` ";
  $all_marital = mysqli_query($dbconfig,$sql4);
  $sql5 = "SELECT * FROM `race` ";
  $all_race = mysqli_query($dbconfig,$sql5);
  $sql6 = "SELECT * FROM `religion` ";
  $all_religion = mysqli_query($dbconfig,$sql6);
  $sql7 = "SELECT * FROM `state_my` group by state_name";
  $all_state2 = mysqli_query($dbconfig,$sql7);
  $sql8 = "SELECT * FROM `oku_type`";
  $all_oku = mysqli_query($dbconfig,$sql8);
  ?>

<?php while($data = mysqli_fetch_array($records)) { ?>
</head>
  <body class="az-body az-body-sidebar">
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Personal Information</h2>
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
            <form action="save_personal.php" method="post" enctype="multipart/form-data">
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" value="<?php echo $data['stud_name']; ?>" type="text" style="text-transform:uppercase" required>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">IC / Passport Number: <span class="tx-danger">*</span></label>
                <input id="ic" class="form-control" name="ic" type="text" value="<?php echo $_SESSION['ic']; ?>" readonly>
                <br>
                <label>Age</label> <input id="age" class="form-control" name="age" type="text" value="<?php echo $age; ?>" readonly>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                <select name="gender" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($gen = mysqli_fetch_array($all_gender,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $gen["gender_code"];?>"<?php if($gen["gender_code"]==$data['gender']) echo 'selected="selected"'; ?>><?php echo $gen["gender_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-3">
                <div class="form-group">
                <label class="form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        Date:
                        </div>
                    </div>
                    <input id="dob" type="date" name="dob" class="form-control" value="<?php echo $data['dob']; ?>" placeholder="MM/DD/YYYY" required>
                    </div><!-- input-group -->
                </div><!-- form group -->
            </div><!-- col-4 -->
            
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">State Of Birth: <span class="tx-danger">*</span></label>
                <select name="pob" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($state = mysqli_fetch_array($all_state,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $state["state_code"];?>"<?php if($state["state_code"]==$data['pob']) echo 'selected="selected"'; ?>><?php echo $state["state_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">Citizenship: <span class="tx-danger">*</span></label>
                <select name="nation" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($nation = mysqli_fetch_array($all_nation,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $nation["taraf_code"];?>"<?php if($nation["taraf_code"]==$data['stud_nation']) echo 'selected="selected"'; ?>><?php echo $nation["taraf_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Marital Status: <span class="tx-danger">*</span></label>
                <select name="marital" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($mar = mysqli_fetch_array($all_marital,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $mar["status_code"];?>"<?php if($mar["status_code"]==$data['marital']) echo 'selected="selected"'; ?>><?php echo $mar["status_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-6">
                <div class="form-group">
                <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
                <select name="religion" class="form-control select2">
                <option value="NULL">Select</option>
                <?php while ($rel = mysqli_fetch_array($all_religion,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $rel["religion_code"];?>"<?php if($rel["religion_code"]==$data['stud_religion']) echo 'selected="selected"'; ?>><?php echo $rel["religion_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-6">
                <div class="form-group">
                <label class="form-control-label">Ethnic: <span class="tx-danger">*</span></label>
                <select name="race" class="form-control select2">
                <option value="NULL">Select</option>
                <?php while ($race = mysqli_fetch_array($all_race,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $race["ptmk_race_code"];?>"<?php if($race["ptmk_race_code"]==$data['stud_race']) echo 'selected="selected"'; ?>><?php echo $race["race_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">About Me <span class="tx-danger"></span></label>
                <input type="text" id="about" class="form-control" name="about" placeholder="About yourself" value="<?php echo $data['about']; ?>" >
                </div><!-- form group -->
            </div>
              
            </div><!-- row -->
            <div class="row row-sm">
            
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Height (cm): <span class="tx-danger">*</span></label>
                <input id="height" class="form-control" name="height" type="text" value="<?php echo $data['height']; ?>" required>
                </div><!-- form group -->
            </div><!-- col -->  
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Weight (kg): <span class="tx-danger">*</span></label>
                <input id="weight" class="form-control" name="weight" type="text" value="<?php echo $data['weight']; ?>" required>
                </div><!-- form group -->
            </div><!-- col -->  
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">No OKU: <span class="tx-danger">if applicable</span></label>
                <input id="nooku" class="form-control" name="nooku" type="text" value="<?php echo $data['nooku']; ?>" >
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">OKU Type: <span class="tx-danger">if applicable</span></label>
                <select name="okutype" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($oku = mysqli_fetch_array($all_oku,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $oku["oku_code"];?>"<?php if($oku["oku_code"]==$data['okutype']) echo 'selected="selected"'; ?>><?php echo $oku["oku_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->

          
            </div><!-- row -->
            <?php } ?>
            <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_personal"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                    <button type="button" onclick="window.location.href = 'tab_parent.php'" class="btn btn-lg btn-secondary waves-effect waves-light">
                        Seterusnya&nbsp;&nbsp;<i class="far fa-arrow-alt-circle-right"></i>
                    </button>
                </div>
            
            </form>

       
            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
     
  </div><!-- row -->
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
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>

    <script src="../js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

        // Toggle Switches
        $('.az-toggle').on('click', function(){
          $(this).toggleClass('on');
        })

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
        $('#ssnMask').mask('999-99-9999');

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

        // AmazeUI Datetimepicker
        $('#datetimepicker').datetimepicker({
          format: 'yyyy-mm-dd hh:ii',
          autoclose: true
        });

        // jQuery Simple DateTimePicker
        $('#datetimepicker2').appendDtpicker({
          closeOnSelected: true,
          onInit: function(handler) {
            var picker = handler.getPicker();
            $(picker).addClass('az-datetimepicker');
          }
        });

        new Picker(document.querySelector('#datetimepicker3'), {
          headers: true,
          format: 'MMMM DD, YYYY HH:mm',
          text: {
            title: 'Pick a Date and Time',
            year: 'Year',
            month: 'Month',
            day: 'Day',
            hour: 'Hour',
            minute: 'Minute'
          },
        });


        $(document).ready(function(){
          $('.select2').select2({
            placeholder: 'Choose one',
            searchInputPlaceholder: 'Search'
          });

          $('.select2-no-search').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Choose one'
          });
        });

        $('.rangeslider1').ionRangeSlider();

        $('.rangeslider2').ionRangeSlider({
            min: 100,
            max: 1000,
            from: 550
        });

        $('.rangeslider3').ionRangeSlider({
            type: 'double',
            grid: true,
            min: 0,
            max: 1000,
            from: 200,
            to: 800,
            prefix: '$'
        });

        $('.rangeslider4').ionRangeSlider({
            type: 'double',
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500,
            step: 250
        });

      });
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
