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
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
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

    $sql_query="select * from mdl_user

inner join mdl_role_assignments on mdl_role_assignments.userid=mdl_user.id
inner join mdl_role on mdl_role.id = mdl_role_assignments.roleid

where mdl_user.username = '$login_session' ";

 $res=mysqli_query($dbconfig,$sql_query);
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $username = $userRow['username'];
  $userRole = $userRow['id'];
    $name = $userRow['firstname'];

?>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <?php include 'courseowner_main_menu.php';?>
    <div class="az-content az-content-dashboard-nine">
      <?php include 'header.php';?>
      <div class="az-content-header">
        <div class="az-content-header-top">
          <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">My Course / Sharing Ownership / Course Owner</h2>
          </div>
        </div><!-- az-content-body-title -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
        <div class="row row-sm">
    </div>
    </div><!-- az-content-header -->
      <div class="az-content-body">
        <div class="row row-sm">
      <div class="col-xl-12 mg-t-15 mg-t-20">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title tx-14 mg-b-5">View the sharing profit information for each courses</h6>
                <hr size="mg-y-30">
                         

              </div><!-- card-header -->

                      

              <div class="card-body">

              <div class="wd-lg-50p">
                <ul class="list-group wd-md-50p">
                  <li class="list-group-item d-flex align-items-center">
                    <div>
                      <h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Course Name</h6>
                      <span class="d-block tx-11 text-muted">Programming Technique II</span>
                      <br>
                      <h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Course Code</h6>
                      <span class="d-block tx-11 text-muted">BCS1023</span>
                    </div>
                  </li>
                </ul>
                <br>
             </div>

                <table id="example2" class="table">
              <thead>
                <tr>
                  <th class="wd-20p">Course Owner</th>
                  <th class="wd-25p">Ownership</th>
                  <th class="wd-20p">Remarks</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Zamri Osman</td>
                  <td>70</td>
                  <td>Lead the course content creation</td>
                  <td><select class="form-control select2-no-search">
                      <option label="Choose one"></option>
                      <option value="accept">Accept</option>
                      <option value="review">Need Review</option>
                      </select>
                  </td>
                </tr>
                <tr>
                  <td>Ahmad Afifi</td>
                  <td>30</td>
                  <td>Create Quiz 1. Assignment 1</td>
                  <td><select class="form-control select2-no-search">
                      <option label="Choose one"></option>
                      <option value="accept">Accept</option>
                      <option value="review">Need Review</option>
                      </select>
                  </td>
                </tr>
              </tbody>
            </table>
              </div><!-- card-body -->

                           <div class="col-12">
                            <a href="" class="btn btn-purple" style="float">ACCEPT</a>
                            <a href="courseowner_course.php" class="btn btn-purple" style="float">BACK</a>
                          </div>

            </div><!-- card -->
          </div><!-- col -->
           </div>
          </div><!-- az-content-header -->
     
      <?php include 'footer.php';?>
    </div><!-- az-content -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="../lib/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="../lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>

    <script src="../js/azia.js"></script>
    <script src="../js/dashboard.sampledata.js"></script>
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

        $('#example1').DataTable({
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#example2').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body><?php 
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
