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


}



    

if(isset($_GET['deletewrk']))
      {

         //echo $id;

               $sql5= "delete from voucher where id = '".$_GET['id']."'";
              if($dbconfig2->multi_query( $sql5) == TRUE)
                {

                  echo "<script>alert('Successfully delete');</script>";
                echo "<script>window.location.assign('manager_voucher.php')</script>";
                }

                else
                {
                  echo"<script>alert('Error data');</script>";
                  //echo "<script>window.location.assign('tab_workexp.php')</script>";
                }
 }

?>

