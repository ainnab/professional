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

    <title>ILMUPLUS</title>
    <link rel="icon" href="img/ILMUPLUS.jpeg"> 

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">

  </head>
  <body class="az-body">

    <div class="az-signup-wrapper">
      <div class="az-column-signup-center">
        <div>
          <img src="img/petaminda.jpeg" alt="ilmuplus" >
        </div>

      </div><!-- az-column-signup-left -->
      <div class="az-column-signup">
        <img src="img/ILMUPLUS.jpeg" alt="ilmuplus" >
      <div class="az-signin-header">
          <h1 align="center">Welcome back!</h1>
          <h2 align="center">Please sign in to continue</h2>
          <br>

          <form action="signin.php" method="POST">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" placeholder="Enter your username" id="username" name="username" required>
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block" type="submit" name="signin">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signup-footer">
          <p>Login As Superadmin <a href="admin_signin.html">Sign In</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-column-signup -->
    </div><!-- az-signup-wrapper -->

    <script src="lib/jquery/jquery.min.js"></script>
    
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
