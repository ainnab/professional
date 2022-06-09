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
        <div class="az-content-header-top">

          <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">Voucher/Request a voucher</h2>
          </div>
        </div><!-- az-content-body-title -->
      </div><!-- az-content-header -->
      <div class="row row-xs wd-xl-80p">
        <div class="col-sm-6 col-md-3"><button class="btn btn-success btn-with-icon btn-block" onclick="location.href='manage_voucher.php'"><i class="typcn typcn-edit"></i>REQUEST NEW VOUCHER</button></div>


        </div>

    
      <div class="az-content-body">
        <div class="row row-sm">
      <div class="col-xl-12 mg-t-15 mg-t-20">
            <div class="card">
              <div class="card-header">
  
                        <div class="row row-xs">
                       
                       
                      </div><!-- row -->
                      <hr size="mg-y-30">

              </div><!-- card-header -->

                     

              <div class="card-body"> <p class=" mg-b-0"> VOUCHER</p><br>
                <table id="example2" class="table">
              <thead>
                <tr>
                  <th class="wd-10p">NO</th>
                  <th class="wd-15p">Voucher</th>
                  <th class="wd-15p">Voucher for</th>
                   <th class="wd-15p">Date</th>
                  <th class="wd-15p">Terms</th>
                  <th class="wd-15p">#Courses</th>
                  <th class="wd-15p">Redemptions</th>
                  <th class="wd-15p">Expires</th>
                   <th class="wd-15p">Status</th>
                   <th class="wd-15p">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                
  
                  <?php
$i = 0;

                    $sql3="SELECT * FROM `voucher` where username='$login_session' ";

                    $app=mysqli_query($dbconfig2,$sql3);



                    while($row1=mysqli_fetch_array($app,MYSQLI_ASSOC)){


$i++;
                                    $id = $row1['id'];
                      $voucher_name = $row1['voucher_name'];
                        $voucher_type = $row1['voucher_type'];
                     $amount_off = $row1['amount_off'];
                      $discount = $row1['discount'];
                      $redem = $row1['Limit_redem'];
                         $total = $row1['Limit_total'];
                     
                       $time_limit = $row1['time_limit'];
                               $course = $row1['course'];
                               $date = $row1['date_redeem'];
                                $status = $row1['status'];
      
                    ?>  


                 
               
                <tr>
                 <td ></td>
                  <td><?php echo  $voucher_name;?></td>
                  <td></td>
                  <td><?php echo  $date;?></td>
                  <td><?php echo $discount;?><?php echo $amount_off;?></td>
                  <td><?php echo  $course;?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <?php if($status!=='APPROVED'){ ?> <td><a href="delete_voucher.php?id=<?php echo $row1['id']?>&deletewrk=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="submit" name="deletewrk"  class="btn btn-primary btn-md">Delete</button></a></td><?php }

                  ?>
              
                  
                </tr>
<?php } ?>
              </tbody>
            </table>
              </div>
  </div>
              <!-- card-body -->



                           <!--div class="col-12">
                              <a href="" class="btn btn-purple" style="float">EXPORT</a>
                            <a href="" class="btn btn-purple" style="float">PRINT</a>
                          </div-->

            </div><!-- card -->
          </div><!-- col -->
           </div>
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
