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

  
  </head>  <?php
session_start();
include_once 'config.php';
error_reporting (E_ALL ^ E_NOTICE); 

if(isset($_SESSION['username']))
{
  $login_session=$_SESSION['username'];
    //$path_session=$_SESSION['path'];

  

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


$sql_query1="select * from student_mark
        where userid= '$userId' ";

  $res1=mysqli_query($dbconfig2,$sql_query1);
  //echo $sql_query;
  $userRow1=mysqli_fetch_array($res1,MYSQLI_ASSOC);
  $program = $userRow1['program'];
$matricNo = $userRow1['matric_no'];

?>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <?php include 'main_menu.php';?>
    <div class="az-content az-content-dashboard-nine">
      <?php include 'topmenu.php';?>
      <div class="az-content-header">
        <div class="az-content-header-top">
          <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8"></h2>
          </div>
        </div><!-- az-content-body-title -->
      </div><!-- az-content-header -->
    
<!-- partial -->
   
       
          <div class="az-content-body">
           
              
               
               <div class="row row-sm">
      <div class="col-xl-12 mg-t-15 mg-t-20">
         
 <div class="card">
   
              <div class="card-header">
                      <h4 class="card-title">RESULTS</h4>
                      <p class="card-description">
                        STUDENT RESULT
                      </p>

           
            <br>
              <form action="" name="form" method="post" class="form-horizontal">              
                <div class="row form-group">
                 <div class="form-group col-md-6">
                    <label><b>Semester </b></label>
                    <select name="semester" id="semester" class="form-control">
                        <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM semester ";
                            $result4 = mysqli_query($dbconfig2, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['semester'];
                                $pgName=strtolower($row4['akademik_sesi']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo $pgCode; ?> <?php echo ucwords($pgName); ?></option>
                        <?php } ?>
                    </select>
                  
 <small class="help-block form-text">Please select semester</small>
               
              
                <span class="input-group-btn">
                  <button class="btn btn-primary" name="search" type="search"><i class="fa fa-search"></i></button>
                </span>
            </div>
                 
                </div>                
              </form> 
                
       <?php               
            
                
            if(isset($_POST['search'])) {
              $sem = $_POST['semester'];

              $sql="SELECT * FROM student_mark WHERE userid='$userId'  AND semester='$sem'";                  
              $result=mysqli_query($dbconfig2,$sql);
              $userRow5=mysqli_fetch_array($result,MYSQLI_ASSOC);
   $username = $userRow5['point_no'];
            
                
                //echo $result;
            ?>
      
      <br><hr/><br>
      <form id="" action="" method="POST">
            <font size="2" face="Arial" ><h6> Nombor Pelajar/Student ID:<?php  echo $matricNo;?></h6>
          <h6> Nama/Name:<?php  echo $name;?> <?php  echo $lastname;?></h6>
           <h6> Program:<?php  echo $program;?></h6>
           <h6> Semester:<?php  echo $sem;?></h6>
            <div class="card-body">
              
          
              <div class="table-responsive">
                 <table id="example2" class="table"  >
              <thead>
                <tr>
                  <th class="wd-5p">No</th>
                  <th class="wd-15p">Course/Module</th>
                  <th class="wd-10p">Credit Hour</th>
                  <th class="wd-10p">Grade</th>
                  <th class="wd-10p">Points</th>
                  <th class="wd-10p">Points x credit hour</th>
                 
         
                  
                </tr>
              </thead>
              <tbody>

 <?php
$i = 0;

                  
 $query="select * from student_mark where userid='$userId' and semester='$sem'";



                             $app=mysqli_query($dbconfig2,$query);

                          while($row1=mysqli_fetch_array($app,MYSQLI_ASSOC)){


$i++;
                                    
                      $course = $row1['course'];
                    
                                    $credit = $row1['credit'];
                                     $grade = $row1['total_marks'];
                                     $sum += $row1['credit']; 
$point_no = $row1['point_no'];


                             
 $query1 = "SELECT * FROM student_cgpa WHERE userid='$userId'";

                             $app1=mysqli_query($dbconfig2,$query1);

                       $row2=mysqli_fetch_array($app1,MYSQLI_ASSOC);


                                    
                    $cgpaCurrent = $row2['cgpa'];
                      $total_credit = $row2['total_credit'];
                      $total_point = $row2['total_point'];


                    $query2 = "select sum(credit) as credit from student_mark where userid='$userId' and semester <='$sem'";

                             $app3=mysqli_query($dbconfig2,$query2);

                       $row3=mysqli_fetch_array($app3,MYSQLI_ASSOC);

                    $totalCredit = $row3['credit'];
                    
                                    
                                $query3 = "select round((sum(point_no*credit)),2) as totalPoint from student_mark where userid='$userId' and semester <='$sem'";

                             $app4=mysqli_query($dbconfig2,$query3);

                       $row4=mysqli_fetch_array($app4,MYSQLI_ASSOC);

                    $totalPoint = $row4['totalPoint'];     

      
                    ?> 
                
                  
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $course;?></td>
                  <td><?php echo $credit;?>
                  </td>
                
        
          <!--td><span class="badge badge-pill badge-primary">Free</span></td-->
           <td>  <?php if ($grade >=80 && $grade <= 100) { ?><label class="badge badge-warning">A</label> <?php } ?>
                      <?php if ($grade >=75 && $grade <=79) { ?><label class="badge badge-success">A-</label> <?php } ?>
                       <?php if ($grade >=70 && $grade <=74) { ?><label class="badge badge-success">B-</label> <?php } ?>
                        <?php if ($grade >=49 && $grade <=50) { ?><label class="badge badge-success">C</label> <?php } ?>
                          

             

           </td>
                      <td><?php echo $point_no;?>
            </td>


                        <td><?php echo $totalP= $credit*$point_no?>

 

                      </td>

                    
                 
                </tr>
                
                  <?php  

$sum_array+= $totalP ;



                 }
                 ?>
              </tbody>
                    
              
                        
              </tbody>
             
            </table><br><br><hr/><br>  

         <div class="card-body"> 

  <p> Grade Point Average: <?php  echo  round(($sum_array/$sum),2);?></p>


 <p> Cumulative Grade Point Average: <?php  echo  round(($totalPoint/$totalCredit),2) ;?>      </p> 
            </div><!-- card -->
         
            </div>
          </div>      
        <br><br>
      </form>
       <?php } ?>     
  
        </div>
          
    </div></div> </div></div>














             

     
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
    <script type="text/javascript">
      $('semester').change(function() {

                
                $('example2').hide();
                
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
