 <?php
 include 'talum.php';
    session_start();

 if(isset($_SESSION['ic']))
{
  $ic=$_SESSION['ic'];


if(isset($_POST['id'])){
       if(!empty($_REQUEST['id'])) {
          foreach($_REQUEST['id'] as $ids){
            $idList[] = $ids;
            $ids= implode (',',$idList);


          }
        }}


  $id=$_REQUEST['id'];
  $stud_id=$_REQUEST['stud_id'];

 $recordA = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    while($dataA = mysqli_fetch_array($recordA)) { 
        $role = $dataA['role'];
   $agent=$dataA['stud_name']; 
   //$stud_id = $_REQUEST['id'];?>
<style>
img {
  width: 100%;
  height: auto;
}

</style>

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
    <html>

      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  </head>
  <body class="az-minimal">
<?php
                  include 'talum.php';

                  
                  $sql = "SELECT * FROM program_diploma where pg_code = '$id'";
                  $result = mysqli_query($dbconfig, $sql);

                    while($row = mysqli_fetch_array($result))
                          {
                               $program = $row['pg_name'];
                               // $date =$row['dateCreated'];
                               // $admission = $row['adsName'];
                               // $mode = $row ['mode'];
                               // $cert = $row['certificate'];


                             // $courseN = explode(',', $course);

                              

               ?>


    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.html" class="az-logo"><span></span>Admission</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span>Admission</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
        </div><!-- az-header-menu -->

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
        <!--  <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Application Information</h2>
          <p class="mg-b-0">Please complete all the information below.</p>
        </div>
        <!-- <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      <!-- az-content-header --> 

     <div class="az-content-body">
      <div class="row row-sm">
        <div class=" col-md-8 card card-dashboard-seven">
          <!-- <div class="col-md-8"> -->
          <div class="card-body">
      <div id="wrapper">

  <section class="bg-grey-50 padding-top-30">
    <div class="container">
      <div class="row">
        <div class="border-bottom-1 border-grey-300 padding-10">
          <!-- <ol class="breadcrumb"> -->
           
            
          <!--   <li class="active"> <?php echo strtoupper($program); ?></li> -->
          <!-- </ol> -->
        </div>
      </div>
    </div>
  </section>
  <section class="bg-grey-50 padding-top-50">
    <div class="container">
      <div class="row">
        <div class="col-md-12 padding-right-22">
          <ol class="breadcrumb">
          <legend><?php echo strtoupper($program); ?></legend>
        </ol>
      </div>
      </div>
    </div>
        <div class="container">
      <div class="row sidebar">
        <div class="col-md-8 leftside">


          
          

          

          

          <div id="quickAccess"></div>

          

          
            <legend class="p-t-5">Modules List</legend>

         <?php   $i = 0;

                  
 $query="select * from program_diploma where pg_code ='$id'";



                             $app=mysqli_query($dbconfig,$query);

                          while($row1=mysqli_fetch_array($app,MYSQLI_ASSOC)){


$i++;
                                    
                      $course = $row1['common_module'];
                    
$courseN = explode(',', $course);
                    
 foreach($courseN as $indx => $value){
      
                    ?> 
                
                
              
              <div class="post post-md">
                <div class="row">
                  <div class="col-md-4">
                    <div class="post-thumbnail">
                    <!--   <a href=""><img src="" alt="Module Cover"></a> -->
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="post-header">
                      <div class="post-title">COMMON MODULES
                        <h4>
                          <a href=""  ></a>
                        </h4>
                        <ul class="post-meta">
                       <li><span class="label label-warning"><i class="fa fa-bookmark" aria-hidden="true"></i> </span><?php echo $courseN[$indx];?></li>

                                                     <!--  <li><i class="fa fa-clock-o" aria-hidden="true"></i> 16 Hours</li>
                          
                                                      <li><i class="fa fa-barcode" aria-hidden="true"></i> HMP1604</li> -->
                                                  </ul>
                      </div>
                    </div>
                    <!-- <p class="more text_justify">No Synopsis Found</p> -->
                  </div>
                </div>
              </div><?php } ?>
              <br>
              <br>

            <?php
$i = 0;

                  
 $query="select * from program_diploma where pg_code ='$id'";



                             $app=mysqli_query($dbconfig,$query);

                          while($row1=mysqli_fetch_array($app,MYSQLI_ASSOC)){


$i++;
                                    
                      $course = $row1['core_module'];
                    
$courseN = explode(',', $course);
                    
 foreach($courseN as $indx => $value){
      
                    ?> 
              
              <div class="post post-md">
                <div class="row">
                  <div class="col-md-4">
                    <div class="post-thumbnail">
                  <!--     <a href=""><img src="" alt="Module Cover"></a> -->
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="post-header">
                      <div class="post-title">CORE MODULE
                        <h4>
                          <a href=""  ></a>
                        </h4>
                        <ul class="post-meta">
                          <li><span class="label label-warning"><i class="fa fa-bookmark" aria-hidden="true"></i> </span><?php echo $courseN[$indx];?></li>

                                                     <!--  <li><i class="fa fa-clock-o" aria-hidden="true"></i> 16 Hours</li>
                          
                                                      <li><i class="fa fa-barcode" aria-hidden="true"></i> HMP1604</li> -->
                                                  </ul>
                      </div>
                    </div>
                 <!--    <p class="more text_justify">No Synopsis Found</p> -->
                  </div>
                </div>
              </div><?php }  ?>


  </section>
</div>
</div>
</div>
<div class="col-md-4 padding-left-20 col-xl-4" >
  <div class="form-wrapper"></div>
    <div class="overlay" >
    </div>
       <div class="card card-dashboardseven">
       <!--  <img src="img/BUTTON-DEGREE.png" > -->
            <div class="card-body div4">

         <form action="save_personal.php" method="POST" enctype="multipart/form-data">
          <input type='hidden' name='code' value='<?php echo $id;?>' />
<input type='hidden' name='stud_id' value='<?php echo $stud_id;?>' />
        <input class="form-control"  name="namaProgram" value="<?php echo strtoupper($program); ?>" hidden>
        <b><div><?php echo strtoupper($program); ?></div></b><br>
        <b><div class="bold text-uppercase margin-top-35">Created:</b>
        <span class="font-size-13"> </span></div><br>
        <b><div class="bold text-uppercase margin-top-35">Admission Name:</b>
        <span class="font-size-13"></span></div><br>
        <b><div class="bold text-uppercase margin-top-35">Mode Of Admission:</b>
        <span class="font-size-13"></span></div><br>
        <b><div class="bold text-uppercase margin-top-35">Certificate Category:</b>
        <span class="font-size-13"></span></div><br>

        <!-- <a class="btn btn-block btn-primary margin-top-40" type="submit" name="enrol">Enrol Now</a> -->
        <input type="submit" name="enrol" value="Enrol" class="btn btn-az-primary btn-block">
      </div>
  </form>
<?php }}?>

              </div><!-- card-body --><br>
            </div><!-- card-portfolio -->
          </div><!-- media -->
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

    <div class="az-footer ht-40">
      <div class="container pd-t-0-f ht-100p">
        <span>&copy; 2022 All Rights Reserved. Design by UMP Advanced Sdn Bhd</span>
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
  <?php 
}}}
else {
  echo '<script>';  
  echo 'alert("Session expired. Please login again.")';
  //echo 'window.href("index.php")';
  echo 'window.location = "../apela.php"';
  echo '</script>';
}
?>
</html>
