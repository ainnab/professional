<?php
include 'talum.php';
session_start();

if (isset($_POST['submit_program'])) {

$progName = strtoupper($_POST['progName']);
$progCode = strtoupper($_POST['progCode']);
$duration = strtoupper($_POST['duration']);
$regDate = $_POST['regDate'];
$learningCentre = strtoupper($_POST['learningCentre']);
$Specialization = strtoupper($_POST['Specialization']);
$date_start = $_POST['date_start'];
$inst_name = strtoupper($_POST['instName']);
$adsName = strtoupper($_POST['adsName']);
// $modeAds = $_POST['modeAds'];
$target2 = "images/" .basename($_FILES['picDip']['name']);
$picDip = $_FILES['picDip']['name'];
$certificate = $_POST['certificate'];
$mode = $_POST['mode'];

   $query = "INSERT INTO program_diploma (pg_name,pg_code,duration,regDate,learningCentre,Specialization,inst_name,keyin_date,adsName,mode,picDip,certificate) VALUES ('$progName','$progCode','$duration','$regDate','$learningCentre','$Specialization','$inst_name','$date_start','$adsName','$mode','$picDip','$certificate')";


   if(mysqli_query($dbconfig, $query) == TRUE){
     move_uploaded_file($_FILES['picDip']['tmp_name'], $target2);
     if($mode == 'DIP'){
      echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_listprogramDip.php';</script>";
    }elseif($mode == 'BACHELOR'){
      echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_listprogramBch.php';</script>";
    }elseif($mode == 'SHORT COURSES'){
      echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_listprogramSC.php';</script>";  
    }else
    echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_listprogramMas.php';</script>";
  } else{
      echo "ERROR: Hush! Sorry $result. "
          . mysqli_error($dbconfig);
  }
}
if (isset($_POST['update_program'])) {

    $id = $_REQUEST['id'];
    $progName = strtoupper($_POST['progName']);
    $progCode = strtoupper($_POST['progCode']);
    $duration = strtoupper($_POST['duration']);
    $regDate = $_POST['regDate'];
    $learningCentre = strtoupper($_POST['learningCentre']);
    $Specialization = strtoupper($_POST['Specialization']);
    $inst_name = strtoupper($_POST['instName']);
    $date_start = $_POST['date_start'];
    $adsName =strtoupper($_POST['adsName']);
    // $$mode = $_POST['mode'];
    $certificate = $_POST['certificate'];
    $mode = $_POST['mode'];


    $sql2= "UPDATE program_diploma SET pg_name = '$progName', keyin_date= '$date_start', pg_code='$progCode',duration='$duration',regDate='$regDate',learningCentre='$learningCentre',Specialization='$Specialization',inst_name='$inst_name',adsName = '$adsName', certificate = '$certificate' where pg_id = '$id'";

  if(mysqli_query($dbconfig, $sql2) == TRUE){
      if($mode == 'DIP'){
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_listprogramDip.php';</script>";
      }elseif($mode == 'BACHELOR'){
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_listprogramBch.php';</script>";
      }elseif($mode == 'SHORT COURSES'){
      echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_listprogramSC.php';</script>";    
      }else
      echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_listprogramMas.php';</script>";
    } else{
        echo "ERROR: Hush! Sorry $result. "
            . mysqli_error($dbconfig);
    }
}
if(isset($_GET['deleteprog']))
      {

               $sql5= "delete from program_diploma where pg_id = '".$_GET['id']."'";
              if($dbconfig->multi_query( $sql5) == TRUE)
                {

                  echo "<script>alert('Successfully delete');</script>";
                  echo "<script>window.location.assign('tab_program.php')</script>";
                }

                else
                {
                  echo"<script>alert('Tidak dapat diproses');</script>";
                  echo "<script>window.location.assign('tab_program.php')</script>";
                }
 }
 if (isset($_POST['submit_status'])) {

    $ic = $_REQUEST['stud_ic'];
    $status = $_POST['status'];


    $sql2= "UPDATE programselection SET status = '$status' where stud_ic = '$ic'";

  if(mysqli_query($dbconfig, $sql2) == TRUE){
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_program.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. "
            . mysqli_error($dbconfig);
    }
}

if (isset($_POST['submit_module'])) {

$id = $_POST['id'];
$module = $_POST['module'];
$module_option = $_POST['module_option'];
$hours = $_POST['hours'];
$description = $_POST['description'];
$code = $_POST['code'];
$picModule = $_FILES['picModule']['name'];
$target5 = "images/" .basename($_FILES['picModule']['name']);

   $sql6 = "INSERT INTO module (id, module, module_option, hours, description, code_module, image) VALUES ('$id', '$module','$module_option','$hours','$description','$code','$picModule')";


   if(mysqli_query($dbconfig, $sql6) == TRUE){
     move_uploaded_file($_FILES['picModule']['tmp_name'], $target5);
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'umpa_eb_chemical.php?id=$id;'</script>";
     ?>
     <?php
    } else{
        echo "ERROR: Hush! Sorry $sql6 "
            . mysqli_error($dbconfig);
    }
}

