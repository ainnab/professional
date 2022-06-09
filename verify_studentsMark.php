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


  $course = $_REQUEST['id'];



$sql_query1="SELECT c.fullname,us.username,tra.roleid FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS tra ON tra.contextid = ctx.id join mdl_user as us on us.id=tra.userid where tra.userid ='$userId' and c.id='$course'";

  $res1=mysqli_query($dbconfig,$sql_query1);
  //echo $sql_query;
  $userRow1=mysqli_fetch_array($res1,MYSQLI_ASSOC);
  
  $courseName = $userRow1['fullname'];


  
        


       



?>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <?php include 'main_menu.php';?>
    <div class="az-content az-content-dashboard-nine">
      <?php include 'topmenu.php';?>
      <div class="az-content-header">
        <div class="az-content-header-top">
          <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">MY COURSE</h2>
          </div>
        </div><!-- az-content-body-title -->
      </div><!-- az-content-header -->
    
      <div class="az-content-body">
        <div class="row row-sm">
      <div class="col-xl-12 mg-t-15 mg-t-20">
            <div class="card">
              
 <form id="verify_marks" action="submit_marks.php" method="POST" enctype="multipart/form-data">
                      

              <div class="card-body">
               <div class=" ">
                <!--div class="form-group col-md-6">
                    <label><b>Programme </b></label>
                    <select name="program" id="program" class="form-control">
                        <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM program_master ";
                            $result4 = mysqli_query($dbconfig2, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['code'];
                                $pgName=strtolower($row4['name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                        <?php } ?>
                    </select>
                   
                    <span id="error_first" class="text-danger"></span>
                </div-->
                <!--div class="form-group col-md-6">
                    <label><b>Semester </b></label>
                    <select name="semester" id="semester" class="form-control">
                        <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql6 ="SELECT * FROM semester ";
                            $result6 = mysqli_query($dbconfig2, $sql6) or die("database error:". mysqli_error($dbconfig3));
                            while( $row6 = mysqli_fetch_assoc($result6) ) {
                                $pgCode=$row6['semester'];
                                $pgName=strtolower($row6['akademik_sesi']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                        <?php } ?>
                    </select>
                    
                </div-->
                

                <div class="form-group col-md-6">
                    <label><b>Course/Module </b></label>
                    <input class="form-control" type="text" name="stdName" value="<?php echo $courseName ; ?> ">
                    
                </div>


                  <div class="form-group col-md-6">
                    
                    <input class="form-control" type="text" name="id" value="<?php echo $course ; ?>" hidden>
                    
                </div>
            </div>




 <table id="example2" class="table">
              <thead>
                <tr>
                 
                  <th class="wd-20p">STUDENT NAME</th>
               
                  <th class="wd-15p">TOTAL MARKS</th>
                  <th class="wd-10p">STATUS</th>
                  

                  
                   
                  
                
                </tr>
              </thead>
               <?php
               //$cid = $_REQUEST['id'];


                $sql_query2="SELECT distinct u.id as studentid,u.firstname FROM mdl_course AS c LEFT JOIN mdl_context AS ctx ON c.id = ctx.instanceid JOIN mdl_role_assignments AS lra ON lra.contextid = ctx.id  join mdl_user as u on u.id=lra.userid WHERE lra.roleid=5 and c.id='$course'";
        //echo $sql_query2;
        $res2=mysqli_query($dbconfig,$sql_query2);
  while($userRow2=mysqli_fetch_array($res2,MYSQLI_ASSOC)){
       
         $student = $userRow2['studentid'];
       $studentName = $userRow2['firstname'];

        /**$sql_query5="SELECT  gi.itemname AS ItemName, ROUND(gg.finalgrade,2) AS FinalGrade FROM mdl_grade_items gi INNER JOIN mdl_grade_grades gg ON gi.id = gg.itemid INNER JOIN mdl_role_assignments ra ON gg.userid = ra.userid INNER JOIN mdl_context ct on ct.id = ra.contextid INNER JOIN mdl_course c ON c.id = ct.instanceid INNER JOIN mdl_user u ON u.id = ra.userid WHERE c.id = '$course' AND u.id = '$student' and ItemName is not null ";
         //echo $sql_query2;
        $res5=mysqli_query($dbconfig,$sql_query5);
      $userRow5=mysqli_fetch_array($res5,MYSQLI_ASSOC);
          //echo "TEST";
        $itemName = $userRow5['ItemName'];
    $grade = $userRow5['FinalGrade'];**/
         
                   
                  $sql_query3=" SELECT distinct round(g.finalgrade) AS finalgrade FROM mdl_user u JOIN mdl_grade_grades g ON g.userid = u.id JOIN mdl_grade_items gi ON g.itemid = gi.id JOIN mdl_course c ON c.id = gi.courseid Join mdl_customfield_data cd on cd.instanceid=c.id join mdl_customfield_field cf on cf.id=cd.fieldid WHERE u.id='$student' and cf.id='7' and c.id='$course' group by c.shortname ";
         //echo $sql_query2;
        $res3=mysqli_query($dbconfig,$sql_query3);
     $userRow3=mysqli_fetch_array($res3,MYSQLI_ASSOC);
          //echo "TEST";
        $totalgrade = $userRow3['finalgrade'];
                  
                 
       
      ?>
              <tbody>
                <tr> 
                  
                <td><input class="form-control" type="text" name="student[]" value="<?php echo $studentName  ; ?> " >
</td>
                  <td><input class="form-control" type="text" name="item[]" value="<?php echo $totalgrade  ; ?> " >
</td>
                 
                 <td></td>
                 
                
                 
                </tr>

                    
                   
           
              <?php } ?> 
              </tbody>
            </table>

















              </div><!-- card-body -->

    <!--div class="col-12">
                            <a href="" class="btn btn-purple" style="float">EXPORT</a>
                            <a href="" class="btn btn-purple" style="float">PRINT</a>
                          </div>

            </div><!-- card -->
             <div class="modal-footer">
            <button type="submit" class="btn btn-indigo">VERIFY</button>
            
          </div>
          </form> 
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
