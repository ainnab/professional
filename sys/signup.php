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

    <title>Admission</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <style>
body {
  background-image: url('img/header6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100%;
}
.az-column-signup {
  background-color: #fff;
  padding: 30px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  opacity: 80%;
 }
</style>
    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <?php include 'talum.php';
 
    if(isset($_POST['submit'])){
		$name = strtoupper($_POST['name']);
		$ic = $_POST['ic'];
    $email = $_POST['email'];
    $role = 'student';
		
		$options = array("cost"=>4);
		$hashPassword = password_hash($ic,PASSWORD_BCRYPT,$options);
    $sql_u = "SELECT * FROM student WHERE stud_ic='$ic'";
  	$res_u = mysqli_query($dbconfig, $sql_u);
    $dte = date('d/m/Y');

    if (mysqli_num_rows($res_u) > 0) {
  	  echo "<script type='text/javascript'>alert('Sorry.. you already signup.Please sigin!'); window.location.href = 'signup.php';</script>";
  	
  	}else{
		
		$sql = "insert into student (stud_name, stud_ic, password, stud_email, modeAds, role, app_status, date, app_option) value('".$name."', '".$ic."','".$hashPassword."','NORMAL',".$email."','".$role."','Register','".$dte."','0')";
		$result = mysqli_query($dbconfig, $sql);
		if($result)
		{
      $sql2 = "insert into parent (stud_ic) value('".$ic."')";
		  $result2 = mysqli_query($dbconfig, $sql2);
      if($result2){
        $sql3 = "insert into qualification_info (stud_ic) value('".$ic."')";
		    $result3 = mysqli_query($dbconfig, $sql3);}
        if($result3){
         $sql4 = "insert into application (stud_ic, intake) value('".$ic."','sem1 22/23')";
		     $result4 = mysqli_query($dbconfig, $sql4);}
          if($result4){
            $sql5 = "insert into data_ptmk (NOKP,NOKPFIN) value('".$ic."','".$ic."')";
		        $result5 = mysqli_query($dbconfig, $sql5);}
            if($result5){
              $sql6 = "insert into contact (stud_ic, email) value('".$ic."', '".$email."')";
              $result6 = mysqli_query($dbconfig, $sql6);
          
        echo "<script type='text/javascript'>alert('Registration Successfully!'); window.location.href = 'signin.php';</script>";
      }
      else{
        echo "opps! something was wrong.". mysqli_error($dbconfig);;
      }
			
		}



  }
    }

  ?>
  <body class="az-body">

    <div class="az-signup-wrapper">
      <div class="az-column-signup-left">
        <div>
          <i class=""></i>
        </div>
      </div><!-- az-column-signup-left -->
      <div class="az-column-signup">
        <h1 class="az-logo"></h1><div align="center" ><img style="width:40%;" src="img/logo.png" ></div>
        <div class="az-signup-header">
          <h2>Sign Up</h2>
          <h4>Please sign up to create account.</h4>

          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your firstname and lastname"  style="text-transform:uppercase" required>
            </div><!-- form-group -->
            <div class="form-group">
              <label>IC Number (Example:12345678900)</label>
              <input type="number" class="form-control" name="ic" placeholder="Enter IC number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;">
            </div><!-- form-group -->
        
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div><!-- form-group -->
            <!-- <div class="form-group">
              <label>Role</label><br>
             <input type="radio" id="student" name="role" value="student">
  <label for="student">Student</label>
  <input type="radio" id="inst" name="role" value="inst">
  <label for="inst">Institution</label><br>
            </div> -->
            <button class="btn btn-az-primary btn-block" type="submit" name="submit">Create Account</button>
           
          </form>
        </div><!-- az-signup-header -->
        <div class="az-signup-footer">
          <p>Already have an account? <a href="index.php">Sign In</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-column-signup -->
    </div><!-- az-signup-wrapper -->

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
