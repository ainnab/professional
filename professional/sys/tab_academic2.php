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

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

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
    $records3 = mysqli_query($dbconfig,"select * from qualification_info where stud_ic='$ic'"); 
    $sql31 = "SELECT * FROM `spm_subject`";
    $all_sub = mysqli_query($dbconfig,$sql31);
    $sql32 = "SELECT * FROM `spm_grade`";
    
    ?>


  <body class="az-body az-body-sidebar">
    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="index.html" class="az-logo">az<span>i</span>a</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="../img/faces/face1.jpg" alt=""></div>
        <div class="media-body">
          <h6>Applicant</h6>
          <span></span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item">
          <a href="dashboard2.php" class="nav-link"><i class="typcn typcn-clipboard"></i>Guideline</a>
          </li><!-- nav-item -->
          <li class="nav-item active show">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Admission</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="tab_application.php" class="nav-sub-link">Application</a></li>
              <li class="nav-sub-item"><a href="tab_personal.php" class="nav-sub-link">Personal Information</a></li>
              <li class="nav-sub-item"><a href="tab_parent.php" class="nav-sub-link">Parent Information</a></li>
              <li class="nav-sub-item active"><a href="tab_academic.php" class="nav-sub-link">Academic Information</a></li>
          
            </ul>
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
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Academic Information</h2>
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
            <p class="mg-b-20">Core Subjects</p>
            <form action="save_academic.php" method="post">     
            <?php while($data3 = mysqli_fetch_array($records3)) { ?>
<p class="mg-b-20"></p>
<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Subjects</th>
                  <th>Gred</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 <td>1</td>
                  <td width="200">BAHASA MELAYU</td>
                  <td>
                        
                        <select name="grade" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade = mysqli_query($dbconfig,$sql32); while ($gred = mysqli_fetch_array($all_grade,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred["spm_code"];?>"<?php if($gred["spm_code"]==$data3['gredspm1']) echo 'selected="selected"'; ?>><?php echo $gred["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>2</td>
                  <td>BAHASA INGGERIS</td>
                  <td>  
                        <select name="grade2" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade2 = mysqli_query($dbconfig,$sql32); while ($gred2 = mysqli_fetch_array($all_grade2,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred2["spm_code"];?>"<?php if($gred2["spm_code"]==$data3['kodspm2']) echo 'selected="selected"'; ?>><?php echo $gred2["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>3</td>
                  <td>MATEMATIK</td>
                  <td>
                        <select name="grade3" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade3 = mysqli_query($dbconfig,$sql32); while ($gred3 = mysqli_fetch_array($all_grade3,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred3["spm_code"];?>"<?php if($gred3["spm_code"]==$data3['kodspm3']) echo 'selected="selected"'; ?>><?php echo $gred3["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>4</td>
                  <td>SEJARAH</td>
                  <td>
                        <select name="grade3" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade3 = mysqli_query($dbconfig,$sql32); while ($gred3 = mysqli_fetch_array($all_grade3,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred3["spm_code"];?>"<?php if($gred3["spm_code"]==$data3['kodspm4']) echo 'selected="selected"'; ?>><?php echo $gred3["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>5</td>
                  <td>SAINS</td>
                  <td><select name="grade4" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade4 = mysqli_query($dbconfig,$sql32); while ($gred4 = mysqli_fetch_array($all_grade4,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred4["spm_code"];?>"<?php if($gred4["spm_code"]==$data3['kodspm5']) echo 'selected="selected"'; ?>><?php echo $gred4["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
          <p class="mg-b-30"></p>
          <p class="mg-b-20">Additional Subjects</p>
 <table class="table table-bordered" id="dynamic_field">  
    <tr>  
        <td>
            <select name="sub" class="form-control select2">
                <option>Select</option>
                <?php while ($sub = mysqli_fetch_array($all_sub,MYSQLI_ASSOC)):; ?><option value="<?php echo $sub["subject_code"];?>"><?php echo $sub["subject_name"];?></option><?php endwhile; ?>
            </select>
        </td>  
        <td>
            <select name="gred" class="form-control select2">
                <option>Select</option>
                <?php $all_grade5 = mysqli_query($dbconfig,$sql32); while ($gred5 = mysqli_fetch_array($all_grade5,MYSQLI_ASSOC)):; ?><option value="<?php echo $gred5["spm_code"];?>"><?php echo $gred5["spm_grade"];?></option><?php endwhile; ?>
            </select>
        </td>
        <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>  
    </tr>  
</table>
<?php } ?>
<input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block">
            </form>
       
            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
    <div class="col-md-2 col-xl-2 mg-t-2 mg-md-t-2">
            <div class="card card-dashboard-seven">
            <div class="card-body">
                <p>Complete</p>
                <div class="progress mg-b-20">
            <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
            </div></div></div>
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
    $(document).ready(function(){  
          var i=1;  
          $('#add').click(function(){  
              i++;  
              $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="sub" class="form-control select2"><option>Select</option><?php include 'talum.php'; $sql31 = "SELECT * FROM `spm_subject`"; $all_sub = mysqli_query($dbconfig,$sql31); while ($sub = mysqli_fetch_array($all_sub,MYSQLI_ASSOC)):; ?><option value="<?php echo $sub["subject_code"];?>"><?php echo $sub["subject_name"];?></option><?php endwhile; ?></select></td><td><select name="gred2" class="form-control select2"><option>Select</option><?php include 'talum.php'; $sql32 = "SELECT * FROM `spm_grade`"; $all_gred = mysqli_query($dbconfig,$sql32); while ($gred = mysqli_fetch_array($all_gred,MYSQLI_ASSOC)):; ?><option value="<?php echo $gred["spm_code"];?>"><?php echo $gred["spm_grade"];?></option><?php endwhile; ?></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
          });  
          $(document).on('click', '.btn_remove', function(){  
              var button_id = $(this).attr("id");   
              $('#row'+button_id+'').remove();  
          });  
        
    });  
    </script>

    <script>
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
