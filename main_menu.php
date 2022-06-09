
<?php
          
          
          
           //if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            include_once 'config.php';
            
            $login_session=$_SESSION['username'];

  /*$sql_query="SELECT * from mdl_user  WHERE username = '$login_session' ";
  $res=mysqli_query($dbconfig,$sql_query);
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $username = $userRow['username'];*/

  /*$sql_query="select * from mdl_user

  inner join mdl_role_assignments on mdl_role_assignments.userid=mdl_user.id
  inner join mdl_role on mdl_role.id = mdl_role_assignments.roleid

  where mdl_user.username = '$login_session' ";*/
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
  
}

?>


<body class="az-body az-body-sidebar">
    <div class="az-sidebar">
      <div class="az-sidebar-header">
      <h2 style="color:blue;" >Admission</h2>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="img/faces/face1_1.jpg" alt=""></div>
        <div class="media-body">
                  <h6></h6>
          <span></span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          
         <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>DASHBOARD</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="main-dashboard.php" class="nav-sub-link">Dashboard</a></li>
            </ul> 
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>PROFILE</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="profile_user.php" class="nav-sub-link">My Profile</a></li>
            </ul> 
          </li><!-- nav-item -->

          <!-- nav-item --><?php if ($userRole=='1') { ?>
            
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>FINANCE REPORT</a>
             <ul class="nav-sub">
              <li class="nav-sub-item"><a href="finrep_manager.php" class="nav-sub-link">Earning</a></li>
              
              <li class="nav-sub-item"><a href="payout_reporting.php" class="nav-sub-link">Payout reporting</a></li>
             
              <li class="nav-sub-item"><a href="manager_voucher.php" class="nav-sub-link">Manage Voucher</a></li>
            

            </ul> 
          </li>
     <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>STATISTIC</a>
             <ul class="nav-sub">
              


 <li class="nav-sub-item"><a href="statistik.php" class="nav-sub-link">Student By Course</a></li>
 <li class="nav-sub-item"><a href="course_cat.php" class="nav-sub-link">Course By Category</a></li>
 <li class="nav-sub-item"><a href="courseactive_graph.php" class="nav-sub-link">Course Active Inactive</a></li>
 <li class="nav-sub-item"><a href="coordinator_graph.php" class="nav-sub-link">Coordinator</a></li>
 <li class="nav-sub-item"><a href="courseowner_graph.php" class="nav-sub-link">Course Owner Enrolment</a></li>
 <li class="nav-sub-item"><a href="teacher_graph.php" class="nav-sub-link">Instructor Enrolment</a></li>
            </ul> 
          </li>

           
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>PROFIT SETUP</a>
             <ul class="nav-sub">
              


 <li class="nav-sub-item"><a href="list_manager_profit.php" class="nav-sub-link">Profit Setup</a></li>
 
            </ul> 
          </li> 
           <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>Attendance</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="attendance_list.php" class="nav-sub-link">Attendance List</a></li>
               
              
            </ul>
          </li>
          <!-- nav-item --><!-- nav-item --><?php }?><?php if ($userRole=='2') { ?>
 
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>Course Sharing Ownership</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="coordinator_co_list.php" class="nav-sub-link">List</a></li>
               <li class="nav-sub-item"><a href="coordinator_course_owner.php" class="nav-sub-link">Course</a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>Attendance</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="attendance_list.php" class="nav-sub-link">Attendance List</a></li>
               
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>STATISTIC</a>
             <ul class="nav-sub">
              


 <li class="nav-sub-item"><a href="statistik.php" class="nav-sub-link">Student By Course</a></li>
 <li class="nav-sub-item"><a href="course_cat.php" class="nav-sub-link">Course By Category</a></li>
            </ul> 
          </li><!-- nav-item --><?php }?>
        
 <?php if ($userRole=='3') { ?>

          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>My Courses</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="courseowner_course.php" class="nav-sub-link">As a Course Owner</a></li>
               <li class="nav-sub-item"><a href="cowner_instructor.php" class="nav-sub-link">As a Instructor</a></li>
            
            </ul>
          </li>

          



        <?php }?>


         <?php if ($userRole=='9') { ?>

          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>My Courses</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="inst_course.php" class="nav-sub-link">My Course</a></li>
            
            </ul>
          </li>
            <!--li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>Marks</a>
            <ul class="nav-sub">
              <!--li class="nav-sub-item"><a href="verify_marks.php" class="nav-sub-link">Verify</a></li>
            
            </ul>
          </li-->

          



        <?php }?>




<?php if ($userRole=='5') { ?>

          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>My Courses</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="student_mycourses.php" class="nav-sub-link">My Course</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>Exam</a>
            <ul class="nav-sub">
            
              <li class="nav-sub-item"><a href="admin_cgpa.php" class="nav-sub-link">Result</a></li>
            </ul>
          </li>

           <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Competency certificate</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="list_cert.php" class="nav-sub-link">Certificate</a></li>
            </ul>
          </li>

           <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Financial</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="request_refund.php" class="nav-sub-link">Request refund</a></li>
              <li class="nav-sub-item"><a href="student_purchase.php" class="nav-sub-link">Purchase history</a></li>
            </ul>
          </li><!-- nav-item --><!-- nav-item --><?php }?>
<?php if ($userRole=='11') { ?>
<li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-edit"></i>FINANCIAL</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="request_refund.php" class="nav-sub-link">Request refund</a></li>
              <li class="nav-sub-item"><a href="student_purchase.php" class="nav-sub-link">Purchase history</a></li>
            </ul>
          </li>
<?php }?>

        </ul><!-- nav -->
      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->
