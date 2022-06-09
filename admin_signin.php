<?php

include("config.php");
session_start();

if (isset($_POST['signin'])) {
    // username and password received from page-signin 
    $username = mysqli_real_escape_string($dbconfig, $_POST['username']);
    $password = mysqli_real_escape_string($dbconfig, $_POST['password']);

   // $passwordp = password_hash($password, PASSWORD_DEFAULT);
    //$password = password_hash($password, PASSWORD_BCRYPT);

  // $sql_query = "SELECT * FROM mdl_user WHERE username='$username' ";
$sql_query="SELECT DISTINCT* FROM `mdl_config_log` as cl inner join mdl_user as u on u.id=cl.userid WHERE cl.name='siteadmins' and u.username='$username'";
  

    $result = mysqli_query($dbconfig, $sql_query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $passwordp = $row['password'];


    
    if(password_verify($password, $passwordp)){
        $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;
        header("location: ../ilmuplus/admin-dashboard.php");
    } else {
        //echo "not found";
        echo '<script>alert("Username or Password is invalid")</script>';
        //$error="Username or Password is invalid";
    }
}
