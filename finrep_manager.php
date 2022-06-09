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
     <link href="lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">

  </head>
   <?php
session_start();
include_once 'config.php';

if(isset($_SESSION['username']))
{
 $login_session=$_SESSION['username'];



    $sql_query="SELECT u.username as username,u.firstname,u.lastname, u.email, cc.name as institution ,r.name as rolename, cc.id as inst_id, ra.roleid,ra.userid
        FROM `mdl_course_categories` as cc 
        inner join mdl_context as cnt on cnt.instanceid=cc.id 
        inner join mdl_role_assignments as ra on ra.contextid=cnt.id 
        inner join mdl_role as r on r.id=ra.roleid 
        inner join mdl_user as u on u.id=ra.userid 
        where u.username = '$login_session' ";

  $res=mysqli_query($dbconfig,$sql_query);
  //echo $sql_query;
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $username = $userRow['username'];
  $userId = $userRow['userid'];
  $userRole = $userRow['roleid'];
  $name = $userRow['firstname'];
  $lastname = $userRow['lastname'];
  $role = $userRow['rolename'];
  $email = $userRow['email'];
  $institution = $userRow['institution'];
  $inst_id = $userRow['inst_id'];
  echo $inst_id;
  $earn = 0;
  $sql_query1 = "SELECT e.cost as cost,ep.txn_id,cc.parent FROM `mdl_enrol_paypal` as ep
          inner join mdl_enrol as e ON e.courseid = ep.courseid
          inner join mdl_course as c ON ep.courseid = c.id 
          inner join mdl_course_categories AS cc ON c.category = cc.id
          WHERE cc.parent = '$inst_id' AND e.cost is not null";
  //echo $sql_query1;
  $res1=mysqli_query($dbconfig,$sql_query1);
  //$userRow1=mysqli_fetch_array($res1,MYSQLI_ASSOC);
  $enrol=mysqli_num_rows($res1);
  //$earn = $userRow1['cost'];
  //echo $earn;


?>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <?php include 'main_menu.php';?>
    <div class="az-content az-content-dashboard-nine">
       <?php include 'topmenu.php';?>
      <div class="az-content-header">
        <div class="az-content-header-top">

          <div>
           <h2 class="az-content-title mg-b-5 mg-b-lg-8">Earnings</h2>
            <p class="mg-b-0">How much you can earn as Institution</p>
          </div>
        </div><!-- az-content-body-title -->
      </div><!-- az-content-header -->
      
    
      <div class="az-content-body">
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-3">
           <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-purple"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <span>TOTAL EARNS</span>
                  <h6><?php 
          while($userRow1=mysqli_fetch_array($res1,MYSQLI_ASSOC)){
            $earn += $userRow1['cost'];
          }
          echo $earn;
          ?></h6>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart1" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
              </div>
               <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-primary"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <span>TOTAL ENROLLMENTS</span>
                  <h6><?php echo $enrol?></h6>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart2" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col-3 -->

</div>

<div class="az-content-body">
        <div class="row row-sm">
          <div class="col-xl-12 mg-t-15 mg-t-20">
            <div class="card">
              <div class="card-header">
        <div class="form-group">
                  <div class="row row-sm">
                    <div class="col-sm-9">
                      <div class="row row-md">
                        <div class="col-sm-4">
            <form id="myForm" method="POST" action="">
                          <select class="form-control select2-no-search" name="pay" id="pay" onchange="this.form.submit()" required>
                            <option label="Choose one"></option>
                            <option value="30">Last 30 Days</option>
                            <option value="60">Last 60 Days</option>
                            <option value="90">Last 90 Days</option>
                          </select>
              </form>
                        </div><!-- col -->
                      </div><!-- row -->
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- form-group -->
        <hr>
             
              </div><!-- card-header -->
        <?php 

          if(isset($_POST["pay"])) {
          $pay = $_POST['pay'];
          //echo $pay;
        ?>
              <div class="card" id="myDIV">
                <div class="card-body">
                  <div class="panel panel-primary">
           <div class="panel-heading"></div>
             <div class="panel-body">
               <figure class="highcharts-figure">
                <div id="container"></div>
              </figure>
              <!--div id="container"></div-->
            </div>
          </div>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
     
      <div class="col-xl-12 mg-t-15 mg-t-20" id="myDIV">
       
            <div class="card">
              <div class="card-header">
                <h6 class="card-title tx-14 mg-b-5">Payment Record as Institution</h6>
                <p class="tx-gray-600 mg-b-0">Details of payment record from the MOOC UMP according to the agreed profit percentage </p>
              </div><!-- card-header -->
              <div class="card-body">
               
      <hr>
      <div class="row row-xs wd-xl-80p">
        <div class="col-sm-6 col-md-3"><a href="payment_by_institution.php"><button class="btn btn-outline-indigo btn-block">SEE ALL</button></a></div>
        </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
       <?php } ?>
          </div><!-- col -->
     
           </div>
          </div><!-- az-content-header -->

     
      <?php include 'footer.php';?>
    

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="lib/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="js/azia.js"></script>
    <script src="js/dashboard.sampledata.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
 <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
  <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
  <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
  <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
  <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
  <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
  <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
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
         
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
             //responsive : true,
          }
        });

         

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
 <script>

