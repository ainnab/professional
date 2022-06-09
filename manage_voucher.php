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


    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
    <link href="lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
    <link href="lib/pickerjs/picker.min.css" rel="stylesheet">

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
  while($userRow=mysqli_fetch_array($res,MYSQLI_ASSOC)){
  $username = $userRow['username'];
  $userId = $userRow['userid'];
  $userRole = $userRow['roleid'];
  $name = $userRow['firstname'];
  $lastname = $userRow['lastname'];
  $role = $userRow['rolename'];
  $email = $userRow['email'];
  $institution = $userRow['institution'];
  $inst_id = $userRow['inst_id'];


?>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">
  <?php include 'main_menu.php';?>
    <div class="az-content az-content-dashboard-nine">
       <?php include 'topmenu.php';?>
      <div class="az-content-header">
        <div class="az-content-header-top">
          <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">VOUCHER /CREATE A VOUCHER</h2>
          </div>
        </div><!-- az-content-body-title -->
      </div><!-- az-content-header -->
  
      <div class="az-content-body">
        <div class="row row-sm">
      <div class="col-xl-12 mg-t-15 mg-t-20">
         
 <div class="card">
   
              <div class="card-header">
              
          <form id="voucher_form" action="save_voucher.php" method="POST" enctype="multipart/form-data">
            


             <div class="form-group mg-b-0">
                <label class="form-label">Voucher Name: <span class="tx-danger">*</span></label>
                <input type="text" name="name" class="form-control wd-sm-250"  required>
                 <input type="text" name="username" class="form-control wd-sm-250"  value="<?php echo $username; ?>" >
              </div><br>

         
          <p class="mg-b-20">Voucher type :</p>

 


            <div class="row mg-t-10">
            <div class="col-lg-3">
              <label class="rdiobox"  >
                <input  type="radio" id="chkYes" name="chk" value="1" >
                <span>Percentage discount</span>
              </label>
            </div><!-- col-3 -->
           
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <label class="rdiobox">
                <input  type="radio" id="chkYes1" name="chk" value="2" >
                <span>Fixed amount discount</span>
              </label>
            </div><!-- col-3 -->
         <div class="text" style="display:none;">
         <p>Percentage Discount
         <input type="text" name="per_discount" id="per_discount" maxlength="30">
         </p>
       </div>
       <div class="text1" style="display:none;">
     <p>Amount Off
    <input type="text" name="amount_off" id="amount_off" maxlength="30">
    </p>
    </div>
    </div><!-- row -->


<br>
         
          <p class="mg-b-20">Duration</p>

         
            <div class="d-sm-flex">
              <div id="slWrapper" class="parsley-select wd-sm-250">
                <select class="form-control select2" name="duration" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                  <option label="Choose one"></option>
                  <option value="Once">Once</option>
                  <option value="Multiple Months">Multiple Months</option>
                  <option value="Forever">Forever</option>
                  
                </select>
               
              </div>
             
            </div><!-- d-flex -->
<br>
             <div class="form-group mg-b-0">
                <label class="form-label">Redemption Limit <span class="tx-danger">*</span></label>
                <label class="ckbox mg-b-5">
                <input type="checkbox" name="checkbox" value="on" data-parsley-mincheck="2"
                data-parsley-class-handler="#cbWrapper2"
                data-parsley-errors-container="#cbErrorContainer2" ><span>Limit the data range when customer can redeem this voucher</span>
              </label>
              </div>

          
          <p class="mg-b-20">Redeem By</p>

          <div class="wd-250 mg-b-20">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                </div>
              </div>
               <input type="date" class="form-control " placeholder="MM/DD/YYYY" name="date_redeem">
            </div>
          </div>
<div class="form-group mg-b-0">
               
                <label class="ckbox mg-b-5">
                <input type="checkbox" name="checkbox2" value="1" data-parsley-mincheck="2"
                data-parsley-class-handler="#cbWrapper2"
                data-parsley-errors-container="#cbErrorContainer2" ><span>Limit the total number of times of this voucher can be redeemed</span>
              </label>
              </div>
<p>
    <input type="text" name="time" id="time" maxlength="30">time
  </p>


        
           <p class="mg-b-20">Active course applied</p>
            <div class="d-sm-flex">
              <div id="slWrapper" class="parsley-select wd-sm-250">
                <select class="form-control select2" name="course"data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                  <option label="Choose one"></option>
                   <?php
                            $sql4 = "SELECT distinct c.fullname as fullname,ct.name ,ct.visible,FROM_UNIXTIME(c.startdate) as startdate FROM mdl_course_categories ct JOIN mdl_course_categories basecat ON basecat.id = ct.id 
 JOIN mdl_course c ON c.category = ct.id join mdl_context as cnt on cnt.instanceid=ct.id WHERE  ct.visible = '1' AND ct.path LIKE '/".$userRow["inst_id"]."/%' ";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                               // $course=$row4['fullname'];
                                $course=$row4['fullname'];


                                echo "<option value='$course'> $course</option>";
                              } 
                            ?>
                  
                </select>
               
              </div>
             
            </div><!-- d-flex -->
            <div class="mg-t-20">
              <button type="submit" name="btn-submit" class="btn btn-az-primary pd-x-20" value="5">Validate Form</button>
            </div>
           </form>
          </div><!-- az-content-header -->
     </div></div>
      
    </div><!-- az-content -->
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
     <script src="lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
    <script src="lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
    <script src="lib/pickerjs/picker.min.js"></script>

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

$('#datetimepicker').datetimepicker({
          format: 'yyyy-mm-dd hh:ii',
          autoclose: true
        });
  


      $("input[name='chk']").click(function() {
              if ($("#chkYes").is(":checked")) {
                $(".text").show();
                $(".text1").hide();

              } else if ($("#chkYes1").is(":checked")) {
               $(".text1").show();
                $(".text").hide();
              }

else {
               
              }
      });
  

   

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body><?php 
}}
else {
  echo '<script>';  
  echo 'alert("Session expired. Please login again.")';
  //echo 'window.href("index.php")';
  echo 'window.location = "../apela.php"';
  echo '</script>';
}
?>
</html>
