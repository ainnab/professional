<?php 
include 'talum.php';
session_start();
$ic=$_SESSION['ic'];
  $stud_id = $_REQUEST['id'];
//$ic=$_SESSION['ic'];
 $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'");

 $sql_query="select * from student where stud_ic='$ic' ";

  $res=mysqli_query($dbconfig,$sql_query);
  //echo $sql_query;
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $role = $userRow['role'];
  $agent = $userRow['agent'];



// if (isset($_POST['submit_program'])) {
    
  
//     $id = $_REQUEST['id'];
//     $mode = $_REQUEST['seeAnotherField'];
//     $agent = $_REQUEST['otherField'];
//     $program = $_REQUEST['otherPO'];

//     $records = mysqli_query($dbconfig,"select * from application where stud_ic='$id'");

//     while($data = mysqli_fetch_array($records)) {

    

//     }


//     $sql2= "UPDATE application SET first_choice = '$mode', second_choice = '$agent',third_choice = '$program' where stud_ic = '$ic'";


//   if(mysqli_query($dbconfig, $sql2) == TRUE){
//      //echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_test.php?id=".$stud_id."';</script>";

//     } else{
//         echo "ERROR: Hush! Sorry $result. " 
//             . mysqli_error($dbconfig);
//     }
// }




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

 $id = $_REQUEST['id'];



  $result="UPDATE student AS a SET";
  $result.= " a.stud_name='$firstname', a.stud_nation='$nation', a.pob='$pob', a.gender='$gender',  a.about='$about',a.dob='$dob', a.marital='$marital', a.stud_race='$race', a.stud_religion='$religion', a.nooku='$nooku', a.okutype='$okutype', a.height='$height', a.weight='$weight'";
  $result.= " WHERE a.stud_ic='$id' ";



  //$res2=mysqli_query($dbconfig, $result);
    if(mysqli_query($dbconfig, $result) == TRUE){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_test.php?id=$id';</script>";

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
    $result.= " WHERE stud_ic='$stud_id'";

    //$result2="UPDATE data_ptmk SET";
    //$result2.= " NAMA='$id', EMAIL='$email', TELBIMBIT='$phone', TELEFON='$home', WARGA_JPN='$nation', TMPTLAHIR='$pob', JANTINA_JPN='$gen', UMUR='$age', TRKLAHIR_JPN='$dob', KAHWIN='$mar', KAUM_JPN='$race', AGAMA_JPN='$rel', ALAM1='$add1', ALAM2='$add2', BANDAR='$city', POSKOD='$postcode', NEGERI='$state', NOOKU='$nooku', JENCACAT='$okutype'";
    //$result2.= " WHERE NOKP='$ic'";

    //$res2=mysqli_query($dbconfig, $result);
    if(mysqli_query($dbconfig, $result) == TRUE){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_test.php?id=$id';</script>";
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



//$target2 = "../sys/folder/academic/".basename($_FILES['fileA']['name']);

$fileA = $_FILES['fileA']['name'];

$newfilename=$stud_id."_".$fileA;
$target2 = "../sys/folder/academic/";
$target_file = $target2 . basename($newfilename);


     $query = "INSERT INTO academic (stud_ic,edu_type,edu_school,edu_start,edu_end,edu_gred,edu_major,fileA) VALUES ('$stud_id','$edu_type','$edu_school','$startYear','$gainYear','$level','$major','$newfilename')";


   if(mysqli_query($dbconfig, $query) == TRUE){
    move_uploaded_file($_FILES['fileA']['tmp_name'], $target_file);
   echo $fileA; // echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_test.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}
if (isset($_POST['update_new_acd'])) { 

$id = $_REQUEST['id'];
$studid = $_REQUEST['stud_id'];
$edu_type = $_POST['edu_type'];
$edu_school = $_POST['edu_school'];
$startYear = $_POST['startYear'];
$gainYear = $_POST['gainYear'];
$level = $_POST['level'];
$major = $_POST['major'];

$fileA_update = $_FILES['fileA']['name'];
//$extension=end(explode(".", $fileA));
$newfilename=$studid."_".$fileA_update;
$target2 = "../sys/folder/academic/";
$target_file = $target2 . basename($newfilename);

// $target2 = "folder/workExp/" .basename($_FILES['fileA']['name']);
// $fileA_update = $_FILES['fileA']['name'];

  if (empty($fileA_update)) {

  $sql1= "UPDATE academic SET edu_type = '$edu_type', edu_school = '$edu_school', edu_start = '$startYear', edu_end= '$gainYear', edu_gred = '$level', edu_major = '$major',fileA = '$newfilename' where id = ' $id'";



    if ($dbconfig->multi_query($sql1) == TRUE) {

          echo "<script>alert('Data updated');</script>";
         // echo "<script>window.location.assign('dashboard_agent.php')</script>";
    }else
    {
          echo "<script>alert('Tidak dapat diproses');</script>";
    }
  }else {

     $sql2= "UPDATE academic SET edu_type = '$edu_type', edu_school = '$edu_school', edu_start = '$startYear', edu_end= '$gainYear', edu_gred = '$level', edu_major = '$major', fileA = '$newfilename' where id = '$id'";


     

      if ($dbconfig->multi_query($sql2) == TRUE) {

            move_uploaded_file($_FILES['fileA']['tmp_name'], $target_file);
            echo "<script>alert('Data updated');</script>";
            //window.close();
        
            // echo "<script>window.location.assign('status_inst.php')</script>";
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
                 echo "<script>window.location.assign('status_inst.php')</script>";
                }

                else
                {
                  echo"<script>alert('Tidak dapat diproses');</script>";
                  echo "<script>window.location.assign('status_inst.php')</script>";
             }
 }


if (isset($_POST['submit_new_work'])) {



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
$newfilenameW=$stud_id."_".$fileWork;
$target2 = "../sys/folder/workExp/";
$target_file = $target2 . basename($newfilenameW);


     $queryW = "INSERT INTO working_experience (stud_ic,type,position,year_start,year_end,category,organization,employer_name,employer_address,job_scope,significant,fileWork) VALUES ('$stud_id','$type','$wrkPostion','$edu_start','$edu_end','$edu_gred','$edu_major','$wrkPostion1','$wrkPostion2',
       '$wrkPostion3','$wrkPostion4','$newfilenameW')";


   if(mysqli_query($dbconfig, $queryW) == TRUE){
    move_uploaded_file($_FILES['fileWork']['tmp_name'], $target_file);
     //echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_workexp.php';</script>";

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



// $target2 = "folder/workExp/" .basename($_FILES['fileWork']['name']);
// $fileWork_update = $_FILES['fileE']['name'];

// $fileWork = $_FILES['fileWork']['name'];
// $newfilenameW=$stud_id."_".$fileWork;
// $target2 = "../sys/folder/workExp/";
// $target_file = $target2 . basename($newfilenameW);


$fileWork_update = $_FILES['fileWork']['name'];
//$extension=end(explode(".", $fileA));
$newfilenameW=$studid."_".$fileWork_update;
$target2 = "../sys/folder/workExp/";
$target_file = $target2 . basename($newfilenameW);


  if (empty($fileWork_update)) {

  echo $sql1= "UPDATE working_experience SET type = '$type', position = '$wrkPostion', year_start = '$edu_start', year_end= '$edu_end', category = '$edu_gred', organization = '$edu_major', employer_name = '$wrkPostion1', employer_address= '$wrkPostion2', job_scope = '$wrkPostion3', significant= '$wrkPostion4', fileWork = '$newfilenameW' where id = '$id'";

    if ($dbconfig->multi_query($sql1) == TRUE) {

          echo "<script>alert('Data updated');</script>";
          //echo "<script>window.location.assign('tab_workexp.php')</script>";
    }else
    {
          echo "<script>alert('Tidak dapat diproses');</script>";
    }
  }else {

    $sql2= "UPDATE working_experience SET type = '$type', position = '$wrkPostion', year_start = '$edu_start', year_end= '$edu_end', category = '$edu_gred', organization = '$edu_major', employer_name = '$wrkPostion1', employer_address= '$wrkPostion2', job_scope = '$wrkPostion3', significant= '$wrkPostion4', fileWork = '$newfilenameW' where id = '$id'";

      if ($dbconfig->multi_query($sql2) == TRUE) {

            move_uploaded_file($_FILES['fileWork']['tmp_name'], $target_file);
            echo "<script>alert('Data updated');</script>";
            //echo "<script>window.location.assign('tab_workexp.php')</script>";
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
                // echo "<script>window.location.assign('tab_workexp.php')</script>";
                }

                else
                {
                  echo"<script>alert('Tidak dapat diproses');</script>";
                  //echo "<script>window.location.assign('tab_workexp.php')</script>";
                }
 }



if (isset($_POST['submit_new_doc'])) {

$filename = $_POST['filename'];


$fileDoc = $_FILES['fileDoc']['name'];
$newfilenameD=$stud_id."_".$fileDoc;
$target2 = "../sys/folder/upload/";
$target_file = $target2 . basename($newfilenameD);

     $query = "INSERT INTO document (stud_ic,file_name,fileDoc) VALUES ('$stud_id','$filename','$fileDoc')";


   if(mysqli_query($dbconfig, $query) == TRUE){
    move_uploaded_file($_FILES['fileDoc']['tmp_name'], $target_file);
    // echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_upload.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}


if (isset($_POST['update_new_doc'])) { 

$id = $_REQUEST['id'];
$studid = $_REQUEST['stud_id'];

$filename = $_REQUEST['filename'];

$fileDoc_update = $_FILES['fileDoc']['name'];
$newfilenameD=$stud_id."_".$fileDoc_update;
$target2 = "../sys/folder/upload/";
$target_file = $target2 . basename($newfilenameD);

  if (empty($fileDoc_update)) {

  $sql1= "UPDATE document SET file_name = '$filename' where id = '$id'";

    if ($dbconfig->multi_query($sql1) == TRUE) {

          echo "<script>alert('Data updated');</script>";
          //echo "<script>window.location.assign('tab_upload.php')</script>";
    }else
    {
          echo "<script>alert('Tidak dapat diproses');</script>";
    }
  }else {

     $sql2= "UPDATE document SET file_name = '$filename', fileDoc = '$fileDoc_update' where id = '$id'";

      if ($dbconfig->multi_query($sql2) == TRUE) {

            move_uploaded_file($_FILES['fileDoc']['tmp_name'], $target_file);
            echo "<script>alert('Data updated');</script>";
            //echo "<script>window.location.assign('tab_upload.php')</script>";
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
                 //echo "<script>window.location.assign('tab_upload.php')</script>";
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
    $stud_id = $_REQUEST['stud_id'];
    $sql_u = "UPDATE programselection SET pg_code = '$code', pg_name='$namaProgram',status='pending' where stud_ic ='$stud_id'";
    $res_u = mysqli_query($dbconfig, $sql_u);


  if(mysqli_query($dbconfig, $sql_u) == TRUE){
    //  echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'status_inst.php';</script>";
 } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
 
}
// if (isset($_POST['submit_program'])) {
    
  
//     $id = $_REQUEST['id'];
//     $mode = $_REQUEST['seeAnotherField'];
//     $agent = $_REQUEST['otherField'];
//     $program = $_REQUEST['otherPO'];

//     $records = mysqli_query($dbconfig,"select * from application where stud_ic='$id'");

//     while($data = mysqli_fetch_array($records)) {

    

//     }


//     $sql2= "UPDATE application SET first_choice = '$mode', second_choice = '$agent',third_choice = '$program' where stud_ic = '$id'";


//   if(mysqli_query($dbconfig, $sql2) == TRUE){
//      //echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'display.php';</script>";

//     } else{
//         echo "ERROR: Hush! Sorry $result. " 
//             . mysqli_error($dbconfig);
//     }
// }



 if (isset($_POST['submit_final'])) {
    
    /*$id = $_REQUEST['id'];*/
    /*$customCheck1 = $_REQUEST['customCheck1'];
*/
   $sql = "UPDATE student (stud_ic,app_option,app_status) VALUES ('$ic','1','Submitted')";

    $result="UPDATE student AS a SET";
    $result.= " a.app_option='1', a.app_status='Submitted'";
    $result.= " WHERE a.stud_ic='$stud_id'";


  if(mysqli_query($dbconfig, $result) == TRUE){
     //echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'view_submission.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}




    mysqli_close($dbconfig);
      
   
?>