<?php 
include 'talum.php';
session_start();
$ic=$_SESSION['ic'];
  //$stud_id = $_REQUEST['id'];
//$ic=$_SESSION['ic'];
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
$nooku = $_POST['nooku'];
$okutype = $_POST['okutype'];
//$target2 = "sys/folder/" .basename($_FILES['file']['name']);
  //$fileStatus = $_FILES['file']['name'];

 $id = $_REQUEST['ic'];



  $result="UPDATE student AS a SET";
  $result.= " a.stud_name='$firstname', a.stud_nation='$nation', a.pob='$pob', a.gender='$gender',  a.about='$about',a.dob='$dob', a.marital='$marital', a.stud_race='$race', a.stud_religion='$religion', a.nooku='$nooku', a.okutype='$okutype', a.height='$height', a.weight='$weight'";
  $result.= " WHERE a.stud_ic='$id' ";



  //$res2=mysqli_query($dbconfig, $result);
    if(mysqli_query($dbconfig, $result) == TRUE){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_personal.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}

if (isset($_POST['submit_personal_rk'])) {

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
  $nooku = $_POST['nooku'];
  $okutype = $_POST['okutype'];
  //$target2 = "sys/folder/" .basename($_FILES['file']['name']);
    //$fileStatus = $_FILES['file']['name'];
  
   $id = $_REQUEST['id'];
  
  
  
    $result="UPDATE student AS a SET";
    $result.= " a.stud_name='$firstname', a.stud_nation='$nation', a.pob='$pob', a.gender='$gender',  a.about='$about',a.dob='$dob', a.marital='$marital', a.stud_race='$race', a.stud_religion='$religion', a.nooku='$nooku', a.okutype='$okutype', a.height='$height', a.weight='$weight'";
    $result.= " WHERE a.stud_ic='$id' ";
  
  
  
    //$res2=mysqli_query($dbconfig, $result);
      if(mysqli_query($dbconfig, $result) == TRUE){
          //$result2 = mysqli_query($dbconfig, $result2);
          echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_test_rk.php?id=".$id."';</script>";
  
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

    if(mysqli_query($dbconfig, $result) == TRUE){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_workexp.php';</script>";
    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}

if (isset($_POST['submit_parent_rk'])) {


$name1 = $_POST['namep1'];
$ic1 = $_POST['icp1'];

$occupation1 = $_POST['occupationStatus'];

$name2 = $_POST['namep2'];
$ic2 = $_POST['icp2'];

$occupation2 = $_POST['occupationStatus1'];

$income = $_POST['income'];
$household = $_POST['household'];
$id = $_REQUEST['id'];


    $result="UPDATE parent SET";
   $result.= " p1_name='$name1', p1_ic='$ic1', p1_occupation='$occupation1',p2_name='$name2', p2_ic='$ic2', p2_occupation='$occupation2',household='$household',income ='$income' ";
    $result.= " WHERE stud_ic='$id'";

    if(mysqli_query($dbconfig, $result) == TRUE){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_test_rk.php?id=".$id."';</script>";
    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}

if (isset($_POST['submit_contact'])) {
  
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $home = $_POST['home'];
  $mailadd = $_POST['mailaddress'];
  $postcode = $_POST['postcode'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $ic = $_POST['stud_ic'];


  $sql = "UPDATE contact SET email = '$email', phone = '$phone', home = '$home', mailaddress = '$mailadd', 
          postcode = '$postcode', city = '$city', stud_state = '$state', country = '$country' WHERE stud_ic = '$ic'";
  
  if (mysqli_query($dbconfig, $sql) == TRUE) {
    echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_contact.php?id=$ic';</script>";
  } else{
      echo "ERROR: Hush! Sorry $result. " 
          . mysqli_error($dbconfig);
  }
}

if (isset($_POST['submit_new_acd'])) {

$edu_type = $_POST['edu_type'];
$edu_school = $_POST['edu_school'];
$startYear = $_POST['startYear'];
$gainYear = $_POST['gainYear'];
$level = $_POST['level'];
$major = $_POST['major'];
$ic = $_POST['stud_ic'];
$fileA = $_FILES['fileA']['name'];
$newfilename=$ic."_".$fileA;
$target2 = "../sys/folder/academic/";
$target_file = $target2.basename($newfilename);

if (empty($fileA)) {
  $query = "INSERT INTO academic (stud_ic,edu_type,edu_school,edu_start,edu_end,edu_gred,edu_major) VALUES ('$ic','$edu_type','$edu_school','$startYear','$gainYear','$level','$major')";


  if(mysqli_query($dbconfig, $query) == TRUE){
  echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_academic.php';</script>";

   } else{
       echo "ERROR: Hush! Sorry $result. " 
           . mysqli_error($dbconfig);
   }
}else{

  $query = "INSERT INTO academic (stud_ic,edu_type,edu_school,edu_start,edu_end,edu_gred,edu_major,fileA) VALUES ('$ic','$edu_type','$edu_school','$startYear','$gainYear','$level','$major','$newfilename')";


   if(mysqli_query($dbconfig, $query) == TRUE){
    move_uploaded_file($_FILES['fileA']['tmp_name'], $target_file);
   echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_academic.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
  } 
}

if (isset($_POST['submit_new_acd_rk'])) {

  $edu_type = $_POST['edu_type'];
  $edu_school = $_POST['edu_school'];
  $startYear = $_POST['startYear'];
  $gainYear = $_POST['gainYear'];
  $level = $_POST['level'];
  $major = $_POST['major'];
  $ic = $_POST['stud_ic'];
  $fileA = $_FILES['fileA']['name'];
  $newfilename=$id."_".$fileA;
  $target2 = "../sys/folder/academic/";
  $target_file = $target2 . basename($newfilename);
  
  if (empty($fileA)) {
    $query = "INSERT INTO academic (stud_ic,edu_type,edu_school,edu_start,edu_end,edu_gred,edu_major) VALUES ('$id','$edu_type','$edu_school','$startYear','$gainYear','$level','$major')";
  
  
    if(mysqli_query($dbconfig, $query) == TRUE){
    echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_test_rk.php';</script>";
  
     } else{
         echo "ERROR: Hush! Sorry $result. " 
             . mysqli_error($dbconfig);
     }
  }else{
  
    $query = "INSERT INTO academic (stud_ic,edu_type,edu_school,edu_start,edu_end,edu_gred,edu_major,fileA) VALUES ('$id','$edu_type','$edu_school','$startYear','$gainYear','$level','$major','$newfilename')";
  
  
     if(mysqli_query($dbconfig, $query) == TRUE){
      move_uploaded_file($_FILES['fileA']['tmp_name'], $target_file);
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_test_rk.php';</script>";
  
      } else{
          echo "ERROR: Hush! Sorry $result. " 
              . mysqli_error($dbconfig);
      }
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

$fileA_update = $_FILES['fileA']['name'];
//$extension=end(explode(".", $fileA));
$newfilename=$fileA_update;
$target2 = "../sys/folder/academic/";
$target_file = $target2 . basename($newfilename);

// $target2 = "folder/workExp/" .basename($_FILES['fileA']['name']);
// $fileA_update = $_FILES['fileA']['name'];

  if (empty($fileA_update)) {

  $sql1= "UPDATE academic SET edu_type = '$edu_type', edu_school = '$edu_school', edu_start = '$startYear', edu_end= '$gainYear', edu_gred = '$level', 
  edu_major = '$major' where id = ' $id'";



      if ($dbconfig->multi_query($sql1) == TRUE) {

          echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_academic.php';</script>";
    }else
    {
          echo "<script>alert('Tidak dapat diproses');</script>";
    }
  }else {

     $sql2= "UPDATE academic SET edu_type = '$edu_type', edu_school = '$edu_school', edu_start = '$startYear', edu_end= '$gainYear', edu_gred = '$level', edu_major = '$major', fileA = '$newfilename' where id = '$id'";


     

      if ($dbconfig->multi_query($sql2) == TRUE) {

            move_uploaded_file($_FILES['fileA']['tmp_name'], $target_file);
            echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'edit_academic.php?id=$id';</script>";

      }else
      {
            echo "<script>alert('Tidak dapat diproses');</script>";
      }
  }
}

if (isset($_POST['submit_workexp'])) {
  
  $name = $_POST['filename'];
  $file = $_FILES['filename']['name'];
  $target = "folder/workExp/" .basename($_FILES['filename']['name']);
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


if (isset($_POST['submit_new_work'])) {


$ic = $_POST['stud_ic'];
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


//$target2 = "folder/workExp/" .basename($_FILES['fileWork']['name']);

$fileWork = $_FILES['fileWork']['name'];
$newfilenameW=$ic."_".$fileWork;
$target2 = "../sys/folder/workExp/";
$target_file = $target2 . basename($newfilenameW);


     $queryW = "INSERT INTO working_experience (stud_ic,type,position,year_start,year_end,category,organization,employer_name,employer_address,job_scope,significant,fileWork) VALUES ('$ic','$type','$wrkPostion','$edu_start','$edu_end','$edu_gred','$edu_major','$wrkPostion1','$wrkPostion2',
       '$wrkPostion3','$wrkPostion4','$newfilenameW')";


   if(mysqli_query($dbconfig, $queryW) == TRUE){
    move_uploaded_file($_FILES['fileWork']['tmp_name'], $target_file);
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_workexp.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}

if (isset($_POST['update_new_work'])) { 

$id = $_REQUEST['id'];
$studid = $_REQUEST['stud_id'];
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
$fileWork_update = $_FILES['fileWork']['name'];
//$extension=end(explode(".", $fileA));
$newfilenameW=$studid."_".$fileWork_update;
$target2 = "../sys/folder/workExp/";
$target_file = $target2 . basename($newfilenameW);


  if (empty($fileWork_update)) {

  $sql1= "UPDATE working_experience SET type = '$type', position = '$wrkPostion', year_start = '$edu_start', year_end= '$edu_end', category = '$edu_gred', organization = '$edu_major', employer_name = '$wrkPostion1', employer_address= '$wrkPostion2', job_scope = '$wrkPostion3', significant= '$wrkPostion4', fileWork = '$newfilenameW' where id = '$id'";

  $query= "SELECT modeAds from student WHERE stud_ic = '$studid'";
  $result=mysqli_query($dbconfig,$query);
  while($row = mysqli_fetch_array($result)){

    $mode = $row['modeAds'];
  }
    if ($dbconfig->multi_query($sql1) == TRUE) {
          
          echo "<script>alert('Data updated');</script>";
          if ($mode == 'ROPE') {
            echo "<script>window.location.assign('edit_workexp_rk.php?id=$id&stud_id=$studid;')</script>";
          }else{
            echo "<script>window.location.assign('edit_workexp.php?id=$id&stud_id=$studid;')</script>";
          }
    }else
    {
          echo "<script>alert('Tidak dapat diproses');</script>";
    }
  }else {

    $sql2= "UPDATE working_experience SET type = '$type', position = '$wrkPostion', year_start = '$edu_start', year_end= '$edu_end', category = '$edu_gred', organization = '$edu_major', employer_name = '$wrkPostion1', employer_address= '$wrkPostion2', job_scope = '$wrkPostion3', significant= '$wrkPostion4', fileWork = '$newfilenameW' where id = '$id'";

      if ($dbconfig->multi_query($sql2) == TRUE) {

            move_uploaded_file($_FILES['fileWork']['tmp_name'], $target_file);
            echo "<script>alert('Data updated');</script>";
            if ($mode == 'ROPE') {
              echo "<script>window.location.assign('edit_workexp_rk.php?id=$id&stud_id=$studid')</script>";
            }else{
              echo "<script>window.location.assign('edit_workexp.php?id=$id&stud_id=$studid')</script>";
            }
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



if (isset($_POST['submit_new_doc'])) {

$filename = $_POST['filename'];
$fileDoc = $_FILES['fileDoc']['name'];
$newfilenameD=$ic."_".$fileDoc;
$target2 = "../sys/folder/upload/";
$target_file = $target2 . basename($newfilenameD);

     $query = "INSERT INTO document (stud_ic,file_name,fileDoc) VALUES ('$ic','$filename','$fileDoc')";

  $query = "INSERT INTO document (stud_ic,namaFail,fileDoc) VALUES ('$ic','$filename','$fileDoc')";

   if(mysqli_query($dbconfig, $query) == TRUE){
    move_uploaded_file($_FILES['fileDoc']['tmp_name'], $target);
    echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_upload.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}


if (isset($_POST['update_new_doc'])) { 

$id = $_REQUEST['id'];
$filename = $_REQUEST['namaFail'];
$fileDoc_update = $_FILES['fileDoc']['name'];
$newfilenameD=$id."_".$fileDoc_update;
$target2 = "../sys/folder/upload/";
$target_file = $target2 . basename($newfilenameD);

  if (empty($fileDoc_update)) {

  $sql1= "UPDATE document SET namaFail = '$filename' where id = '$id'";

    if ($dbconfig->multi_query($sql1) == TRUE) {

          echo "<script>alert('Data updated');</script>";
          echo "<script>window.location.assign('tab_upload.php')</script>";
    }else
    {
          echo "<script>alert('Tidak dapat diproses');</script>";
    }
  }else {

     $sql2= "UPDATE document SET namaFail = '$filename', fileDoc = '$fileDoc_update' where id = '$id'";

      if ($dbconfig->multi_query($sql2) == TRUE) {

            move_uploaded_file($_FILES['fileDoc']['tmp_name'], $target_file);
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
                  //echo "<script>window.location.assign('tab_upload.php')</script>";
                }
 }
 
if (isset($_POST['enrol'])) {

    $namaProgram = $_REQUEST['namaProgram'];
    $code = $_REQUEST['code'];
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $now = date("Y-m-d H:i:s");
    $stud_id = $_REQUEST['stud_id'];
    $adsName = $_REQUEST['adsName'];
    $sql_u = "INSERT INTO programselection(pg_code,pg_name,keyin_date,stud_ic,batch,status) VALUES ('$code','$namaProgram','$now','$stud_id','$adsName','Applied')";
    //$res_u = mysqli_query($dbconfig, $sql_u); 


  if(mysqli_query($dbconfig, $sql_u) == TRUE){
    $sql_p = "UPDATE student SET app_status='Applied' where stud_ic='$stud_id'";
    if(mysqli_query($dbconfig, $sql_p) == TRUE){
      echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'view_submission.php';</script>";
 }} else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    } 
}


if (isset($_POST['submit_final'])) {
  $check_stud=mysqli_query($dbconfig,"select * from student where stud_ic='$ic'");
  while($stud=mysqli_fetch_array($check_stud)){

    $firstname=$stud['stud_name'];
    $nation=$stud['stud_nation'];
    $pob=$stud['pob'];
    $gender=$stud['gender'];
    $dob=$stud['dob'];
    $marital=$stud['marital'];
    $race=$stud['stud_race'];
    $religion=$stud['stud_religion'];
    $height=$stud['height'];
    $weight=$stud['weight'];

  }

  $check_parent=mysqli_query($dbconfig,"select * from parent where stud_ic='$ic'");
  while($parent=mysqli_fetch_array($check_parent)){
    $p1_name=$parent['p1_name'];
    $p1_ic=$parent['p1_ic'];
    $p1_occupation=$parent['p1_occupation'];
    $p2_name=$parent['p2_name'];
    $p2_ic=$parent['p2_ic'];
    $p2_occupation=$parent['p2_occupation'];
    $p_household=$parent['household'];
    $p_income=$parent['income'];

  }
  if($firstname!='' && $nation != '' && $pob != '' && $gender != '' && $dob != '' && $marital != '' && $race != '' && $religion != '' && $height != '' && $weight != '' && $p1_name != '' && $p1_ic != '' && $p1_occupation != '' && $p2_name != '' && $p2_ic != '' && $p2_occupation != '' && $p_household != '' && $p_income != '')
  {
  $sql = "UPDATE student (stud_ic,app_option,app_status) VALUES ('$ic','1','Submitted')";

  $result="UPDATE student AS a SET";
  $result.= " a.app_option='1', a.app_status='Submitted'";
  $result.= " WHERE a.stud_ic='$ic'";


if(mysqli_query($dbconfig, $result) == TRUE){
   echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'view_submission.php';</script>";

  }
  
} else{
     
      echo "<script type='text/javascript'>alert('PLEASE COMPLETE YOUR FORM BEFORE SUBMITTED!'); window.location.href = 'tab_personal.php';</script>";
  }

}


if (isset($_POST['submit_accept'])) {
  
  $tawaran = $_POST['tawaran'];
  $ic = $_POST['ic'];
  


  $sql = "UPDATE programselection SET status = '$tawaran' WHERE stud_ic = '$ic'";
  
  if (mysqli_query($dbconfig, $sql) == TRUE) {
    echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'view_status.php?id=$ic';</script>";
  } else{
      echo "ERROR: Hush! Sorry $result. " 
          . mysqli_error($dbconfig);
  }
}

    mysqli_close($dbconfig);
      
   
?>