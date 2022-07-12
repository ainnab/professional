<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <style>
body {
  background-image: url('img/header4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
.az-card-signin {
  height: 560px;
  padding: 20px;
  display: flex;
  flex-direction: column;
  opacity: 85%;
  justify-content: space-between;
  background-color: rgba(255, 255, 255, 0.98); }
  @media (min-width: 480px) {
    .az-card-signin {
      border: 1px solid #cdd4e0;
      width: 360px;
      padding: 30px 35px; } }
</style>

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <?php 
    session_start();

    include 'talum.php';
    if(isset($_POST['submit'])){
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  
  $sql = "select * from student where stud_email = '".$email."'";
  $rs = mysqli_query($dbconfig,$sql);
  $numRows = mysqli_num_rows($rs);


  if($numRows  == 1){
    $row = mysqli_fetch_assoc($rs);
    $_SESSION['ic']=$row['stud_ic'];
        $role=$row['role'];
        $rkstatus=$row['rk_status'];
        $status=$row['app_status'];
        $app=$row['app_option'];
        $_SESSION['role']=$role;
        //echo $ic;
    if(password_verify($password,$row['password'])){
      echo "Password verified";
    //   echo $app;
      // if ($role =='admin'){
      //   header("Location:dashboard3.php");
      // }
       if ($role =='admin1'){
        header("Location:dashboard3.php");
      }
      if ($role =='admin2'){
        header("Location:dashboard5.php");
      }
      if ($role =='admin3'){
        header("Location:dashboard6.php");
      }
      if ($role =='student' ){
        header("Location:dashboard2.php");
      }
      if ($role =='inst' && $rkstatus == 'Active' ){
        header("Location:dashboard_agent.php");
      }
      if ($role =='inst' && $rkstatus == 'Deactive' ){
        header("Location:dashboard_rk.php");
      }
      if ($role =='adminrk' ){
        header("Location:dashboard1.php");
      }
      
      if ($role =='finance' ){
        header("Location:dashboard_finance.php");
      }

    }
    else{
      echo "<script type='text/javascript'>alert('Wrong Password! Please try again!'); window.location.href = 'index.php';</script>";
    }
  }
  else{
    echo "<script type='text/javascript'>alert('No User found!'); window.location.href = 'index.php';</script>";
  }
    }
?>
  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <div align="center" ><img style="width:40%;" src="img/logo.png" ></div>
        <div class="az-signin-header">
          <h2>Welcome back!</h2>
          <h4>Please sign in to continue</h4>

          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="email" placeholder="Enter Email" >
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter your password" >
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block" type="submit" name="submit">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p>Don't have an account? <a href="signup.php">Create an Account</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>

    <script src="../js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
