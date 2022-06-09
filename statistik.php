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
           <h2 class="az-content-title mg-b-5 mg-b-lg-8">Course Information</h2>
           
          </div>
        </div><!-- az-content-body-title -->
      </div><!-- az-content-header -->
      
    
      <div class="az-content-body">


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
              
              <div class="col-md-12 text-center">
                <a href="manager_totalstud.php">
   <input type="button" class="btn btn-purple" float="center" value="EXPORT" />
</a>
                
                </div>
            </div><!-- card -->
          </div><!-- col -->
     

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
        text: 'Number of enrolled student in all courses by categories'
    },
    subtitle: {
        text: 'For: Last 30 Days'
    },
    xAxis: [{
        categories: [
    <?php 

date_default_timezone_set("asia/kuala_lumpur");
    $dateToday = date('Y-m-d h:i:s');
    $select = date('m/d/Y',strtotime('+30 days',strtotime($dateToday)));
   
  //$sqla = "SELECT id, name FROM mdl_course_categories WHERE visible = '1' AND parent = '0' ORDER BY name ASC "; //first quering all the parent cats
  $sqla="SELECT u.firstname,u.lastname,cc.name,cc.path,u.username,cc.id FROM `mdl_course_categories` as cc inner join mdl_context as cnt on cnt.instanceid=cc.id inner join mdl_role_assignments as ra on ra.contextid=cnt.id inner join mdl_role as r on r.id=ra.roleid inner join mdl_user as u on u.id=ra.userid where cnt.contextlevel='40' and cc.parent='0' and u.username='$login_session' ";

$mysqla = mysqli_query($dbconfig,$sqla);
while($parent = mysqli_fetch_array($mysqla)) {

  $sqlb="SELECT distinct c.fullname,ct.name ,ct.path,ct.visible,FROM_UNIXTIME(c.startdate) as startdate  FROM mdl_course_categories ct JOIN mdl_course_categories basecat ON basecat.id = ct.id JOIN mdl_course c ON c.category = ct.id join mdl_context as cnt on cnt.instanceid=ct.id WHERE  ct.visible = '1' AND ct.path LIKE '/".$parent["id"]."/%'  ";



$mysqlb = mysqli_query($dbconfig,$sqlb);
while($var = mysqli_fetch_array($mysqlb)) {
  $path = explode("/", $var["path"]);
$visible= $var['visible'];
//$course_name= $var['fullname'];
$stud="SELECT count(distinct u.username) as username ,cats.path,c.fullname,cats.name ,ra.roleid,DATE_FORMAT(FROM_UNIXTIME(ue.timestart), '%M') as MONTH FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid join mdl_user_enrolments as ue on ue.userid=u.id JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='5' and c.fullname='".$var["fullname"]."'";


//$stud="SELECT distinct cats.path,c.id,c.fullname,count(distinct us.username) as student,MONTH(FROM_UNIXTIME(ue.timestart)) AS 'Month' FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS tra ON tra.contextid = ctx.id join mdl_user as us on us.id=tra.userid join mdl_user_enrolments as ue on ue.userid=us.id JOIN mdl_course_categories AS cats ON c.category = cats.id WHERE  tra.roleid=5 and c.fullname='".$var["fullname"]."' GROUP BY MONTH(FROM_UNIXTIME(ue.timestart))";


$sqlst = mysqli_query($dbconfig,$stud);
$co = mysqli_fetch_array($sqlst,MYSQLI_ASSOC);

$student=$co['username'];
$course=$co['fullname'];

?>

'<?php echo $course?>', 
              



<?php 
if(count($path) > 2) {
$temp = array_shift($path); //don't need the parent cat
$temp = array_pop($path); //don't need the current cat either



foreach($path as $ids) {
$nextsql = "SELECT cc.name,cc.id FROM mdl_course_categories as cc WHERE cc.id = '$ids'  ";

$name = mysqli_fetch_array(mysqli_query($dbconfig,$nextsql ));

 $name['name'].'/';




$test="SELECT distinct u.username ,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid=5  and cats.id='$ids' ";


  //$rest=mysqli_query($dbconfig,$test);
  //echo $sql_query;
$name1 = mysqli_fetch_array(mysqli_query($dbconfig,$test));
//echo $name1["fullname"].'/';
}
}
//echo $var["name"]."</option>";
}}
?>
],


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
            text: 'Total Student',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: '{value}',
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
        name: 'Total Student',
        type: 'column',
        yAxis: 1,
        data: [
      <?php
        


  //$sqla = "SELECT id, name FROM mdl_course_categories WHERE visible = '1' AND parent = '0' ORDER BY name ASC "; //first quering all the parent cats
  $sqla="SELECT u.firstname,u.lastname,cc.name,cc.path,u.username,cc.id FROM `mdl_course_categories` as cc inner join mdl_context as cnt on cnt.instanceid=cc.id inner join mdl_role_assignments as ra on ra.contextid=cnt.id inner join mdl_role as r on r.id=ra.roleid inner join mdl_user as u on u.id=ra.userid where cnt.contextlevel='40' and cc.parent='0' and u.username='$login_session' ";

$mysqla = mysqli_query($dbconfig,$sqla);
while($parent = mysqli_fetch_array($mysqla)) {

  $sqlb="SELECT distinct c.fullname,ct.name ,ct.path,ct.visible,FROM_UNIXTIME(c.startdate) as startdate  FROM mdl_course_categories ct JOIN mdl_course_categories basecat ON basecat.id = ct.id JOIN mdl_course c ON c.category = ct.id join mdl_context as cnt on cnt.instanceid=ct.id WHERE  ct.visible = '1' AND ct.path LIKE '/".$parent["id"]."/%'  ";



$mysqlb = mysqli_query($dbconfig,$sqlb);
while($var = mysqli_fetch_array($mysqlb)) {
  $path = explode("/", $var["path"]);
$visible= $var['visible'];
//$course_name= $var['fullname'];
$stud="SELECT count(distinct u.username) as username FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid join mdl_user_enrolments as ue on ue.userid=u.id JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid='5' and c.fullname='".$var["fullname"]."'";


//$stud="SELECT distinct cats.path,c.id,c.fullname,count(distinct us.username) as student,MONTH(FROM_UNIXTIME(ue.timestart)) AS 'Month' FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS tra ON tra.contextid = ctx.id join mdl_user as us on us.id=tra.userid join mdl_user_enrolments as ue on ue.userid=us.id JOIN mdl_course_categories AS cats ON c.category = cats.id WHERE  tra.roleid=5 and c.fullname='".$var["fullname"]."' GROUP BY MONTH(FROM_UNIXTIME(ue.timestart))";


$sqlst = mysqli_query($dbconfig,$stud);
$co = mysqli_fetch_array($sqlst,MYSQLI_ASSOC);

$student=$co['username'];
//$course=$co['fullname'];

?>
<?php echo "[";?>'<?php echo $select; ?>',
  <?php echo $student; ?>,<?php echo "],";?>
              



<?php 
if(count($path) > 2) {
$temp = array_shift($path); //don't need the parent cat
$temp = array_pop($path); //don't need the current cat either



foreach($path as $ids) {
$nextsql = "SELECT cc.name,cc.id FROM mdl_course_categories as cc WHERE cc.id = '$ids'  ";

$name = mysqli_fetch_array(mysqli_query($dbconfig,$nextsql ));

 $name['name'].'/';




$test="SELECT distinct u.username ,c.fullname,cats.name ,ra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS ra ON ra.contextid = ctx.id join mdl_user as u on u.id=ra.userid JOIN mdl_course_categories AS cats ON c.category = cats.id where ra.roleid=5  and cats.id='$ids' ";


  //$rest=mysqli_query($dbconfig,$test);
  //echo $sql_query;
$name1 = mysqli_fetch_array(mysqli_query($dbconfig,$test));
//echo $name1["fullname"].'/';
}
}
//echo $var["name"]."</option>";
}}
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
