<?php
session_start();
$ic=$_SESSION['ic'];
$id=$_GET['id'];
include 'talum.php';
// $r=mysqli_query($dbconfig,"select file_name from `document` where id='$id'");
// while ($row = mysqli_fetch_array($r)) {
//     $r2=$row['file_name'];
// echo $r2;
// unlink($r2);
// }
// unlink($id);
// mysqli_query($dbconfig,"delete from `document` where id='$id'");

// echo "<script type='text/javascript'>alert('Data Deleted Successfully!'); window.location.href = 'tab_upload.php';</script>";


$query=mysqli_query($dbconfig, "SELECT * FROM `document` WHERE `id`='$id'") or die(mysqli_error());
$fetch=mysqli_fetch_array($query);

$location=$fetch['location'];
$loc= trim($location);

if(unlink($loc)){
    mysqli_query($dbconfig,"delete from `document` where id='$id'");

    echo "<script type='text/javascript'>alert('Data Deleted Successfully!'); window.location.href = 'tab_upload.php';</script>";
}
?>