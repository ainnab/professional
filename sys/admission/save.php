<?php 
include 'talum.php';
session_start();

if (isset($_POST['submit_program'])) {

$progName = $_POST['progName'];
$date_start = $_POST['date_start'];
$adsName = $_POST['adsName'];
$modeAds = $_POST['modeAds'];
$target2 = "images/" .basename($_FILES['picDip']['name']);
$picDip = $_FILES['picDip']['name'];
$certificate = $_POST['certificate'];

   $query = "INSERT INTO program (programName,dateCreated,adsName,mode,picDip,certificate) VALUES ('$progName','$date_start','$adsName','$modeAds','$picDip','$certificate')";


   if(mysqli_query($dbconfig2, $query) == TRUE){
     move_uploaded_file($_FILES['picDip']['tmp_name'], $target2);
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_program.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig2);
    }
}
if (isset($_POST['update_program'])) {
    
    $id = $_REQUEST['id'];
    $progName = $_POST['progName'];
    $date_start = $_POST['date_start'];
    $adsName = $_POST['adsName'];
    $modeAds = $_POST['modeAds'];
    $certificate = $_POST['certificate'];

  
    $sql2= "UPDATE program SET programName = '$progName', dateCreated = '$date_start', adsName = '$adsName', mode = '$modeAds', certificate = '$certificate' where id = '$id'";

  if(mysqli_query($dbconfig2, $sql2) == TRUE){
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_program.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig2);
    }
}
if(isset($_GET['deleteprog']))
      {

               $sql5= "delete from program where id = '".$_GET['id']."'";
              if($dbconfig2->multi_query( $sql5) == TRUE)
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

  if(mysqli_query($dbconfig2, $sql2) == TRUE){
     echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_program.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig2);
    }
}
?>