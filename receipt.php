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
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">

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
	
	date_default_timezone_set("asia/kuala_lumpur");
	$dateToday = date('M d,Y');
	
	$payment_id = $_REQUEST['payment_id'];
	
	$sql_query2="SELECT ep.txn_id,cc.id as cat_id, c.id as course_id, FROM_UNIXTIME(ep.timeupdated) as purchase_date, ep.payment_status,c.fullname as item_name,u.firstname as stdFirst,u.lastname as stdLast FROM `mdl_enrol_paypal` as ep
				inner join mdl_course as c ON ep.courseid = c.id 
				inner join mdl_course_categories AS cc ON c.category = cc.id
        inner join mdl_user as u on u.id=ep.userid
				WHERE ep.txn_id = '$payment_id'";
	//echo $sql_query2;
	$res2=mysqli_query($dbconfig,$sql_query2);
	$userRow2=mysqli_fetch_array($res2,MYSQLI_ASSOC);
	$course_id = $userRow2['course_id'];
	//echo $course_id;
	$course_name = $userRow2['item_name'];
	$payment_id = $userRow2['txn_id'];
	$purchase_date = $userRow2['purchase_date'];
	$purchase_date =  date('M d,Y', strtotime($purchase_date));
	$payment_status = $userRow2['payment_status'];
  $stdFirst = $userRow2['stdFirst'];
  $stdLast = $userRow2['stdLast'];



	$payment_type = 'PAYPAL';
	
	$sql = "SELECT cost FROM `mdl_enrol` WHERE courseid = '$course_id' AND enrol = '$payment_type'";
	//echo $sql;
	$result=mysqli_query($dbconfig,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$cost = $row['cost'];

?>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <?php include 'main_menu.php';?>
    <div class="az-content az-content-dashboard-nine">
      <?php include 'topmenu.php';?>
      <div class="az-content-header">
        <!--div class="az-content-header-top">
          <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">Earnings</h2>
            <p class="mg-b-0">How much you can earn as Institution</p>
          </div>
        </div--><!-- az-content-body-title -->
      <!--/div><!-- az-content-header -->
      <div class="az-content-body">
        <!--div class="row row-lg"-->
		  <div class="row row-sm">
             <div class="col-xl-12 mg-t-15 mg-t-20">
               <div class="card">
				<div class="card-header">
					  <div class="row mg-t-20">
						<div class="col-lg">
						  <label class="tx-gray-600">Receipt - <?php echo $dateToday?></label>
						  <div class="billed-to">
							<h6>MOOC UMP</h6>
							<p>Universiti Malaysia Pahang <br>
							Pekan, Pahang<br>
							www.mooc-ump.com</p>
						  </div>
						</div><!-- col -->
						<div class="col-lg">
						  <p class="invoice-info-row">
							<span class="wd-50p">Date:</span>
							<span class="wd-50p"><?php echo $purchase_date?></span>
						  </p>
						  <p class="invoice-info-row">
							<span class="wd-50p">Payment #:</span>
							<span class="wd-50p"><?php echo $payment_id?></span>
						  </p>
						</div><!-- col -->
					  </div><!-- row -->
					  
					  <div class="row mg-t-20">
						<div class="col-lg">
						  <label class="tx-gray-600"><b>Paid to:</b> <?php echo $name?> <?php echo $lastname?></label>

						</div><!-- col -->
					  </div><!-- row -->
             <div class="row mg-t-20">
            <div class="col-lg">
              <label class="tx-gray-600"><b>Sold to:</b> <?php echo $stdFirst?> <?php echo $stdLast?></label>
              
            </div><!-- col -->

            </div><!-- row -->
 <div class="row mg-t-20">
            <div class="col-lg">
            <label class="tx-gray-600"><b>Course</b> <?php echo $course_name?> </label>
               
            </div><!-- col -->

            </div><!-- row -->
              

					  <div class="table-responsive mg-t-40">
						<table class="table table-invoice">
						  <thead>
							<tr>
							  <th class="wd-50p">Item</th>
							  <th class="wd-10p">Processed</th>
							  <th class="tx-center">Amount</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Payment as Institution in MOOC UMP</td>
							  <td class="tx-12"><?php echo $purchase_date?></td>
							  <td class="tx-center">RM <?php echo $cost?></td>
							</tr>
							<tr>
							  <td class="wd-50p"></td>
							  <td><b>Sub-Total:</b></td>
							  <td class="tx-center">RM <?php echo $cost?></td>
							</tr>
						   
						  </tbody>
						</table>
					  </div><!-- table-responsive -->
					</div><!-- card-body -->
				  </div><!-- card -->
			</div><!-- az-content-body -->
      </div>
           <!--/div-->
          </div><!-- az-content-header -->
     
      <?php include 'footer.php';?>
    </div><!-- az-content -->


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
