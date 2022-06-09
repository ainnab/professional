<?php 
include 'talum.php';
session_start();
$ic=$_SESSION['ic'];

 $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'");

 $sql_query="select * from student where stud_ic='$ic' ";

  $res=mysqli_query($dbconfig,$sql_query);
  //echo $sql_query;
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $role = $userRow['role'];
  $agent = $userRow['agent'];



if (isset($_POST['submit_personal'])) {

$firstname = $_POST['firstname'];
$gender = $_POST['gender'];
//$age = $_POST['age'];
$dob = $_POST['dob'];
$pob = $_POST['pob'];
$nation = $_POST['nation'];
$marital = $_POST['marital'];
$religion = $_POST['religion'];
$race = $_POST['race'];
$about = $_POST['about'];
$height = $_POST['height'];
$weight = $_POST['weight'];
//$add1 = strtoupper($_POST['add1']);
//$add2 = strtoupper($_POST['add2']);
//$city = strtoupper($_POST['city']);
//$postcode = $_POST['postcode'];
//$state = $_POST['state'];
$nooku = $_POST['nooku'];
$okutype = $_POST['okutype'];
//$target2 = "sys/folder/" .basename($_FILES['file']['name']);
  //$fileStatus = $_FILES['file']['name'];



  $result="UPDATE student AS a SET";
  $result.= " a.stud_name='$firstname', a.stud_nation='$nation', a.pob='$pob', a.gender='$gender',  a.about='$about',a.dob='$dob', a.marital='$marital', a.stud_race='$race', a.stud_religion='$religion', a.nooku='$nooku', a.okutype='$okutype', a.height='$height', a.weight='$weight'";
  $result.= " WHERE a.stud_ic='$ic' ";



  //$res2=mysqli_query($dbconfig, $result);
    if(mysqli_query($dbconfig, $result) == TRUE){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_personal.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}


if (isset($_POST['submit_contact'])) {


$email = $_POST['email'];
$phone = $_POST['phone'];
//$age = $_POST['age'];
$home = $_POST['home'];
$mailaddress = $_POST['mailaddress'];
$postcode = $_POST['postcode'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];




    $result="UPDATE contact AS a SET";
    $result.= " a.email='$email', a.phone='$phone', a.home='$home', a.mailaddress='$mailaddress',  a.postcode='$postcode',a.city='$city', a.state='$state', a.country='$country'";
    $result.= " WHERE a.stud_ic='$ic'";

    //$result2="UPDATE data_ptmk SET";
    //$result2.= " NAMA='$id', EMAIL='$email', TELBIMBIT='$phone', TELEFON='$home', WARGA_JPN='$nation', TMPTLAHIR='$pob', JANTINA_JPN='$gen', UMUR='$age', TRKLAHIR_JPN='$dob', KAHWIN='$mar', KAUM_JPN='$race', AGAMA_JPN='$rel', ALAM1='$add1', ALAM2='$add2', BANDAR='$city', POSKOD='$postcode', NEGERI='$state', NOOKU='$nooku', JENCACAT='$okutype'";
    //$result2.= " WHERE NOKP='$ic'";

    //$res2=mysqli_query($dbconfig, $result);
    if(mysqli_query($dbconfig, $result) == TRUE){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_contact.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }


}


if (isset($_POST['submit_parent'])) {


$name1 = $_POST['namep1'];
$ic1 = $_POST['icp1'];

$occupation1 = $_POST['occupationStatus'];

$name2 = $_POST['namep2'];
$ic2 = $_POST['icp2'];

$occupation2 = $_POST['occupationStatus1'];

$income = $_POST['income'];
$household = $_POST['household'];




    $result="UPDATE parent SET";
    $result.= " p1_name='$name1', p1_ic='$ic1', p1_occupation='$occupation1',p2_name='$name2', p2_ic='$ic2', p2_occupation='$occupation2',household='$household',income ='$income' ";
    $result.= " WHERE stud_ic='$ic'";

    //$result2="UPDATE data_ptmk SET";
    //$result2.= " NAMA='$id', EMAIL='$email', TELBIMBIT='$phone', TELEFON='$home', WARGA_JPN='$nation', TMPTLAHIR='$pob', JANTINA_JPN='$gen', UMUR='$age', TRKLAHIR_JPN='$dob', KAHWIN='$mar', KAUM_JPN='$race', AGAMA_JPN='$rel', ALAM1='$add1', ALAM2='$add2', BANDAR='$city', POSKOD='$postcode', NEGERI='$state', NOOKU='$nooku', JENCACAT='$okutype'";
    //$result2.= " WHERE NOKP='$ic'";

    //$res2=mysqli_query($dbconfig, $result);
    if(mysqli_query($dbconfig, $result) == TRUE){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_parent.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }


}


if (isset($_POST['submit_new_edu'])) {

$type = $_POST['type'];
$wrkPostion = $_POST['wrkPostion'];
$edu_start = $_POST['edu_start'];
$edu_end = $_POST['edu_end'];
$edu_gred = $_POST['edu_gred'];
$edu_major = $_POST['edu_major'];
$wrkPostion1 = $_POST['wrkPostion1'];
$wrkPostion2 = $_POST['wrkPostion2'];
$wrkPostion3 = $_POST['wrkPostion3'];
$wrkPostion4 = $_POST['wrkPostion4'];
$target2 = "folder/workExp/" .basename($_FILES['fileWork']['name']);
$fileWork = $_FILES['fileWork']['name'];

     $query = "INSERT INTO working_experience (stud_ic,type,position,year_start,year_end,category,organization,employer_name,employer_address,job_scope,significant,fileWork) VALUES ('$ic','$type','$wrkPostion','$edu_start','$edu_end','$edu_gred','$edu_major','$wrkPostion1','$wrkPostion2',
       '$wrkPostion3','$wrkPostion4','$fileWork')";


   if(mysqli_query($dbconfig, $query) == TRUE){
    move_uploaded_file($_FILES['fileWork']['tmp_name'], $target2);
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_workexp.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}
if (isset($_POST['update_new_edu'])) { 

$id = $_REQUEST['id'];
$type = $_POST['type'];
$wrkPostion = $_POST['wrkPostion'];
$edu_start = $_POST['edu_start'];
$edu_end = $_POST['edu_end'];
$edu_gred = $_POST['edu_gred'];
$edu_major = $_POST['edu_major'];
$wrkPostion1 = $_POST['wrkPostion1'];
$wrkPostion2 = $_POST['wrkPostion2'];
$wrkPostion3 = $_POST['wrkPostion3'];
$wrkPostion4 = $_POST['wrkPostion4'];
$target2 = "folder/workExp/" .basename($_FILES['fileWork']['name']);
$fileWork_update = $_FILES['fileE']['name'];

  if (empty($fileWork_update)) {

  echo $sql1= "UPDATE working_experience SET type = '$type', position = '$wrkPostion', year_start = '$edu_start', year_end= '$edu_end', category = '$edu_gred', organization = '$edu_major', employer_name = '$wrkPostion1', employer_address= '$wrkPostion2', job_scope = '$wrkPostion3', significant= '$wrkPostion4' where id = '$id'";

    if ($dbconfig->multi_query($sql1) == TRUE) {

          echo "<script>alert('Data updated');</script>";
          echo "<script>window.location.assign('tab_workexp.php')</script>";
    }else
    {
          echo "<script>alert('Tidak dapat diproses');</script>";
    }
  }else {

    $sql2= "UPDATE working_experience SET type = '$type', position = '$wrkPostion', year_start = '$edu_start', year_end= '$edu_end', category = '$edu_gred', organization = '$edu_major', employer_name = '$wrkPostion1', employer_address= '$wrkPostion2', job_scope = '$wrkPostion3', significant= '$wrkPostion4', fileE= '$fileWork_update' where id = '$id'";

      if ($dbconfig->multi_query($sql2) == TRUE) {

            move_uploaded_file($_FILES['fileE']['tmp_name'], $target1);
            echo "<script>alert('Data updated');</script>";
            echo "<script>window.location.assign('tab_workexp.php')</script>";
      }else
      {
            echo "<script>alert('Tidak dapat diproses');</script>";
      }
  }
}
if(isset($_GET['deletewrk']))
      {

               $sql5= "delete from working_experience where id = '".$_GET['id']."'";
              if($dbconfig->multi_query( $sql5) == TRUE)
                {

                  echo "<script>alert('Successfully delete');</script>";
                 echo "<script>window.location.assign('tab_workexp.php')</script>";
                }

                else
                {
                  echo"<script>alert('Tidak dapat diproses');</script>";
                  echo "<script>window.location.assign('tab_workexp.php')</script>";
                }
 }
 ?>
 <?php
 if (isset($_POST['submit_new_acd'])) {

$edu_type = $_POST['edu_type'];
$edu_school = $_POST['edu_school'];
$startYear = $_POST['startYear'];
$gainYear = $_POST['gainYear'];
$level = $_POST['level'];
$major = $_POST['major'];
$target2 = "folder/workExp/" .basename($_FILES['fileA']['name']);
$fileA = $_FILES['fileA']['name'];

     $query = "INSERT INTO academic (stud_ic,edu_type,edu_school,edu_start,edu_end,edu_gred,edu_major,fileA) VALUES ('$ic','$edu_type','$edu_school','$startYear','$gainYear','$level','$major','$fileA')";


   if(mysqli_query($dbconfig, $query) == TRUE){
    move_uploaded_file($_FILES['fileA']['tmp_name'], $target2);
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_academic.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}
if (isset($_POST['update_new_acd'])) { 

$id = $_REQUEST['id'];
$edu_type = $_POST['edu_type'];
$edu_school = $_POST['edu_school'];
$startYear = $_POST['startYear'];
$gainYear = $_POST['gainYear'];
$level = $_POST['level'];
$major = $_POST['major'];
$target2 = "folder/workExp/" .basename($_FILES['fileA']['name']);
$fileA_update = $_FILES['fileA']['name'];

  if (empty($fileA_update)) {

  $sql1= "UPDATE academic SET edu_type = '$edu_type', edu_school = '$edu_school', edu_start = '$startYear', edu_end= '$gainYear', edu_gred = '$level', edu_major = '$major' where id = '$id'";

    if ($dbconfig->multi_query($sql1) == TRUE) {

          echo "<script>alert('Data updated');</script>";
          echo "<script>window.location.assign('tab_academic.php')</script>";
    }else
    {
          echo "<script>alert('Tidak dapat diproses');</script>";
    }
  }else {

     $sql2= "UPDATE academic SET edu_type = '$edu_type', edu_school = '$edu_school', edu_start = '$startYear', edu_end= '$gainYear', edu_gred = '$level', edu_major = '$major', fileA = '$fileA' where id = '$id'";

      if ($dbconfig->multi_query($sql2) == TRUE) {

            move_uploaded_file($_FILES['fileA']['tmp_name'], $target1);
            echo "<script>alert('Data updated');</script>";
            echo "<script>window.location.assign('tab_academic.php')</script>";
      }else
      {
            echo "<script>alert('Tidak dapat diproses');</script>";
      }
  }
}

if(isset($_GET['deleteacd']))
      {

               $sql5= "delete from academic where id = '".$_GET['id']."'";
              if($dbconfig->multi_query( $sql5) == TRUE)
                {

                  echo "<script>alert('Successfully delete');</script>";
                 echo "<script>window.location.assign('tab_academic.php')</script>";
                }

                else
                {
                  echo"<script>alert('Tidak dapat diproses');</script>";
                  echo "<script>window.location.assign('tab_academic.php')</script>";
                }
 }
?>
 <?php
 if (isset($_POST['submit_new_doc'])) {

$filename = $_POST['filename'];
$target2 = "folder/workExp/" .basename($_FILES['fileDoc']['name']);
$fileDoc = $_FILES['fileDoc']['name'];

     $query = "INSERT INTO document (stud_ic,file_name,fileDoc) VALUES ('$ic','$filename','$fileDoc')";


   if(mysqli_query($dbconfig, $query) == TRUE){
    move_uploaded_file($_FILES['fileDoc']['tmp_name'], $target2);
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_upload.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}
if (isset($_POST['update_new_doc'])) { 

$id = $_REQUEST['id'];
$filename = $_POST['filename'];
$target2 = "folder/workExp/" .basename($_FILES['fileDoc']['name']);
$fileDoc_update = $_FILES['fileDoc']['name'];

  if (empty($fileDoc_update)) {

  $sql1= "UPDATE document SET file_name = '$filename' where id = '$id'";

    if ($dbconfig->multi_query($sql1) == TRUE) {

          echo "<script>alert('Data updated');</script>";
          echo "<script>window.location.assign('tab_upload.php')</script>";
    }else
    {
          echo "<script>alert('Tidak dapat diproses');</script>";
    }
  }else {

     $sql2= "UPDATE document SET file_name = '$filename', fileDoc = '$fileDoc_update' where id = '$id'";

      if ($dbconfig->multi_query($sql2) == TRUE) {

            move_uploaded_file($_FILES['fileDoc']['tmp_name'], $target1);
            echo "<script>alert('Data updated');</script>";
            echo "<script>window.location.assign('tab_upload.php')</script>";
      }else
      {
            echo "<script>alert('Tidak dapat diproses');</script>";
      }
  }
}

if(isset($_GET['deletedoc']))
      {

               $sql5= "delete from document where id = '".$_GET['id']."'";
              if($dbconfig->multi_query( $sql5) == TRUE)
                {

                  echo "<script>alert('Successfully delete');</script>";
                 echo "<script>window.location.assign('tab_upload.php')</script>";
                }

                else
                {
                  echo"<script>alert('Tidak dapat diproses');</script>";
                  echo "<script>window.location.assign('tab_upload.php')</script>";
                }
 }
?>
 <?php
 if (isset($_POST['enrol'])) {

    $namaProgram = $_REQUEST['namaProgram'];
    $sql_u = "SELECT * FROM programselection WHERE stud_ic='$ic'";
    $res_u = mysqli_query($dbconfig, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
      echo "<script type='text/javascript'>alert('Sorry! You already enroll!'); window.location.href = 'program.php';</script>";
    
    }else{
    
     $sql = "INSERT INTO programselection (stud_ic,program_name,status) VALUES ('$ic','$namaProgram','pending')";


  if(mysqli_query($dbconfig, $sql) == TRUE){
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'display.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
  }
}
if (isset($_POST['submit_program'])) {
    
  
    $id = $_REQUEST['id'];
    $mode = $_REQUEST['seeAnotherField'];
    $agent = $_REQUEST['otherField'];
    $program = $_REQUEST['otherPO'];

    $records = mysqli_query($dbconfig,"select * from application where stud_ic='$id'");

    while($data = mysqli_fetch_array($records)) {

    

    }


    $sql2= "UPDATE application SET first_choice = '$mode', second_choice = '$agent',third_choice = '$program' where stud_ic = '$id'";


  if(mysqli_query($dbconfig, $sql2) == TRUE){
     //echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'display.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}
?>
<?php
if (isset($_POST['submit_final'])) {
    
    /*$id = $_REQUEST['id'];*/
    /*$customCheck1 = $_REQUEST['customCheck1'];
*/
   $sql = "UPDATE student (stud_ic,app_option,app_status) VALUES ('$ic','1','Submitted')";

    $result="UPDATE student AS a SET";
    $result.= " a.app_option='1', a.app_status='Submitted'";
    $result.= " WHERE a.stud_ic='$ic'";


  if(mysqli_query($dbconfig, $result) == TRUE){
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'view_submission.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}






    mysqli_close($dbconfig);
      
   
?>

//////////////////


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
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.png"/>

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/morris.js/morris.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link href="lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">
   <?php 
    include 'talum.php';
   
   session_start();
//include_once 'config.php';

if(isset($_SESSION['ic']))
{
 $ic=$_SESSION['ic'];   
  
   $recordA = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    while($dataA = mysqli_fetch_array($recordA)) { 
        $role = $dataA['role'];
   $agent=$dataA['stud_name']; 
        
      
       }     
   
   
   $stud_id = $_REQUEST['id'];

    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$stud_id'"); 
    while($data = mysqli_fetch_array($records)) { 







      $now_year = date('Y');
  $card_year  = substr($ic,0,2);
  if ($card_year<50){
  $age = $now_year - intval("20".$card_year);
  }else{
  $age = $now_year - intval("19".$card_year);
  }

           
   

       
     
       
       $sql1 = "SELECT * FROM `nationality`";
  $all_nation = mysqli_query($dbconfig,$sql1);
  $sql2 = "SELECT * FROM `state_my` group by state_name";
  $all_state = mysqli_query($dbconfig,$sql2);
  $sql3 = "SELECT * FROM `gender` ";
  $all_gender = mysqli_query($dbconfig,$sql3);
  $sql4 = "SELECT * FROM `marital` ";
  $all_marital = mysqli_query($dbconfig,$sql4);
  $sql5 = "SELECT * FROM `race` ";
  $all_race = mysqli_query($dbconfig,$sql5);
  $sql6 = "SELECT * FROM `religion` ";
  $all_religion = mysqli_query($dbconfig,$sql6);
  $sql7 = "SELECT * FROM `state_my` group by state_name";
  $all_state2 = mysqli_query($dbconfig,$sql7);
  $sql8 = "SELECT * FROM `oku_type`";
  $all_oku = mysqli_query($dbconfig,$sql8);
$sql25 = "SELECT * FROM `guardian_relations` ";
    $all_relation = mysqli_query($dbconfig,$sql25);
    $all_relation2 = mysqli_query($dbconfig,$sql25);
    $sql26 = "SELECT * FROM `household` ";
    $all_household = mysqli_query($dbconfig,$sql26);
    $sql27 = "SELECT * FROM `household_income` ";
    $all_income = mysqli_query($dbconfig,$sql27);
    
   $records2 = mysqli_query($dbconfig,"select * from parent where stud_ic='$stud_id'");

   $records3 = mysqli_query($dbconfig,"select * from academic where stud_ic='$stud_id'"); 
   $records4 = mysqli_query($dbconfig,"select * from document where stud_ic='$stud_id'"); 
    ?>
      </head>

    
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
          <li class="nav-item show  ">
          <a href="dashboard5.php" class="nav-link"><i class="typcn typcn-clipboard"></i>Dashboard</a>
          </li><!-- nav-item -->
          <li class="nav-item show current">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Admission</a>
            <ul class="nav-sub">
              <li class="nav-sub-item  "><a href="tab_addstudent_agent.php" class="nav-sub-link ">Create Student</a></li>
              <li class="nav-sub-item  "><a href="status_inst.php" class="nav-sub-link ">List Student</a></li>
                <li class="nav-sub-item  "><a href="professional_dip.php" class="nav-sub-link ">List Module</a></li>
              
            </ul>
          </li><!-- nav-item -->
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
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="" class=""><i class="typcn typcn-bell"></i></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
               
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="img/faces/face1_1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="img/faces/face1_1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <h6></h6>
                </div><!-- az-header-profile -->

                <a href="signout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header --><head>
    
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
  

    <body class="az-body az-body-sidebar">
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Update Student's Information</h2>
        </div>
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card card-dashboard-seven">
          <div class="card-body">
          
              <div>
            <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'Application')" id="defaultOpen">Application</button>
      <button class="tablinks" onclick="openCity(event, 'Personal')">Personal</button>
      <button class="tablinks" onclick="openCity(event, 'Parent')">Parent</button>
      <button class="tablinks" onclick="openCity(event, 'Academic')">Academic</button>
      <button class="tablinks" onclick="openCity(event, 'Work')">Work Experience</button>
      <button class="tablinks" onclick="openCity(event, 'Upload')">Upload Document</button>
      <button class="tablinks" onclick="openCity(event, 'Declaration')">Declaration</button>

</div>


<div id="Application" class="tabcontent">
</br>
  <h3>Application</h3>
  </br>
    <form action="save_personal.php" method="post">

      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group">
          <label for="seeAnotherField">MODE OF PROGRAMME</label>
    <select class="form-control" id="seeAnotherField" name="seeAnotherField">
    <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM program ";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['pg_code'];
                                $pgName=strtolower($row4['pg_name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                        <?php } ?>
        
    </select>
          </div>
        </div> 
        <div class="col-md-12 col-lg-12 col-xl-6">
        
      </div>
      </div><!-- row -->
      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
       <div class="form-group" id="otherFieldDiv">
          <label for="otherField">RK </label>
    <select class="form-control" id="otherField" name="otherField">
      <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM inst where inst_name='$agent' ";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['code_rk'];
                                $pgName=strtolower($row4['inst_name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                        <?php } ?>
        
    </select>
          </div>
        </div>
        
        <div class="col-md-12 col-lg-12 col-xl-6">
        
      </div>
      </div><!-- row -->
      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group" id="otherP" >
          <label for="otherPO">PROGRAMME OFFERED</label>
    <select class="form-control" id="otherPO" name="otherPO">
      <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM program_diploma where inst_name='$agent' and mode='DIP' ";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['pg_code'];
                                $pgName=strtolower($row4['pg_name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                    <?php }?>   
    </select>
              
              
    <br>
                      

  </div>  
          

        </div> 
        <div class="col-md-12 col-lg-12 col-xl-6">
          
      </div>
      </div><!-- row -->     

     


 <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group" id="otherP1" >
          <label for="otherPO1">PROGRAMME OFFERED</label>
    <select class="form-control" id="otherPO1" name="otherPO1">
      <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM program_diploma where inst_name='$agent' and mode='MASTER'";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['pg_code'];
                                $pgName=strtolower($row4['pg_name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                       
        <?php  }?>
    </select>

 

          </div> 
        </div>
        
      </div><!-- row -->     

<br>

<div class="row row-sm">
    






      <input type='hidden' name='id' value=<?php echo $stud_id?>>

      <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                <div>
                    <button type="submit" name="submit_program"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                   
                </div>
            </div>
        </div>
      </form>
    
</div></div>

<div id="Personal" class="tabcontent">
</br>
  <h3>Personal Info</h3>
  </br>
 
    <form action="save_personal.php" method="post">
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" value="<?php echo $data['stud_name']; ?>" type="text" style="text-transform:uppercase" required>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">IC / Passport Number: <span class="tx-danger">*</span></label>
                <input id="ic" class="form-control" name="ic" type="text" value="<?php echo  $stud_id; ?>" readonly>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                <select name="gender" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($gen = mysqli_fetch_array($all_gender,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $gen["gender_code"];?>"<?php if($gen["gender_code"]==$data['gender']) echo 'selected="selected"'; ?>><?php echo $gen["gender_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-3">
                <div class="form-group">
                <label class="form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        Date:
                        </div>
                    </div>
                    <input id="dob" type="date" name="dob" class="form-control" value="<?php echo $data['dob']; ?>" placeholder="MM/DD/YYYY" required>
                    </div><!-- input-group -->
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">State Of Birth: <span class="tx-danger">*</span></label>
                <select name="pob" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($state = mysqli_fetch_array($all_state,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $state["state_code"];?>"<?php if($state["state_code"]==$data['pob']) echo 'selected="selected"'; ?>><?php echo $state["state_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">Citizenship: <span class="tx-danger">*</span></label>
                <select name="nation" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($nation = mysqli_fetch_array($all_nation,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $nation["taraf_code"];?>"<?php if($nation["taraf_code"]==$data['stud_nation']) echo 'selected="selected"'; ?>><?php echo $nation["taraf_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Marital Status: <span class="tx-danger">*</span></label>
                <select name="marital" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($mar = mysqli_fetch_array($all_marital,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $mar["status_code"];?>"<?php if($mar["status_code"]==$data['marital']) echo 'selected="selected"'; ?>><?php echo $mar["status_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
                <select name="religion" class="form-control select2">
                <option value="NULL">Select</option>
                <?php while ($rel = mysqli_fetch_array($all_religion,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $rel["religion_code"];?>"<?php if($rel["religion_code"]==$data['stud_religion']) echo 'selected="selected"'; ?>><?php echo $rel["religion_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Ethnic: <span class="tx-danger">*</span></label>
                <select name="race" class="form-control select2">
                <option value="NULL">Select</option>
                <?php while ($race = mysqli_fetch_array($all_race,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $race["ptmk_race_code"];?>"<?php if($race["ptmk_race_code"]==$data['stud_race']) echo 'selected="selected"'; ?>><?php echo $race["race_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">About Me <span class="tx-danger"></span></label>
                <input type="text" id="about" class="form-control" name="about" placeholder="About yourself" value="<?php echo $data['about']; ?>" >
                </div><!-- form group -->
            </div>
              
            </div><!-- row -->
            <div class="row row-sm">
            
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Height (cm): <span class="tx-danger">*</span></label>
                <input id="height" class="form-control" name="height" type="text" value="<?php echo $data['height']; ?>" required>
                </div><!-- form group -->
            </div><!-- col -->  
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Weight (kg): <span class="tx-danger">*</span></label>
                <input id="weight" class="form-control" name="weight" type="text" value="<?php echo $data['weight']; ?>" required>
                </div><!-- form group -->
            </div><!-- col -->  
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">No OKU: <span class="tx-danger">if applicable</span></label>
                <input id="nooku" class="form-control" name="nooku" type="text" value="<?php echo $data['nooku']; ?>" >
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">OKU Type: <span class="tx-danger">if applicable</span></label>
                <select name="okutype" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($oku = mysqli_fetch_array($all_oku,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $oku["oku_code"];?>"<?php if($oku["oku_code"]==$data['okutype']) echo 'selected="selected"'; ?>><?php echo $oku["oku_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
 <input type='hidden' name='id' value=<?php echo  $stud_id?>>

          
            </div><!-- row -->
            <?php  ?>
            
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_personal"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                   
                </div>
             
            </form>
      </br>
</div>

<div id="Parent" class="tabcontent">
</br>
  <h3>Parent's Info</h3>
  </br>
  <form action="save_personal.php" method="post">     
<?php while($data2 = mysqli_fetch_array($records2)) { 
     $occupationStatus = $data2['p1_occupation'];
     $occupationStatus1 = $data2['p2_occupation'];
     ?>
<p class="mg-b-20"></p>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name of Parent/Guardian: <span class="tx-danger">*</span></label>
      <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep1" placeholder="Full Name" value="<?php echo $data2['p1_name']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp1" class="form-control" name="icp1" placeholder="IC Number" type="text" value="<?php echo $data2['p1_ic']; ?>" >
    </div><!-- form group -->
  </div><!--col-->
</div><!-- row -->
  <div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Occupation Status: <span class="tx-danger">*</span></label>
        <select name="occupationStatus" id="occupationStatus" class="form-control select" required>
           <option selected disabled="" style="font-size:14px;">Please Select</option>
             <option <?php if ($occupationStatus == "Working") {
                       echo 'selected';
             } ?> value="Working">Working</option>
             <option <?php if ($occupationStatus == "Not Working") {
                        echo 'selected';
             } ?> value="Not Working">Not Working</option>
       </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->

<p class="mg-b-20"></p>
<hr/>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name of Parent/Guardian 2: <span class="tx-danger">*</span></label>
      <input id="namep2" class="form-control" style="text-transform:uppercase" name="namep2" placeholder="Full Name" value="<?php echo $data2['p2_name']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp2" class="form-control" name="icp2" placeholder="IC Number" type="text" value="<?php echo $data2['p2_ic']; ?>" >
    </div><!-- form group -->
  </div><!--col-->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
  <div class="form-group">
      <label class="form-control-label">Occupation Status: <span class="tx-danger">*</span></label>
      <select name="occupationStatus1" id="occupationStatus1" class="form-control select" required>
           <option selected disabled="" style="font-size:14px;">Please Select</option>
             <option <?php if ($occupationStatus1 == "Working") {
                       echo 'selected';
             } ?> value="Working">Working</option>
             <option <?php if ($occupationStatus1 == "Not Working") {
                        echo 'selected';
             } ?> value="Not Working">Not Working</option>
       </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->  
<p class="mg-b-20"></p>
<hr/>
<div class="row row-sm">
<div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Income: <span class="tx-danger">*</span></label>
    <input id="income" class="form-control" name="income" placeholder="Eg: RM 5500" type="text" value=" <?php echo $data2['income']; ?>" >
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Number: <span class="tx-danger">*</span></label>
      <select name="household" class="form-control select2">
      <option value="NULL">Select</option>
      <?php while ($hhold = mysqli_fetch_array($all_household,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $hhold["household_code"];?>"<?php if($hhold["household_code"]==$data2['household']) echo 'selected="selected"'; ?>><?php echo $hhold["household_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
<?php } ?>
<input type='hidden' name='id' value=<?php echo  $stud_id?>>

            <div class="form-group m-b-0">
                    <button type="submit" name="submit_parent"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                    
                </div>
</form>


</br>
</div>

<div id="Academic" class="tabcontent">

</br>
  <h3>Academic Info</h3>
  </br>
  
   <div class="card card-dashboard-seven">
    <div class="card-body">
    <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#addEdu">
      <i class="fa fa-plus"></i> 
      Add
    </button>
    <div class="modal fade" id="addEdu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">New</h4>
                      </div>
                      <form action="save_personal.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                          <div class="form-group">
                        <label for="edu_type">Type</label>
                        <select name="edu_type" class="form-control" required="">
                          <option value="">Select Type</option>
                          <option>Academic Qualification</option>
                          <option>Award</option>
                          <option>Course</option>
                          <option>IT Skill</option>
                          <option>Language Proficiency</option>
                          <option>Recognition</option>
                          <option>Seminar</option>
                          <option>Social Activity</option>
                          <option>Sport</option>
                        </select>
                      </div>

                          <div class="form-group">
                            <label>University/Institution/Event/Skill/Provider Name</label>
                            <input type="text" class="form-control" id="edu_school" name="edu_school" required="">
                          </div>

                          <div class="row p-b-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Start Year</label>
                                <input type="date" class="form-control" name="startYear" id="startYear" placeholder="YYYY" required="">
                              </div>
                            </div>

                            <div class="col-md-6">
                          <div class="form-group">
                                <label>Gain Year</label>
                                <input type="date" class="form-control" name="gainYear" id="gainYear" placeholder="YYYY" required="">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label>Gred/Outcome/Level</label>
                            <input type="text" class="form-control" id="level" name="level" required="">
                          </div>

                          <div class="form-group">
                            <label>Majoring/Scopes</label>
                            <input type="text" class="form-control" id="major" name="major">
                          </div>

                          <div class="form-group">
                            <label for="">Attachment</label>
                            <input type="file"  name="fileA" class="form-control">
                            <span class="help-block">*The maximum file size you can upload is 20MB</span>
                          </div>

                        </div>
                        <input type='hidden' name='id' value=<?php echo  $stud_id?>>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit_new_acd" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
     <form action="save_personal.php" method="post" enctype="multipart/form-data">
   
<?php  ?>
            </form><br>
            <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>University/Institution/Event/Skill/Provider Name</th>
                                    <th>Gred/Outcome/Level</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM academic WHERE stud_ic = '$stud_id'");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql3)){
                            $id=$row['id'];
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_type']));?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_school']));?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_gred']));?></td>
                      <td>
                       

                     <a href="edit_academic.php?id=<?php echo $row['id']?>" ><button name="update" class="btn btn-primary btn-md">Edit</button></a>
                      <a href="save_personal.php?id=<?php echo $row['id']?>&deleteacd=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="submit" name="deleteacd" id="btn-submit" class="btn btn-primary btn-md">Delete</button></a>

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>

                </table>
              </div>
            </div>


        <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_new_edu"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                    
                </div>
            </div><!-- card-body -->
            </form>
      </br>


</div>
</div>
</div>
<div id="Work" class="tabcontent">

</br>
  <h3>Work Experience</h3>
  </br>
  <form action="save_personal.php" method="post" enctype="multipart/form-data">
   <div class="card card-dashboard-seven">
    <div class="card-body">
    <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#addWork">
      <i class="fa fa-plus"></i> 
      Add
    </button>
    <div class="modal fade" id="addWork" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">New</h4>
                      </div>
                      <form action="save_personal.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                        <div class="form-group">
                          <label>Type</label>
                          <select name="type" id="type" class="form-control" required="">
                          <option selected disabled="" style="font-size:14px;">Select Type</option>
                          <option>Employment</option>
                          <option>Other</option>
                          <option>Own Business</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" id="wrkPostion" name="wrkPostion" required="">
                          </div>

                          <div class="row p-b-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Year Start/Service Year</label>
                                <input type="date" class="form-control" name="edu_start" id="edu_start" placeholder="MM-YYYY" required="">
                              </div>
                            </div>

                            <div class="col-md-6">
                          <div class="form-group">
                                <label>Year End</label>
                                <input type="date" class="form-control" name="edu_end" id="edu_end" placeholder="MM-YYYY" required="">
                              </div>
                            </div>
                          </div>
                          <div class="row p-b-2">
                          <div class="col-md-6">
                          <div class="form-group">
                            <label>Category/Grade</label>
                            <input type="text" class="form-control" id="edu_gred" name="edu_gred" required="">
                          </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                            <label>Organization Size</label>
                            <input type="text" class="form-control" id="edu_major" name="edu_major">
                          </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Employer/Company Name</label>
                            <input type="text" class="form-control" id="wrkPostion1" name="wrkPostion1" required="">
                          </div>
                          <div class="form-group">
                            <label>Employer/Company Address</label>
                            <textarea name="wrkPostion2" id="wrkPostion2" cols="30" rows="3" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Job Scope/Project Value/Qualification</label>
                            <textarea name="wrkPostion3" id="wrkPostion3" cols="30" rows="3" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="wrkPostion4">Significant Contribution</label>
                            <textarea name="wrkPostion4" id="wrkPostion4" cols="30" rows="3" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Attachment</label>
                            <input type="file" class="form-control" id="fileWork" name="fileWork" required>
                            <span class="help-block">*The maximum file size you can upload is 30MB</span>
                          </div>

                        </div>
                         <input type='hidden' name='id' value=<?php echo  $stud_id?>>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit_new_work" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
   <form action="save_personal.php" method="post" enctype="multipart/form-data">
  
            
         
<?php  ?>
            </form><br>
            <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Position</th>
                                    <th>Employer/Company Name</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM working_experience WHERE stud_ic = '$stud_id'");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql3)){
                            $id=$row['id'];
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['type']));?></td>
                      <td><?php echo htmlentities (ucwords($row['position']));?></td>
                      <td><?php echo htmlentities (ucwords($row['employer_name']));?></td>
                      <td>
                       
<a href="edit_academic.php?id=<?php echo $row['id']?>" ><button name="update_new_work" class="btn btn-primary btn-md">Edit</button></a>
                      <a href="save_personal.php?id=<?php echo $row['id']?>&deleteacd=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="submit" name="deleteacd" id="btn-submit" class="btn btn-primary btn-md">Delete</button></a>

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>

                </table>
              </div>
            </div>

        <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_workexp"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                   
                    
                </div>
            </div><!-- card-body -->
            </form>
      </br>

</div>
</div>
</div>

<div id="Upload" class="tabcontent">
</br>
  <h3>Upload Document</h3>
      <center>
           <form action="save_personal.php" method="post" enctype="multipart/form-data">
              <div class="card card-dashboard-seven">
    <div class="card-body">
           <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#addDoc">
      <i class="fa fa-plus"></i> 
      Add
    </button>
    <div class="modal fade" id="addDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">New</h4>
                      </div>
                      <form action="save_personal.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                        <div class="form-group">
                          <label>Filename:</label>
                            <select name="filename" class="form-control">
                            <option value=" " selected disabled="" style="font-size:14px;">Please select</option>
                            <?php $sql11 = "SELECT * FROM document_type";
                            $result11 = mysqli_query($dbconfig, $sql11) or die("database error:". mysqli_error($dbconfig));
                            while( $row11 = mysqli_fetch_assoc($result11) ) {
                                $docname=$row11['document_name'];
                                ?>
                                <option value="<?php echo $docname; ?>" ><?php echo ucwords($docname); ?></option>
                            <?php } ?>
                            </select>
                      </div>
                          <div class="form-group">
                            <input type="file" class="form-control" id="fileDoc" name="fileDoc" required>
                            <span class="help-block">*The maximum file size you can upload is 30MB</span>
                          </div>

                        </div>
                         <input type='hidden' name='id' value=<?php echo  $stud_id?>>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit_new_doc" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
   <form action="save_personal.php" method="post">
  
            
         
<?php  ?>
            </form><br>
            <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>File Name</th>
                                    <th>Document Upload</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM document WHERE stud_ic = '$stud_id'");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql3)){
                            $id=$row['id'];
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['file_name']));?></td>
                      <td><a href="folder/workExp/<?php echo $row["fileDoc"]; ?>" target="_blank"><?php echo $row["fileDoc"]; ?></td>
                      <td>
                       

                     <a href="edit_upload.php?id=<?php echo $row['id']?>" ><button name="update" class="btn btn-primary btn-md">Edit</button></a>
                      <a href="save_personal.php?id=<?php echo $row['id']?>&deletedoc=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="submit" name="deletedoc" id="btn-submit" class="btn btn-primary btn-md">Delete</button></a>

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>

                </table>
              </div>
            </div>
        <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_workexp"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
            
            </form>
            </center>
                        <br>
           
</div>
      </div>

<div id="Declaration" class="tabcontent">
</br>
  <div class="card card-dashboard-seven">
          <div class="card-body">
      
          <p><strong>Declaration</strong></p>
                <p>Please ensure that information provided is <strong>true and correct</strong>. No changes is allowed once the application is submitted.</p>
                <p>The university reserves the right to withdraw or amend any offer that has been made, or the student's enrolment will be terminated by the university according to the circumstances should the information provided inaccurate, false or misleading.</p>
               
            
                <hr/>
               

                        <form action="save_personal.php" method="post">
                        <div class="col-md mg-t-10 mg-md-t-0">
                        <label class="ckbox"><input type="checkbox" name="app" value="Submitted" required><span>I hereby certify that all information given are true.  </span></label></br></div>
                        <div class="col-md mg-t-10 mg-md-t-0">
                           <input type='hidden' name='id' value=<?php echo  $stud_id?>>
                        <button class="btn btn-az-primary btn-block" name="submit_final">Submit</button>
                        </div>
                        </form>

                        <!--?php include 'talum.php';
                        if(isset($_POST['submit'])){
                            $app = $_POST['app'];
                            $result2="UPDATE student SET";
                            $result2.= " app_status ='$app'";
                            $result2.= " WHERE stud_ic='$stud_id'";
                            if(mysqli_query($dbconfig, $result2) == TRUE){
                                $result2 = mysqli_query($dbconfig, $result2);
                                echo "<script type='text/javascript'>alert('Thankyou! You have submitted the application.'); window.location.href = 'view_submission.php';</script>";
                            } else{
                                echo "ERROR: Hush! Sorry $result. " 
                                    . mysqli_error($dbconfig);
                            }
                            mysqli_close($dbconfig);
                        } ?-->

            </div><!-- card-body -->
        </div><!-- card -->

                        
</div>      
      
              
        </div>
           </div> 
         
         </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    

    <script src="js/azia.js"></script>
  <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    <script>
      $(function(){
        'use strict'

        $(function() {
    $('#aliran').change(function() {
      $('.A').toggle($(this).val() === 'A');
    }).change();
    $('#aliran').change(function() {
      $('.B').toggle($(this).val() === 'S');
    }).change();
  });

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
        $('#ssnMask').mask('999-99-9999');

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
        })

        /* ----------------------------------- */
        /* Dashboard content */
        
        $('#compositeline').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline2').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline3').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline4').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });


        var morrisData = [
          { y: 'Oct 01', a: 95000, b: 70000 },
          { y: 'Oct 05', a: 75000,  b: 55000 },
          { y: 'Oct 10', a: 50000,  b: 40000 },
          { y: 'Oct 15', a: 75000,  b: 65000 },
          { y: 'Oct 20', a: 50000,  b: 40000 },
          { y: 'Oct 25', a: 80000, b: 90000 },
          { y: 'Oct 30', a: 75000,  b: 65000 }
        ];

        new Morris.Bar({
          element: 'morrisBar1',
          data: morrisData,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Online', 'Offline'],
          barColors: ['#560bd0', '#00cccc'],
          preUnits: '$',
          barSizeRatio: 0.55,
          gridTextSize: 11,
          gridTextColor: '#494c57',
          gridTextWeight: 'bold',
          gridLineColor: '#999',
          gridStrokeWidth: 0.25,
          hideHover: 'auto',
          resize: true,
          padding: 5
        });

        $('#vmap2').vectorMap({
          map: 'usa_en',
          showTooltip: true,
          backgroundColor: '#fff',
          color: '#60adff',
          colors: {
            mo: '#9fceff',
            fl: '#60adff',
            or: '#409cff',
            ca: '#005cbf',
            tx: '#005cbf',
            wy: '#005cbf',
            ny: '#007bff'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderWidth: 1,
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
    <script >

    //DIPLOMA IKUT RK
$("#seeAnotherField").change(function() {
      if ($(this).val() == "DIP" && "DPPPD") {
        $('#otherFieldDiv').show();
         $('#otherP').show();
         $('#otherP1').hide();
         
        
      } 

else if($(this).val() == "MASTER") {
        $('#otherFieldDiv').show();
         $('#otherP1').show();
         $('#otherP').hide();
         
}


      else {
        
        $('#otherP').hide();
        $('#otherP1').hide();
       
      }
    
    });
    $("#seeAnotherField").trigger("change");



</script>
  </body>
  <?php 
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
