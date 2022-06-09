<?php

include_once 'config.php';

session_start();
   //  error_reporting(E_ALL);

       


if (isset($_POST['save'])) {
 
if(!empty($_POST['row_id'])) {
 
  if(!empty($_REQUEST['course'])) {
          foreach($_REQUEST['course'] as $cname){
            $courseList[] = $cname;
            $courseName = implode (',',$courseList);


          }
        }


 if(!empty($_REQUEST['courseOwner'])) {
          foreach($_REQUEST['courseOwner'] as $name){
            $nameList[] = $name;
            $co_name = implode (',',$nameList);


          }
        }

 
 $cid = $_REQUEST['cid'];

 
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

            if(isset($_POST['status'])){
       if(!empty($_REQUEST['status'])) {
          foreach($_REQUEST['status'] as $sta){
            $staList[] = $sta;
            $status= implode (',',$staList);


          }
        }}

        if(isset($_POST['leader'])){
       if(!empty($_REQUEST['leader'])) {
          //foreach($_REQUEST['leader'] as $led){
           // $ledList[] = $led;
            $leader= implode (',',$_REQUEST['leader']);


         // }
        }}


  date_default_timezone_set("asia/kuala_lumpur");
  $dateToday = date('Y-m-d');

$login_session=$_SESSION['username'];


        $query1 = "INSERT INTO cs_owner (course_name,code,course_owner,co_weight,remarks,tarikh_update,login_name,status,leader_co) VALUES ('$courseName','$cid','$co_name','$co_weight','$remarks','$dateToday','$login_session','$status','$leader')";



//$result = mysqli_query($dbconfig2, $query1);

if ($dbconfig2->query($query1) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                   echo '<META http-equiv="refresh" content="0;URL=coordinator_course_owner.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }


   // if(!$result){die("QUERY FAILED " . mysqli_error($dbconfig2));}
   // if(!$dbconfig2){echo "NOT connected";}
   
}
}



?>

