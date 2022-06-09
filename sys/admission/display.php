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
  $sql9 = "SELECT * FROM `programselection`";
  $program = mysqli_query($dbconfig,$sql9);
  ?>

<?php while($data = mysqli_fetch_array($records)) { ?>
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
    <link href="../lib/lightslider/css/lightslider.min.css" rel="stylesheet">
    <link href="../lib/cryptofont/css/cryptofont.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body class="az-minimal">

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.html" class="az-logo"><span></span> Admission</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> Admission</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
         
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

    <div class="az-content pd-y-20">
      <div class="container">
        <div class="az-content-body">
          <div class="media media-dashboard-one mg-b-20">
            <div class="media-body">
              <div class="card card-minimal-two">
                <div class="card-header">
                  <div class="col-md-12 col-lg-12 col-xl-12">
                 <form action="save_personal.php" method="post">
            <h5>Program Information</h5><br>
            <?php while($namaProgram = mysqli_fetch_array($program)) { ?>
            <div class="row row-sm">
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                <label class="form-control-label">Program Name</label>
                <p class="card-text" ><?php echo $namaProgram['program_name']; ?></p>
                <input class="form-control" id="id" name="id" value="<?php echo $namaProgram['id']; ?>" hidden> 
                <input class="form-control" id="namaProgram" name="namaProgram" value="<?php echo $namaProgram['program_name']; ?>" hidden>
                </div><!-- form group -->
            </div><!-- col -->
          </div><br>
          <?php } ?>
            <h5>Personal Data</h5><br>
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Full Name:</label>
                <p class="card-text" ><?php echo $data['stud_name']; ?></p>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">IC / Passport Number:</label>
                <p class="card-text" ><?php echo $_SESSION['ic']; ?></p>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Gender:</label>
                <?php while ($gen = mysqli_fetch_array($all_gender,MYSQLI_ASSOC)):; ?>
                  <p class="card-text" ><?php if ($gen["gender_code"]==$data['gender']) {
                    echo $gen["gender_name"];
                  }?></p>
                <?php endwhile; ?>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-3">
                <div class="form-group">
                <label class="form-control-label">Date of Birth:</label>
                <p class="card-text" ><?php echo $data['dob']; ?></p>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">State Of Birth:</label>
                <?php while ($state = mysqli_fetch_array($all_state,MYSQLI_ASSOC)):; ?>
                  <p class="card-text" ><?php if ($state["state_code"]==$data['pob']) {
                    echo $state["state_name"];}?></p>
                <?php endwhile; ?>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Citizenship:</label>
                <?php while ($nation = mysqli_fetch_array($all_nation,MYSQLI_ASSOC)):; ?>
                  <p class="card-text" ><?php if ($nation["taraf_code"]==$data['stud_nation']) {
                    echo $nation["taraf_name"];}?></p>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Marital Status:</label>
                <?php while ($mar = mysqli_fetch_array($all_marital,MYSQLI_ASSOC)):; ?>
                    <p class="card-text" ><?php if ($mar["status_code"]==$data['marital']) {
                      echo $mar["status_name"];}?></p>
                <?php endwhile; ?>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Religion:</label>
                <?php while ($rel = mysqli_fetch_array($all_religion,MYSQLI_ASSOC)):; ?>
                <p class="card-text" ><?php if ($rel["religion_code"]==$data['stud_religion']) {
                    echo $rel["religion_name"];}?></p>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Ethnic:</label>
                <?php while ($race = mysqli_fetch_array($all_race,MYSQLI_ASSOC)):; ?>
                  <p class="card-text" ><?php if ($race["ptmk_race_code"]==$data['stud_race']) {
                      echo $race["race_name"];}?></p>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">About Me</label>
                <p class="card-text" ><?php echo $data['about']; ?></p>
                </div><!-- form group -->
            </div>

            </div><!-- row -->
            <div class="row row-sm">

            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Height (cm):</label>
                <p class="card-text" ><?php echo $data['height']; ?></p>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Weight (kg):</label>
                <p class="card-text" ><?php echo $data['weight']; ?></p>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">No OKU:</label>
                <p class="card-text" ><?php echo $data['nooku']; ?></p>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">OKU Type:</label>
                <?php while ($oku = mysqli_fetch_array($all_oku,MYSQLI_ASSOC)):; ?>
                  <p class="card-text" ><?php if ($oku["oku_code"]==$data['okutype']) {
                      echo $oku["oku_name"];}?></p>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            </div><!-- row -->
            <h5>Disclaimer</h5>
            <p>Disclaimer!!</p>
            <h5>Declaration</h5>
            <p>Declaration!!</p>
            <?php } ?>
              <input type="submit" name="updateEnrol" value="Enrol" class="btn btn-az-primary btn-block">
            </form>
              </div><!-- card-body -->
            </div><!-- card-portfolio -->
          </div><!-- media -->
        </div><!-- az-content-body -->
      </div>
    </div>
  </div>
    </div><!-- az-content -->

    <div class="az-footer ht-40">
      <div class="container pd-t-0-f ht-100p">
        <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
      </div><!-- container -->
    </div><!-- az-footer -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../lib/lightslider/js/lightslider.min.js"></script>

    <script src="../js/azia.js"></script>
    <script src="../js/chart.flot.sampledata.js"></script>
    <script>
      $(function(){
        'use strict'

        $.plot('#flotChart1', [{
            data: flotSampleData1,
            color: '#494c57'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: false,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0,
            aboveData: true
          },
          yaxis: {
            show: false,
            reserveSpace: false,
            min: 0,
            max: 120
          },
          xaxis: {
            show: true,
            color: 'rgba(102,16,242,.1)',
            reserveSpace: false,
            ticks: [[0,'1h'],[20,'12h'],[40,'1d'],[60,'1w'],[80,'1m']],
            font: {
              size: 11,
              weight: '700',
              family: 'Archivo,Arial,sans-serif',
              color: '#969dab'
            }
          }
        });

        $.plot('#flotChart2', [{
            data: flotSampleData2,
            color: '#6610f2'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0,
            aboveData: true
          },
          yaxis: {
            show: true,
            color: 'rgba(0,0,0,0.06)',
            ticks: [[0, ''], [15, '$6320'], [30, '$6340'], [45, '$6360'], [60, '$6380'], [75, '$6400']],
            min: 0,
            max: 80,
            font: {
              size: 11,
              weight: '600',
              family: 'Archivo, sans-serif',
              color: '#343640'
            }
          },
          xaxis: {
            show: true,
            color: 'rgba(0,0,0,0.1)',
            ticks: [[0, '06:00'], [20, '09:00'], [40, '12:00'], [60, '13:00'], [80, '16:00'], [100, '19:00'], [120, '21:00'], [140, '23:00']],
            font: {
              size: 11,
              family: 'Arial, sans-serif',
              color: '#70737c'
            },
            reserveSpace: false
          }
        });

        $.plot('#flotChart3', [{
            data: flotSampleData5,
            color: '#6610f2'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.06 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: true,
            min: 0,
            max: 120,
            color: 'rgba(0,0,0,0.08)'
          },
          xaxis: {
            show: true,
            color: 'rgba(0,0,0,0.08)'
          }
        });

        $.plot('#flotChart4', [{
            data: flotSampleData4,
            color: '#00cccc'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.06 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: true,
            min: 0,
            max: 120,
            color: 'rgba(0,0,0,0.08)' 
          },
          xaxis: {
            show: true,
            color: 'rgba(0,0,0,0.08)'
          }
        });

        $.plot('#flotChart5', [{
            data: flotSampleData3,
            color: '#007bff'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.06 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: true,
            min: 0,
            max: 120,
            color: 'rgba(0,0,0,0.08)'
          },
          xaxis: {
            show: true,
            color: 'rgba(0,0,0,0.08)'
          }
        });

        $('#navComplex').lightSlider({
          autoWidth: true,
          pager: false,
          slideMargin: 3,
          onSliderLoad: function(el) {
            $('.lSPrev').addClass('disabled');
          },
          onBeforeSlide: function(el) {
            var curSlide = el.getCurrentSlideCount();
            var totalSlide = el.getTotalSlideCount();

            if(curSlide === 1) {
              $('.lSPrev').addClass('disabled');
            } else {
              $('.lSPrev').removeClass('disabled');
            }

            if((totalSlide - 3) === curSlide) {
              $('.lSNext').addClass('disabled');
            } else {
              $('.lSNext').removeClass('disabled');
            }
          }
        });

        $('.az-nav-tabs .tab-link').on('click', function(e) {
          e.preventDefault();
          $(this).addClass('active');
          $(this).parent().siblings().find('.tab-link').removeClass('active');

          var target = $(this).attr('href');
          $(target).addClass('active');
          $(target).siblings().removeClass('active');
        })


      });
    </script>
  </body>
</html>
