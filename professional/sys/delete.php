<?php
session_start();
$ic=$_SESSION['ic'];
$id=$_GET['id'];
include 'talum.php';
mysqli_query($dbconfig,"delete from `additional_qualification` where id='$id'");
echo "<script type='text/javascript'>alert('Data Deleted Successfully!'); window.location.href = 'tab_academic.php';</script>";
?>