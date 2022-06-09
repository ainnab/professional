<?php

include_once 'config.php';

date_default_timezone_set("asia/kuala_lumpur");
$currentTime = date("Y-m-d");

//maklumat akses_keselamatan
$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
//$email = $_REQUEST['email'];
$ic_number = $_REQUEST['ic_number'];
$phone_no = $_REQUEST['phone_no'];
$my_course = $_REQUEST['my_course']; 
$receipt_no = $_REQUEST['receipt_no'];

$explanation = $_REQUEST['explanation'];
 



//add information pemohon
 $sql1 = "INSERT INTO refund_payment (username,name,ic_number,phone_no,my_course,receipt_no,explanation,date_refund)VALUES ('$username','$name','$ic_number','$phone_no','$my_course','$receipt_no','$explanation','$currentTime')";
 //$result1 = mysqli_query($dbconfig, $sql1) or die ("tidak dapat diproses");

  if ($dbconfig2->query($sql1) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                  echo '<META http-equiv="refresh" content="0;URL=main-dashboard.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }

$dbconfig2->close();


?>