Highcharts.chart('container', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Total Earning & Enrollments'
    },
    subtitle: {
        text: 'For: Last 30 Days'
    },
    xAxis: [{
        categories: [
    <?php 
    date_default_timezone_set("asia/kuala_lumpur");
    $dateToday = date('Y-m-d h:i:s');
    $select = date('m/d/Y',strtotime('+30 days',strtotime($dateToday)))
    
    ?>
    '<?php echo $select;?>'],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Total Enrollments',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Total Earns (RM)',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 100,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Total Earns',
        type: 'column',
        yAxis: 1,
        data: [
      <?php
        //$query = mysqli_query($dbconfig,"SELECT total_taken as total, lv_code FROM `hr_leave_ent` WHERE st_staff_id ='$user' AND year = '$curr_year' ");
        $query = mysqli_query($dbconfig,"SELECT ep.txn_id,cc.id as cat_id, c.id as course_id, FROM_UNIXTIME(ep.timeupdated) as purchase_date, ep.payment_status,ep.item_name FROM `mdl_enrol_paypal` as ep
              inner join mdl_course as c ON ep.courseid = c.id 
              inner join mdl_course_categories AS cc ON c.category = cc.id
              WHERE cc.parent = '$inst_id' AND DATE(FROM_UNIXTIME(ep.timeupdated)) >= DATE(NOW()) - INTERVAL '$pay' DAY");
       
        while ($row = mysqli_fetch_array($query)) {
          $course_id = $row['course_id'];
          $payment_type = 'PAYPAL';
          $query1="SELECT cost FROM `mdl_enrol` WHERE courseid = '$course_id' AND enrol = '$payment_type' ";
          //echo $sql_query;
          $res1=mysqli_query($dbconfig,$query1) or die ("Error Database");
          $userRow=mysqli_fetch_array($res1,MYSQLI_ASSOC);
          $cost = $userRow['cost'];
         
          ?>
          [ 
            <?php echo $cost; ?>,
          ],
          <?php
        }
        ?>
   
      ],
        tooltip: {
            valueSuffix: ''
        }


    }, {
        name: 'Total Enrollments',
        type: 'spline',
        data: [
      <?php
        //$query = mysqli_query($dbconfig,"SELECT total_taken as total, lv_code FROM `hr_leave_ent` WHERE st_staff_id ='$user' AND year = '$curr_year' ");
        $query = mysqli_query($dbconfig,"SELECT count(ep.txn_id),cc.id as cat_id, c.id as course_id, FROM_UNIXTIME(ep.timeupdated) as purchase_date, ep.payment_status,ep.item_name FROM `mdl_enrol_paypal` as ep
              inner join mdl_course as c ON ep.courseid = c.id 
              inner join mdl_course_categories AS cc ON c.category = cc.id
              WHERE cc.parent = '$inst_id' 0");
       
        while ($row = mysqli_fetch_array($query)) {
          $course_id = $row['course_id'];
          $payment_type = 'PAYPAL';
          $query1="SELECT cost FROM `mdl_enrol` WHERE courseid = '$course_id' AND enrol = '$payment_type' ";
          //echo $sql_query;
          $res1=mysqli_query($dbconfig,$query1) or die ("Error Database");
          $userRow=mysqli_fetch_array($res1,MYSQLI_ASSOC);
          $cost = $userRow['cost'];
          $enrol=mysqli_num_rows($res1);
         
          ?>
          [ 
            <?php echo $enrol; ?>,
          ],
          <?php
        }
        ?>
   
      ],
        tooltip: {
            valueSuffix: ''
        }
    }]
});



function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

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
