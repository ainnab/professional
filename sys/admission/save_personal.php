<?php 
include 'talum.php';
session_start();
$ic=$_SESSION['ic'];

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
  $result.= " WHERE a.stud_ic='$ic'";

    //$result2="UPDATE data_ptmk SET";
  //$result2.= " NAMA='$id', EMAIL='$email', TELBIMBIT='$phone', TELEFON='$home', WARGA_JPN='$nation', TMPTLAHIR='$pob', JANTINA_JPN='$gen', UMUR='$age', TRKLAHIR_JPN='$dob', KAHWIN='$mar', KAUM_JPN='$race', AGAMA_JPN='$rel', ALAM1='$add1', ALAM2='$add2', BANDAR='$city', POSKOD='$postcode', NEGERI='$state', NOOKU='$nooku', JENCACAT='$okutype'";
  //$result2.= " WHERE NOKP='$ic'";

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
if (isset($_POST['updateEnrol'])) {
    
   /* $id = $_REQUEST['id'];*/
    $id = $_REQUEST['id'];
    $namaProgram = $_REQUEST['namaProgram'];

    $records = mysqli_query($dbconfig,"select * from programselection where stud_ic='$ic'");

    while($data = mysqli_fetch_array($records)) {

    

    }


    $sql2= "UPDATE programselection SET program_name = '$namaProgram', status = 'final' where id = '$id'";


  if(mysqli_query($dbconfig, $sql2) == TRUE){
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'display.php';</script>";

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
?>
<?php


    mysqli_close($dbconfig);
      
   
?>