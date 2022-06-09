<?php

include_once 'config.php';

session_start();
     error_reporting(E_ALL);


if (isset($_POST['save'])) {

 
if(!empty($_POST['row_id'])) {
 
  if(!empty($_REQUEST['course'])) {
          foreach($_REQUEST['course'] as $cname){
            $courseList[] = $cname;
            $courseName = implode (',',$courseList);


          }
        }




 $cid = $_REQUEST['cid'];


 if(!empty($_REQUEST['courseOwner'])) {
          foreach($_REQUEST['courseOwner'] as $name){
            $nameList[] = $name;
            $co_name = implode (',',$nameList);


          }
        }

 


 
     if(!empty($_REQUEST['weight'])) {
          foreach($_REQUEST['weight'] as $weight){
            $weightList[] = $weight;
            $co_weight= implode (',',$weightList);


          }
        }
    
    if(isset($_POST['remarks'])){
       if(!empty($_REQUEST['remarks'])) {
          foreach($_REQUEST['remarks'] as $rem){
            $remarkList[] = $rem;
            $remarks= implode (',',$remarkList);


          }
        }}


          if(isset($_POST['remarks'])){
       if(!empty($_REQUEST['remarks'])) {
          foreach($_REQUEST['remarks'] as $rem){
            $remarkList[] = $rem;
            $remarks= implode (',',$remarkList);


          }
        }}

if(isset($_POST['leader'])){
       if(!empty($_REQUEST['leader'])) {
          //foreach($_REQUEST['leader'] as $led){
           //$ledList[] = $led;
            $leader= implode (',',$_REQUEST['leader']);


         // }
        }}


  date_default_timezone_set("asia/kuala_lumpur");
  $dateToday = date('Y-m-d');

$login_session=$_SESSION['username'];


        $query1="UPDATE cs_owner set co_weight='$co_weight',remarks='$remarks',new_date='$dateToday',leader_co='$leader' where code='$cid'";


//$result = mysqli_query($dbconfig2, $query1);

if ($dbconfig2->query($query1) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                   echo '<META http-equiv="refresh" content="0;URL=coordinator_co_list.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }


   // if(!$result){die("QUERY FAILED " . mysqli_error($dbconfig2));}
   // if(!$dbconfig2){echo "NOT connected";}
   
}
}






  











?>

