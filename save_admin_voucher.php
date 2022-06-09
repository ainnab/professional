<?php

include_once 'config.php';
    error_reporting(E_ALL);




if ($_POST['action'] && $_POST['id']) {
  if ($_POST['action'] == 'Approved') {
    // edit the post with $_POST['id'] 
    $id=$_GET["id"];
 $q= "update voucher set status='APPROVED' where id='$id' ";

    if ($dbconfig2->query($q) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                  echo '<META http-equiv="refresh" content="0;URL=admin-dashboard.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }
  }
}



?>

