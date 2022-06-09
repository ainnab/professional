<?php

include_once 'config.php';
    error_reporting(E_ALL);




if ($_POST['action'] && $_POST['i']) {
  if ($_POST['action'] == 'Approved') {
    // edit the post with $_POST['id'] 
    $id=$_REQUEST['i'],
     $course=$_REQUEST['fullname'],
      $enrol_date=$_REQUEST['enrol_date'],




 $q= "INSERT INTO profit (earn_mooc,earn_ins,id_profit,contract_info,date_today) VALUES ('$earn_mooc', '$earn_inst','$profit_id','$contract','$dateToday ";

 //$query1 = "INSERT INTO profit (earn_mooc,earn_ins,id_profit,contract_info,date_today) VALUES ('$earn_mooc', '$earn_inst','$profit_id','$contract','$dateToday')";


    if ($dbconfig2->query($q) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                  echo '<META http-equiv="refresh" content="0;URL=main-dashboard.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }
  }
}



?>

