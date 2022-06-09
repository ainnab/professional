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

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/morris.js/morris.css" rel="stylesheet">
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
   
    <?php
    session_start();
    if(!isset($_SESSION["ic"])) {
        header("Location: signin.php");
        exit();
    }
    ?>
  </head>

    <?php 
    include 'talum.php';
    $ic=$_SESSION['ic'];
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
   ?>

<?php while($data = mysqli_fetch_array($records)) { ?>
  <body class="az-body az-body-sidebar">
    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="index.html" class="az-logo">Admission</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="../img/faces/face1.jpg" alt=""></div>
        <div class="media-body">
          <h6>Applicant</h6>
          <span><?php echo $data['stud_name']; ?></span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item active show">
          <a href="dashboard2.php" class="nav-link"><i class="typcn typcn-clipboard"></i>Guideline</a>
          </li><!-- nav-item -->
         
          </li><!-- nav-item -->
      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->

    <div class="az-content az-content-dashboard-two">
      <div class="az-header">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
            <div class="az-header-message">
              <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="" class="new"><i class="typcn typcn-bell"></i></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                  <div class="media new">
                    <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                    <div class="media-body">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media new">
                    <div class="az-img-user online"><img src="../img/faces/face3.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="../img/faces/face1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <h6>Aziana Pechon</h6>
                  <span>Premium Member</span>
                </div><!-- az-header-profile -->

                <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Guidelines for Diploma and Foundation</h2>
          <p class="mg-b-0">Please read the guidelines carefully before continue with the application.</p>
        </div>
        
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card card-dashboard-seven">
          <div class="card-body">
            <div class="row row-sm mg-b-15 mg-sm-b-20">
            <div class="col-md-12 col-lg-12">
          
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Reminder!</strong> Please complete all the information before 30th June 2022. Incomplete information will not be accepted.
          </div><!-- alert -->
          <div class="alert alert-danger mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Alert!</strong> Application will be closed on 30th June 2022. 
          </div><!-- alert -->
        
        <p class="mg-b-20"></p>
            <?php } ?>
            <p><strong>Application for Direct Intake to UMP <a href="http://umpadvanced.ump.edu.my/newportalumpa/diploma_must" target="_blank"><b><u>Diploma</u></b></a> / <a href="http://umpadvanced.ump.edu.my/newportalumpa/foundation" target="_blank"><b><u>Foundation in Science and Technology</u></b></a> <a href="http://umpadvanced.ump.edu.my/newportalumpa/pre_diploma" target="_blank"></a> Programme through <a style="color:blue;"><i><b>'Masuk UMP Secara Terus' (MUST). </b></i></a></strong></p>
                
                <p>Please prepare certified scanned copies of the academic qualification documents <b>(Trial SPM/Actual SPM/O-Level/ICGSE etc.)</b> in PDF format to be uploaded during the online application process.
                </p>
            
                <hr/>
                <p><b>Entry requirements for the following programmes are:</b></p>
                    <ul><b><a style="color:blue;">Application for Diploma in Engineering Programmes (Study Duration: Less than Three (3) years)</a></b></ul> 
                        <ul><b>General requirements:</b></ul>
                        <ul>&nbsp;&nbsp;i. SPM/O-Level/Equivalent with minimum THREE (3) credits</ul>
                        <ul>&nbsp;&nbsp;ii. Credits in Bahasa Melayu and passed in History subject</ul> 
                        <p><ul><b>Specific requirement: </b></ul>
                        <ul>&nbsp;&nbsp;i. Minimum C grade in the following subjects</ul>
                        <ul> &nbsp;&nbsp;&nbsp;&nbsp;a) Mathematics</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Science/Technical/Vokasional</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;c) Passed in English language subject</ul></ul><br></p>
					
                    <ul><b><a style="color:blue;">Application for Diploma in Computer Science (Study Duration: Less than Three (3) years)</a></b></ul>
                    <ul><b>General requirements:</b></ul>
                        <ul>&nbsp;&nbsp;i. SPM/O-Level/Equivalent with minimum THREE (3) credits</ul>
                        <ul>&nbsp;&nbsp;ii. Credits in Bahasa Melayu and passed in History subject</ul> 
                        <p><ul><b>Specific requirement: </b></ul>
                        <ul>&nbsp;&nbsp;i. Minimum C grade in the following subjects</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;a) Mathematics,and </ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Any subjects</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;c) Passed in English language subject</ul></ul><br></p>

                    <ul><b><a style="color:blue;">Application for Diploma in Occupational, Safety & Health (Study Duration: Less than Three (3) years)</a></b></ul>
                    <ul><b>General requirements:</b></ul>
                        <ul>&nbsp;&nbsp;i. SPM/O-Level/Equivalent with minimum THREE (3) credits</ul>
                        <ul>&nbsp;&nbsp;ii. Credits in Bahasa Melayu and passed in History subject</ul> 
                        <p><ul><b>Specific requirement: </b></ul>
                        <ul>&nbsp;&nbsp;i. Minimum C grade in the following subjects</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp; a) Mathematics/ ONE (1) of science subjects(Physics/Biology/Chemistry/General Science),</ul> 
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Passed in any TWO (2) subjects</ul><br></p>

                        <hr/>

                    <ul><b><a style="color:blue;">Application for Foundation in Science and Technology (Study Duration: One (1) year)</a></b></ul>
                    <ul>Program specifically designed for dual degree programmes, UMP collaboration with German/China Universities, or for local programmes</ul>    
                    <ul><b>General requirements:</b></ul>
                        <ul>&nbsp;&nbsp;i. SPM/O-Level/Equivalent with minimum FIVE (5) credits</ul>
                        <ul>&nbsp;&nbsp;ii. Credits in Bahasa Melayu and passed in History subject</ul> 
                        <p><ul><b>Specific requirement: </b></ul>
                        <ul>&nbsp;&nbsp;i. Minimum C grade in the following subjects</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;a) Mathematics</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Any TWO (2) of science subjects(Physics/Biology/Chemistry/General Science or equivalent),</ul> 
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Credit in any other subject</ul><br></p>

                        <hr/>

                        

                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <div class="col-md mg-t-10 mg-md-t-0">
                        <label class="ckbox"><input type="checkbox" name="app" value="1" required><span>I agree to apply this programme.</span></label></br></div>
                        <div class="col-md mg-t-10 mg-md-t-0">
                        <button class="btn btn-az-primary btn-block" name="submit">Apply</button>
                        </div>
                        </form>

                        <?php include 'talum.php';
                        if(isset($_POST['submit'])){
                            $app = $_POST['app'];
                            $result2="UPDATE student SET";
                            $result2.= " app_option='$app'";
                            $result2.= " WHERE stud_ic='$ic'";
                            if(mysqli_query($dbconfig, $result2) == TRUE){
                                $result2 = mysqli_query($dbconfig, $result2);
                                echo "<script type='text/javascript'>alert('Thankyou! You have to complete the application.'); window.location.href = 'dashboard2.php';</script>";
                            } else{
                                echo "ERROR: Hush! Sorry $result. " 
                                    . mysqli_error($dbconfig);
                            }
                            mysqli_close($dbconfig);
                        } ?>
            
                </div></div>
            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
    </div>
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
