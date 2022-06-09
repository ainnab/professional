<?php

include_once 'config.php';
    
     error_reporting(E_ALL);


        $id =$_REQUEST['cont_id'];
        $inst = $_REQUEST['inst'];
        $start_date = $_REQUEST['start_date'];
        $end_date = $_REQUEST['end_date'];
        $status = $_REQUEST['status'];
       
        
      

        //checkbox yuran
       
         //if(isset($_REQUEST['yuranSetuju'])){$yuranSetuju = $_REQUEST['yuranSetuju'];}
        //  if(isset($_REQUEST['inbois'])){$inbois = $_REQUEST['inbois'];}




//filezip
$query1 = "INSERT INTO contract_info (contract_id,institusi,start_date,end_date,status) VALUES ('$id', '$inst',' $start_date',' $start_date','$status')";


            if ($dbconfig2->query($query1) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                   echo '<META http-equiv="refresh" content="0;URL=main-dashboard.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }


  


?>