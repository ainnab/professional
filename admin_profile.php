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

    <title>ILMU+</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">
<?php
session_start();
include_once 'config.php';

if(isset($_SESSION['username']))
{
  $login_session=$_SESSION['username'];

  /*$sql_query="SELECT * from mdl_user  WHERE username = '$login_session' ";
  $res=mysqli_query($dbconfig,$sql_query);
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $username = $userRow['username'];*/

    /*$sql_query="select * from mdl_user

inner join mdl_role_assignments on mdl_role_assignments.userid=mdl_user.id
inner join mdl_role on mdl_role.id = mdl_role_assignments.roleid

where mdl_user.username = '$login_session' ";*/

 $sql_query="SELECT DISTINCT* FROM `mdl_config_log` as cl inner join mdl_user as u on u.id=cl.userid WHERE cl.name='siteadmins' and u.username='$login_session'  ";

  $res=mysqli_query($dbconfig,$sql_query);
  //echo $sql_query;
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $username = $userRow['username'];
  $userId = $userRow['userid'];
  //$userRole = $userRow['roleid'];
  $name = $userRow['firstname'];
  $lastname = $userRow['lastname'];
  $role = $userRow['name'];
  $email = $userRow['email'];
  $institution = $userRow['institution'];
  //$inst_id = $userRow['inst_id'];
?>
  </head>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">
  <?php include 'admin_menu.php';?>
    <?php include 'topmenu.php';?>
      
      <div class="az-content az-content-profile">
        <div class="row">
          <div class="col-12">
            <div class="card">
        <div class="az-content-body az-content-body-contacts">
            <div class="container mn-ht-100p">
              
              <div class="az-content-left az-content-left-profile">
      
                <div class="az-profile-overview">
                  <div class="az-img-user">
                  
                  </div><!-- az-img-user -->
                  <div class="d-flex justify-content-between mg-b-20">
                    <div>
                      <h5 class="az-profile-name"><?php echo $name?> <?php echo $lastname?></h5>
                      <p class="az-profile-name-text"><?php echo $role?></p>
                      <p class="az-profile-name-text"><?php echo $institution?></p>
                    </div>
                    
                  </div>
      
                  
      
                </div><!-- az-profile-overview -->
      
              </div><!-- az-content-left -->
              <div class="az-content-body az-content-body-profile">

      
                <div class="az-profile-body">
      
                 
      
      
                  <div class="row">
                    <div class="col-md-7 col-xl-8">
                    <div class="az-content-label tx-13 mg-b-25">Profile</div>
                      <div class="az-profile-contact-list">
                        <div class="media">
                          <div class="media-icon"><i class="icon ion-md-phone-portrait"></i></div>
                          <div class="media-body">
                            <span>First Name</span>
                            <div><?php echo $name?> <?php echo $lastname?></div>
                          </div><!-- media-body -->
                        </div><!-- media -->
                        <!--div class="media">
                          <div class="media-icon"><i class="icon ion-md-phone-portrait"></i></div>
                          <div class="media-body">
                            <span>Surname</span>
                            <div>White</div>
                          </div><!-- media-body -->
                        <!--/div--><!-- media -->
                        <div class="media">
                          <div class="media-icon"><i class="icon ion-md-locate"></i></div>
                          <div class="media-body">
                            <span>Role</span>
                            <div><?php echo $role?></div>
                          </div><!-- media-body -->
                        </div><!-- media -->
                        <div class="media">
                          <div class="media-icon"><i class="icon ion-md-locate"></i></div>
                          <div class="media-body">
                            <span>Institution</span>
                            <div><?php echo $institution?></div>
                          </div><!-- media-body -->
                        </div><!-- media -->
                      </div><!-- az-profile-contact-list -->
                    </div><!-- col -->
                    <div class="col-md-5 col-xl-4 mg-t-40 mg-md-t-0">
                      <div class="az-content-label tx-13 mg-b-25">Contact Information</div>
                      <div class="az-profile-contact-list">
                        <div class="media">
                          <div class="media-icon"><i class="icon ion-md-phone-portrait"></i></div>
                          <div class="media-body">
                            <span>Mobile</span>
                            <div>(+63) 123 4567 890</div>
                          </div><!-- media-body -->
                        </div><!-- media -->
                        <div class="media">
                          <div class="media-icon"><i class="icon ion-logo-slack"></i></div>
                          <div class="media-body">
                            <span>Email</span>
                            <div><?php echo $email?></div>
                          </div><!-- media-body -->
                        </div><!-- media -->
                        
                      </div><!-- az-profile-contact-list -->
                    </div><!-- col -->
                  </div><!-- row -->
      
                  <div class="mg-b-20"></div>
      
                </div><!-- az-profile-body -->
              </div><!-- az-content-body -->
            </div><!-- container -->
          </div><!-- az-content -->
        <!-- row -->
      </div><!-- az-content-body -->
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy;ILMU + DEVELOPED BY UMP ADVANCED</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="lib/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="lib/chart.js/Chart.bundle.min.js"></script>

    <script src="js/azia.js"></script>
    <script src="js/dashboard.sampledata.js"></script>
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
        });

        new PerfectScrollbar('.az-sidebar-body', {
          suppressScrollX: true
        });

        /* ----------------------------------- */
        /* Dashboard content */


        $.plot('#flotChart1', [{
            data: dashData1,
            color: '#6f42c1'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: { show: false }
        });

        $.plot('#flotChart2', [{
            data: dashData2,
            color: '#007bff'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: { show: false }
        });

        $.plot('#flotChart3', [{
            data: dashData3,
            color: '#f10075'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: { show: false }
        });

        $.plot('#flotChart4', [{
            data: dashData4,
            color: '#00cccc'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: { show: false }
        });

        $.plot('#flotChart5', [{
            data: dashData2,
            color: '#00cccc'
          },{
            data: dashData3,
            color: '#007bff'
          },{
            data: dashData4,
            color: '#f10075'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: false,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 20
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: {
            show: true,
            color: 'rgba(0,0,0,.16)',
            ticks: [
              [0, ''],
              [10, '<span>Nov</span><span>05</span>'],
              [20, '<span>Nov</span><span>10</span>'],
              [30, '<span>Nov</span><span>15</span>'],
              [40, '<span>Nov</span><span>18</span>'],
              [50, '<span>Nov</span><span>22</span>'],
              [60, '<span>Nov</span><span>26</span>'],
              [70, '<span>Nov</span><span>30</span>'],
            ]
          }
        });

        $.plot('#flotChart6', [{
            data: dashData2,
            color: '#6f42c1'
          },{
            data: dashData3,
            color: '#007bff'
          },{
            data: dashData4,
            color: '#00cccc'
          }], {
          series: {
            shadowSize: 0,
            stack: true,
            bars: {
              show: true,
              lineWidth: 0,
              fill: 0.85
              //fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 20
          },
          yaxis: {
            show: false,
            min: 0,
            max: 100
          },
          xaxis: {
            show: true,
            color: 'rgba(0,0,0,.16)',
            ticks: [
              [0, ''],
              [10, '<span>Nov</span><span>05</span>'],
              [20, '<span>Nov</span><span>10</span>'],
              [30, '<span>Nov</span><span>15</span>'],
              [40, '<span>Nov</span><span>18</span>'],
              [50, '<span>Nov</span><span>22</span>'],
              [60, '<span>Nov</span><span>26</span>'],
              [70, '<span>Nov</span><span>30</span>'],
            ]
          }
        });

        $('#vmap').vectorMap({
          map: 'world_en',
          showTooltip: true,
          backgroundColor: '#f8f9fa',
          color: '#ced4da',
          colors: {
            us: '#6610f2',
            gb: '#8b4bf3',
            ru: '#aa7df3',
            cn: '#c8aef4',
            au: '#dfd3f2'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderOpacity: .3,
          borderWidth: 3,
          borderColor: '#fff',
          hoverOpacity: .85
        });

      });
    </script>

<script>
  $(function(){
    'use strict'

    /** AREA CHART **/
    var ctx = document.getElementById('chartArea').getContext('2d');

    var gradient = ctx.createLinearGradient(0, 240, 0, 0);
    gradient.addColorStop(0, 'rgba(0,123,255,0)');
    gradient.addColorStop(1, 'rgba(0,123,255,.3)');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Oct 1', 'Oct 2', 'Oct 3', 'Oct 4', 'Oct 5', 'Oct 6', 'Oct 7', 'Oct 8', 'Oct 9', 'Oct 10'],
        datasets: [{
          data: [12, 15, 18, 40, 35, 38, 32, 20, 25],
          borderColor: '#007bff',
          borderWidth: 1,
          backgroundColor: gradient
        }]
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: false,
            labels: {
              display: false
            }
        },
        scales: {
          yAxes: [{
            display: false,
            ticks: {
              beginAtZero:true,
              fontSize: 10,
              max: 80
            }
          }],
          xAxes: [{
            ticks: {
              beginAtZero:true,
              fontSize: 11,
              fontFamily: 'Arial'
            }
          }]
        }
      }
    });

  });
</script>
  </body>
  <?php 
}
else {
  echo '<script>';  
  echo 'alert("Session expired. Please login again.")';
  //echo 'window.href("index.php")';
  echo 'window.location = "../apela.php"';
  echo '</script>';
}
?>
</html>
