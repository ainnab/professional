<?php

include("config.php");
session_start();

if (isset($_POST['signin'])) {
    // username and password received from page-signin 
    $username = mysqli_real_escape_string($dbconfig, $_POST['username']);
    $password = mysqli_real_escape_string($dbconfig, $_POST['password']);

   // $passwordp = password_hash($password, PASSWORD_DEFAULT);
    //$password = password_hash($password, PASSWORD_BCRYPT);


   $sql_query = "SELECT * FROM mdl_user WHERE username='$username' ";

//$sql_query="SELECT * FROM mdl_course_categories cc INNER JOIN mdl_context cx ON cc.id = cx.instanceid INNER JOIN mdl_role_assignments ra ON cx.id = ra.contextid INNER JOIN mdl_role r ON ra.roleid = r.id INNER JOIN mdl_user usr ON ra.userid = usr.id where usr.username='$username' ";
   $res=mysqli_query($dbconfig,$sql_query);
    $userRow=mysqli_fetch_array( $res,MYSQLI_ASSOC);


  $passwordp = $userRow['password'];
  //$path =$userRow['path'];

  
    
    if(password_verify($password, $passwordp)){
        $_SESSION['username'] = $username;
       // $_SESSION['path'] = $path;
          $_SESSION['password'] = $password;
         
        header("location: ../ilmuplus/main-dashboard.php");
    } else {
        
        echo "<script>alert('Username or Password is invalid')</script>";

        header("location: ../index.html");
    }


}
