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

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <?php include 'talum.php';
 
    if(isset($_POST['submit'])){
		$name = mysqli_real_escape_string(strtoupper($_POST['name']));
		$ic = mysqli_real_escape_string($_POST['ic']);
		$password = $_POST['password'];
    $phone = mysqli_real_escape_string($_POST['phone']);
    $email = mysqli_real_escape_string($_POST['email']);
		
		$options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
    $sql_u = "SELECT * FROM student WHERE stud_ic='$ic'";
  	$res_u = mysqli_query($dbconfig, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
  	  echo "<script type='text/javascript'>alert('Sorry.. you already signup.Please signin!'); window.location.href = 'signin.php';</script>";
  	
  	}else{
		
		$sql = "insert into student (stud_name, stud_ic, password, stud_email, stud_phone) value('".$name."', '".$ic."','".$hashPassword."','".$email."','".$phone."')";
		$result = mysqli_query($dbconfig, $sql);
		if($result)
		{
      $sql2 = "insert into parent (stud_ic) value('".$ic."')";
		  $result2 = mysqli_query($dbconfig, $sql2);
      if($result2){
        $sql3 = "insert into qualification_info (stud_ic) value('".$ic."')";
		    $result3 = mysqli_query($dbconfig, $sql3);}
        if($result3){
          $sql4 = "insert into application (stud_ic) value('".$ic."')";
		      $result4 = mysqli_query($dbconfig, $sql4);
        echo "<script type='text/javascript'>alert('Registration Successfully!'); window.location.href = 'signin.php';</script>";
      }else{
        echo "opps! something was wrong.";
      }
			
		}



  }
}

  ?>
  <body class="az-body">

    <div class="az-signup-wrapper">
      <div class="az-column-signup-left">
        <div>
          <i class="typcn typcn-chart-bar-outline"></i>
          <h1 class="az-logo">admission</h1>
          <h5>Responsive Modern Dashboard &amp; Admin Template</h5>
          <p>We are excited to launch our new company and product Azia. After being featured in too many magazines to mention and having created an online stir, we know that BootstrapDash is going to be big. We also hope to win Startup Fictional Business of the Year this year.</p>
          <p>Browse our site and see for yourself why you need Azia.</p>
          <a href="index.html" class="btn btn-outline-indigo">Learn More</a>
        </div>
      </div><!-- az-column-signup-left -->
      <div class="az-column-signup">
        <h1 class="az-logo">admission</h1>
        <div class="az-signup-header">
          <h2>Welcome</h2>
          <h4>Please signup to create account.</h4>

          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your firstname and lastname"  style="text-transform:uppercase" required>
            </div><!-- form-group -->
            <div class="form-group">
              <label>Identical Card Number (Example:12345678900)</label>
              <input type="text" class="form-control" name="ic" placeholder="Enter identical card number" maxlength='12'>
            </div><!-- form-group -->
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block" type="submit" name="submit">Create Account</button>
           
          </form>
        </div><!-- az-signup-header -->
        <div class="az-signup-footer">
          <p>Already have an account? <a href="signin.php">Sign In</a></p>
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
