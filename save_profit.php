<?php

include_once 'config.php';
    
     error_reporting(E_ALL);


        $earn_mooc =$_REQUEST['earn_mooc'];
        $earn_inst = $_REQUEST['earn_inst'];
        $profit_id = $_REQUEST['profit_id'];
        $contract = trim($_REQUEST['contract']);
       

  date_default_timezone_set("asia/kuala_lumpur");
  $dateToday = date('Y-m-d');
      

        //checkbox yuran
       
         //if(isset($_REQUEST['yuranSetuju'])){$yuranSetuju = $_REQUEST['yuranSetuju'];}
        //  if(isset($_REQUEST['inbois'])){$inbois = $_REQUEST['inbois'];}




//filezip
$query1 = "INSERT INTO profit (earn_mooc,earn_ins,id_profit,contract_info,date_today) VALUES ('$earn_mooc', '$earn_inst','$profit_id','$contract','$dateToday')";




            if ($dbconfig2->query($query1) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                   echo '<META http-equiv="refresh" content="0;URL=main-dashboard.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }


  


?>