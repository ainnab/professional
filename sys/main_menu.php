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

    <title>Admission</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/morris.js/morris.css" rel="stylesheet">
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
    <?php
    if(!isset($_SESSION))
    {
      include 'talum.php';
        session_start();
         $ic=$_SESSION['ic'];


    $sql_query="select * from student where stud_ic='$ic' ";

  $res=mysqli_query($dbconfig,$sql_query);
  //echo $sql_query;
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $role = $userRow['role'];
  $agent = $userRow['agent'];
  $app_status=$userRow['app_status'];
  $stud_name=$userRow['stud_name'];

  
}
?>

  </head>

  <body class="az-body az-body-sidebar">
    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="" class="az-logo">Admission</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <!-- <div class="az-img-user online"><img src="../img/faces/face1.jpg" alt=""></div> -->
        <div class="media-body">
          <h6></h6>
          <span></span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
     <?php
      if ($role == 'inst'){
?>

        <ul class="nav">
        <li class="nav-label">Main Menu</li>
          <li class="nav-item show  ">
          <a href="dashboard_agent.php" class="nav-link"><i class="typcn typcn-document"></i>Dashboard</a>
          </li><!-- nav-item -->
          <li class="nav-item show current">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Admission</a>
            <ul class="nav-sub">
              <li class="nav-sub-item  "><a href="tab_personal_agent.php" class="nav-sub-link ">Create New Student</a></li>
              <li class="nav-sub-item  "><a href="status_inst_rope.php" class="nav-sub-link ">List Student(ROPE)</a></li>
              <li class="nav-sub-item  "><a href="status_inst.php" class="nav-sub-link ">List Student(Normal)</a></li>
            </ul>
          </li><!-- nav-item -->
<?php
}

if ($role == 'student' ){?>

        <ul class="nav">
          <li class="nav-label">Main Menu</li>
            <li class="nav-item show">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Dashboard</a>
            <ul class="nav-sub">

              <li class="nav-sub-item"><a href="dashboard2.php" class="nav-sub-link">Dashboard</a></li>
            </ul>
            
            <?php if($app_status=='Register'){?>
            <li class="nav-item show">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Admission</a>
            <ul class="nav-sub">
              <!--  <li class="nav-sub-item <?php echo (basename($_SERVER['PHP_SELF']) == 'tab_application.php' ?'active' : " ");?>"><a href="tab_application.php" class="nav-sub-link">app</a></li> -->
              <li class="nav-sub-item <?php echo (basename($_SERVER['PHP_SELF']) == 'tab_personal.php' ?'active' : " ");?>"><a href="tab_personal.php" class="nav-sub-link">Personal Information</a></li>
              <!--li class="nav-sub-item <?php echo (basename($_SERVER['PHP_SELF']) == 'tab_contact.php' ?'active' : " ");?>"><a href="tab_contact.php" class="nav-sub-link">Contact</a></li-->
              <li class="nav-sub-item <?php echo (basename($_SERVER['PHP_SELF']) == 'tab_parent.php' ?'active' : " ");?>"><a href="tab_parent.php" class="nav-sub-link">Family Background</a></li>
              <li class="nav-sub-item <?php echo (basename($_SERVER['PHP_SELF']) == 'tab_workexp.php' ?'active' : " ");?>"><a href="tab_workexp.php" class="nav-sub-link">Work Experience</a></li>
              <li class="nav-sub-item <?php echo (basename($_SERVER['PHP_SELF']) == 'tab_academic.php' ?'active' : " ");?>"><a href="tab_academic.php" class="nav-sub-link">Academic Background</a></li>
              <li class="nav-sub-item <?php echo (basename($_SERVER['PHP_SELF']) == 'tab_upload.php' ?'active' : " ");?>"><a href="tab_upload.php" class="nav-sub-link">Video CV/Attachment</a></li>
              <li class="nav-sub-item <?php echo (basename($_SERVER['PHP_SELF']) == 'tab_declaration.php' ?'active' : " ");?>"><a href="tab_declaration.php" class="nav-sub-link">Declaration</a></li>
            </ul>
          </li>
          <?php }?>
          <?php if($app_status=='Submitted' or $app_status=='Approved'){?>
            <li class="nav-item show">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>View</a>
            <ul class="nav-sub">
            <li class="nav-sub-item"><a href="view_submission.php" class="nav-sub-link">View submission</a></li>
              
              <?php if($app_status=='Approved'){?>
              <li class="nav-sub-item"><a href="view_status.php" class="nav-sub-link">View status</a></li>
              <?php }?>
            </ul>
            <?php }?>
            <?php if($app_status=='Submitted' or $app_status=='Applied'){?>
            <li class="nav-item show">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Program</a>
            <ul class="nav-sub">
            <li class="nav-sub-item"><a href="master_exec_stud.php?id=<?php echo $ic;?>" class="nav-sub-link">Master Eksekutif</a></li>
            <li class="nav-sub-item"><a href="bach_exec_stud.php?id=<?php echo $ic;?>" class="nav-sub-link">Bachelor Eksekutif</a></li>
            <li class="nav-sub-item"><a href="professional_dip_stud.php?id=<?php echo $ic;?>" class="nav-sub-link">Professional Diploma</a></li>
            <li class="nav-sub-item"><a href="" class="nav-sub-link">Short Courses</a></li>
              
               
            </ul>
            <?php }?>
          <!-- nav-item -->



 <?php } ?>









      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->


    <div class="az-content az-content-dashboard-two">
      <div class="az-header">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
            <div class="az-header-message">
              <!--<a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div> az-header-message 
            <div class="dropdown az-header-notification">
              <a href="" class="new"><i class="typcn typcn-bell"></i></a>-->
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                  <div class="media new">
                    <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                    <div class="media-body">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media new">
                    <div class="az-img-user online"><img src="../img/faces/face3.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="../img/faces/face1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <b><p><?php echo $stud_name;?></p></b>
                 <!-- <span>Premium Member</span>-->
                </div><!-- az-header-profile -->

                <!--<a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>-->
                <a href="signout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
