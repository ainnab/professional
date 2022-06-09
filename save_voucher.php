<?php

include_once 'config.php';
    
     error_reporting(E_ALL);

 //$login_session=$_SESSION['username'];

if(isset($_SESSION['login_username']))
{

$login_session=$_SESSION['login_username'];
$sql_query="select * from mdl_user

inner join mdl_role_assignments on mdl_role_assignments.userid=mdl_user.id
inner join mdl_role on mdl_role.id = mdl_role_assignments.roleid

where mdl_user.username = '$login_session' ";

 $res=mysqli_query($dbconfig,$sql_query);
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $username = $userRow['username'];
  $userRole = $userRow['id'];
    $name = $userRow['firstname'];
    $name = $userRow['firstname']




}



        $name =$_REQUEST['name'];
           $username =$_REQUEST['username'];
        //$chkYes = $_REQUEST['chkYes'];
        //$chkYes1 = $_REQUEST['chkYes1'];
        $per_discount = $_REQUEST['per_discount'];
        $amount_off = $_REQUEST['amount_off'];
        $duration = $_REQUEST['duration'];
 $checkbox = $_REQUEST['checkbox'];
 $date_redeem = $_REQUEST['date_redeem'];
      $time = $_REQUEST['time'];
 $course = $_REQUEST['course'];

 if(isset($_REQUEST['checkbox2'])){$checkbox2 = $_REQUEST['checkbox2'];}

 if(isset($_REQUEST['chk'])){$chkYes = $_REQUEST['chk'];}

  if(isset($_REQUEST['per_discount'])){$per_discount = $_REQUEST['per_discount'];}
if(isset($_REQUEST['amount_off'])){$amount_off = $_REQUEST['amount_off'];}

  date_default_timezone_set("asia/kuala_lumpur");
  $dateToday = date('Y-m-d');


//filezip
$query1 = "INSERT INTO voucher (voucher_name,voucher_type,discount,amount_off,Duration,Limit_redem,Limit_total,time_limit,course,date_redeem,date_update,username) VALUES ('$name','$chkYes','$per_discount','$amount_off','$duration','$checkbox','$date_redeem','$time','$course','$date_redeem','$dateToday','$username')";


           if ($dbconfig2->query($query1) === TRUE) {
                    echo "<script>alert('Application successfully saved.')</script>";
                 echo '<META http-equiv="refresh" content="0;URL=manager_voucher.php">';
                  }else {
          echo "<script>alert('Opss! There is error')</script>";
          echo "Error updating record: " . $dbconfig2->error;
        }

    

?>

