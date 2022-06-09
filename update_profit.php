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

    <title>ILMUPLUS</title>


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
  <?php include 'main_menu.php';?>
    <div class="az-content az-content-dashboard-nine">
       <?php include 'topmenu.php';?>
      <div class="az-content-header">
       
          <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">FINANCIAL- Profit Percentage</h2>
          </div>
        </div><!-- az-content-body-title -->
    
  
      <div class="az-content-body">
        <div class="row row-sm">

      <div class="col-xl-12 mg-t-15 mg-t-20">
         
 <div class="card">

              <div class="card-header">
              
       
 <form id="profit_form" action="save_profit_manager.php" method="POST" enctype="multipart/form-data" >

 <?php 

 $id = $_REQUEST['id'];



                    $sql3="SELECT * FROM profit_manager where ipd='$id' ";

                    $app=mysqli_query($dbconfig2,$sql3);



                    $row1=mysqli_fetch_array($app,MYSQLI_ASSOC);



                                    
                      $ipd = $row1['ipd'];
                        $contract = $row1['contract'];
                      $fakulti = $row1['fakulti'];
                      $institusi = $row1['institusi'];
                      $coordinator = $row1['coordinator'];
                         $courseowner= $row1['courseowner'];
                      $instructor= $row1['instructor'];
                       $date_today = $row1['date_today'];
                             //  $status = $row1['status'];

                       ?>
     <h2 class="az-content-title">Contract Information</h2>


<label>UNIVERSITI MALAYSIA PAHANG</label>


   <div class="form-group mg-b-0">
                <label class="form-label">Proposition set <span class="tx-danger">*</span></label>
                <input type="text" name="set" class="form-control wd-sm-250"  value=<?php echo $ipd?> readonly>
              </div>
<br>

             <p class="mg-b-20">Contract</p>
            <div class="d-sm-flex">
              <div id="slWrapper" class="parsley-select wd-sm-250">
                <select class="form-control select2"  name="contract" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" readonly>
                 
                   <?php
                            $sql4 = "SELECT *FROM contract_info  ";
                            $result4 = mysqli_query($dbconfig2, $sql4) or die("database error:". mysqli_error($dbconfig2));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $contract=$row4['contract_id'];
                               ?>
  <option value="<?php echo $row1['contract'];?>"><?php echo $row1['contract'];?></option>

                      
                              
                          <?php }  ?>
                  
                </select>
               
              </div>
             
            </div><!-- d-flex -->


 
            <br>

            <p class="mg-b-20">Fakulti</p>
            <div class="d-sm-flex">
              <div id="slWrapper" class="parsley-select wd-sm-250">
                <input type="text" name="fakulti" class="form-control wd-sm-250"  value=<?php echo $fakulti?> readonly>
                
               
              </div>
             
            </div><!-- d-flex -->


 
            <br>
          <div class="az-content-label mg-b-5">Institution</div>
        

          <div class="row row-sm">
           
            <div class="form-group mg-b-0">
              <div class="card card-body bg-indigo tx-white bd-0">
              <input class="form-control"   type="text" name="institusi" value=<?php echo $institusi?>>
              </div><!-- card -->

            </div><!-- col -->

          </div><!-- row -->
          <br>
          <div class="az-content-label mg-b-5">Coordinator</div>
          <div class="row row-sm">
           
            <div class="form-group mg-b-0">
              <div class="card card-body bg-indigo tx-white bd-0">
              <input class="form-control"    type="text" name="coordinator" value=<?php echo $coordinator?>>
              </div><!-- card -->

            </div><!-- col -->
            
          </div><!-- row -->
<br>
          <div class="az-content-label mg-b-5">Course Owner</div>
          <div class="row row-sm">
           
            <div class="form-group mg-b-0">
              <div class="card card-body bg-indigo tx-white bd-0">
              <input class="form-control"   required type="text" name="courseowner" value=<?php echo $courseowner?>>
              </div><!-- card -->

            </div><!-- col -->
            
          </div><!-- row -->
<br>
<div class="az-content-label mg-b-5">Instructor</div>
          <div class="row row-sm">
           
            <div class="form-group mg-b-0">
              <div class="card card-body bg-indigo tx-white bd-0">
              <input class="form-control"   required type="text" name="instructor" value=<?php echo $instructor?>>
              </div><!-- card -->

            </div><!-- col -->
            
          </div><!-- row -->
<br>
      

      
            <div class="mg-t-20">
              <button type="submit" name="btn_update" id="btn_update" class="btn btn-az-primary pd-x-20" value="5">UPDATE</button>
               
            </div>
           
          </div><!-- az-content-header -->
     </div></div></div>
      
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
// Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });
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
        $('#chkYes').on('click', function() {
  $(".text").show();
   $(".text1").hide();
});

$('#chkYes1').on('click', function() {
  $(".text").hide();
  $(".text1").show();
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