if (isset($_POST['update_module'])) {

  $id = $_POST['id'];
  $module = $_POST['module'];
  $module_option = $_POST['option'];
  $hours = $_POST['hours'];
  $description = $_POST['description'];
  $code = $_POST['code'];
  $img = $_FILES['image']['name'];
  $target6 = "images/" .basename($_FILES['image']['name']);

  if (empty($img)) {
    $sql7 = "UPDATE module SET module = '$module', module_option = '$module_option', hours = '$hours', description = '$description',
    code_module = '$code' WHERE moduleid = '$id'";

    if($dbconfig -> multi_query($sql7) == TRUE){
      move_uploaded_file($_FILES['image']['tmp_name'], $target6);
      echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'module.php?id=$id;'</script>";
    }else {
      echo "ERROR: Hush! Sorry $result. "
          . mysqli_error($dbconfig);
    }
  }else {
      $sql8 = "UPDATE module SET module = '$module', module_option = '$module_option', hours = '$hours', description = '$description',
      code_module = '$code' WHERE moduleid = '$id'";

      if($dbconfig -> multi_query($sql8) == TRUE){
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'module.php?id=$id;'</script>";
      }else {
        echo "ERROR: Hush! Sorry $result. "
            . mysqli_error($dbconfig);
          }
        }
    }

    if(isset($_GET['deleteModule']))
          {

                   $sql2= "delete from module where id = '".$_GET['id']."'";
                  //$_SESSION['delmsg']="Succesfully deleted !!";
                  if($dbconfig->multi_query( $sql2) == TRUE)
                    {

                      echo "<script>alert('Successfully delete');</script>";
                      echo "<script>window.location.assign('tab_listprogramBch.php')</script>";
                    }

                    else
                    {
                      echo"<script>alert('Cannot be processed');</script>";
                    }
     }
?>

<?php
if (isset($_GET['approve'])) {

   $id = $_GET['id'];

   $sql = "UPDATE student SET app_status = 'Approved' WHERE id = '$id'";

   if ($dbconfig ->multi_query($sql) == TRUE) {

     echo "<script>alert('Student approved');</script>";
     echo "<script>window.location.assign('tab_listapplication3.php')</script>";
   }else {
     echo"<script>alert('Cannot be processed');</script>";
   }
}


if (isset($_GET['reject'])) {

   $id = $_GET['id'];

   $sql = "UPDATE student SET app_status = 'Rejected' WHERE id = '$id'";

   if ($dbconfig ->multi_query($sql) == TRUE) {

     echo "<script>alert('Student has been rejected');</script>";
     echo "<script>window.location.assign('tab_listapplication.php')</script>";
   }else {
     echo"<script>alert('Cannot be processed');</script>";
   }
}

if (isset($_GET['verify'])) {

   $id = $_GET['id'];

   $sql = "UPDATE student SET app_status = 'Verified' WHERE id = '$id'";

   if ($dbconfig ->multi_query($sql) == TRUE) {

     echo "<script>alert('Student has been verified');</script>";
     echo "<script>window.location.assign('tab_listapplication1.php')</script>";
   }else {
     echo"<script>alert('Cannot be processed');</script>";
   }
}

if (isset($_GET['verify1'])) {

   $id = $_GET['id'];

   $sql = "UPDATE student SET app_status = 'Verified' WHERE id = '$id'";

   if ($dbconfig ->multi_query($sql) == TRUE) {

     echo "<script>alert('Student has been verified');</script>";
     echo "<script>window.location.assign('tab_listapplication.php')</script>";
   }else {
     echo"<script>alert('Cannot be processed');</script>";
   }
}

if (isset($_GET['finance'])) {

   $id = $_GET['id'];

   $sql = "UPDATE student SET app_status = 'Finance' WHERE id = '$id'";

   if ($dbconfig ->multi_query($sql) == TRUE) {

     echo "<script>alert('Receipt has been verified');</script>";
     echo "<script>window.location.assign('tab_listapplicationFinance.php')</script>";
   }else {
     echo"<script>alert('Cannot be processed');</script>";
   }
}


if (isset($_POST['submit_progModule'])) {
    $modName = $_POST['modName'];
    $modCode = $_POST['modCode'];
    $modDuration = $_POST['modDuration'];
    

   echo $query = "INSERT INTO program_diploma (common_module,modCode,modDuration) VALUES ('$modName','$modCode','$modDuration')";


   /*if(mysqli_query($dbconfig, $query) == TRUE){
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_listmodule.php?id=$id;'</script>";
     ?>
     <?php
    } else{
        echo "ERROR: Hush! Sorry $query "
            . mysqli_error($dbconfig);
    }*/
}


 ?>

<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/ionicons/ionicons.js"></script>

<script src="js/azia.js"></script>
