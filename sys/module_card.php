<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>ADMISSION</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
    <?php
    include 'talum.php';
    session_start();

 if(isset($_SESSION['ic']))
{
  $login_session=$_SESSION['ic'];
   ?>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">

                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="view_submission.php">Home <span class="sr-only">(current)</span></a>
                        </li>

                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
      </div>

      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
              <?php
                  include 'talum.php';

               $id=$_REQUEST['id'];
  $stud_id=$_REQUEST['stud_id'];

  

                  $sql = "SELECT * FROM program_diploma where pg_code = '$id'";
                  $result = mysqli_query($dbconfig, $sql);

                    while($row = mysqli_fetch_array($result))
                          {
                               $program = $row['pg_name'];
                               $date =$row['dateCreated'];
                               $admission = $row['adsName'];
                               $mode = $row ['mode'];
                               $cert = $row['certificate'];

                               $idc = explode(',', $program);

               ?>
               <div class="col-md-12">
                  <div class="full">
                     <h3>   <?php echo strtoupper($id); ?></h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
           <div class="box">

                 <h5>Program Name :  <b> <?php echo strtoupper($program); ?></b></h5>
                 <h5>Date Created : <b> <?php echo $date; ?></b></h5>
                 <h5>Admission Name : <b> <?php echo $admission; ?></b></h5>
                 <h5>Mode of Admission : <b> <?php echo $mode; ?></b></h5>
                 <h5>Certificate Category : <b> <?php echo $cert; ?></b></h5>
               <?php } ?>
           </div>
            <div class="row">
              <?php

                  $sql2 = "SELECT * FROM module where id = '$idc'";
                  $result2 = mysqli_query($dbconfig, $sql2);

                  if (mysqli_num_rows($result2) > 0) {
                    while($row = mysqli_fetch_array($result2))
                          {
                               $module = $row['module'];
               ?>


               <div class="col-sm-1 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="detail-box">
                        <h5>
                           <?php echo ucwords($module); ?>
                        </h5>
                     </div>
                  </div>
               </div>




               <?php
                                      }
                                  }
                               ?>





         </div>
       </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      <footer class="footer_section">
         <div class="container">
            <div class="row">
               <div class="col-md-4 footer-col">
                  <div class="footer_contact">
                     <h4>
                        Reach at..
                     </h4>
                     <div class="contact_link_box">
                        <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                        Location
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                        Call +01 1234567890
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                        demo@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="footer_detail">
                     <a href="index.html" class="footer-logo">
                     Famms
                     </a>
                     <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                     </p>
                     <div class="footer_social">
                        <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="map_container">
                     <div class="map">
                        <div id="googleMap"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-info">
               <div class="col-lg-7 mx-auto px-0">
                  <p>
                     &copy; <span id="displayYear"></span> All Rights Reserved By
                     <a href="https://html.design/">Free Html Templates</a><br>

                     Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer section -->
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
   <?php
}
else {
  echo '<script>';
  echo 'alert("Session expired. Please login again.")';
  //echo 'window.href("index.php")';
  echo 'window.location = "../apela.php"';
  echo '</script>';
}
?>
</html>
