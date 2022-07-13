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
  $ic=$_SESSION['ic'];

 $recordA = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    while($dataA = mysqli_fetch_array($recordA)) { 
        $role = $dataA['role'];
      $agent=$dataA['stud_name']; 
      $stud_id = $_REQUEST['id'];

   
   ?>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <form action="umpa_pd_business.php" method="post" class="login">
           
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="dashboard2.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                       
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>UMP ADVANCED EDUCATION</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">

          
            <div class="heading_container heading_center">
               <h2>
                  Bachelor <span>Eksekutif</span>
               </h2>
            </div>
            <div class="row">
<?php
if (isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 1;


$entriesPerPage = 10;
$limitFrom = $page - 1;
$limitTill = $limitFrom + $entriesPerPage;

$sql3 = "SELECT * FROM program_diploma where mode='BACHELOR' and inst_name='$agent' LIMIT $limitFrom, $limitTill ";

$result3 = mysqli_query($dbconfig, $sql3);

if(mysqli_num_rows($result3) > 0)
                                    {


  while($row = mysqli_fetch_array($result3))
                                         {

                                          $id= $row['pg_code'];
   $code = $row['pg_name'];
   $inst_name = $row['inst_name'];
                                   

                                    $ids = explode(',', $id);
                                      $codes = explode(',', $code);



                                      foreach($ids as $indx => $value){


?>

 
               <div class="col-sm-1 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="programDesc.php?id=<?php echo $id;?>&stud_id=<?php echo $stud_id;?>" class="option1">
                           Enroll Now
                           </a>

                           <!-- <button name="submit" class="btn btn-primary btn-md">APPLY</button></a><br> -->

                        </div>
                     </div> <center><?php echo $inst_name; ?></center>
                     
                     <div class="detail-box">
                       <h5>
                           <?php echo $code; ?>
                        </h5>
              
                     </div>
                  </div>
               </div>


              
              
               <?php
                                      }}
                                  } 
                               ?>
              
             
            
             
           
         </div>
 <hr class="mg-y-30">

          <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">

        <button class="btn btn-outline-indigo ">  <a href="degree.php?page=<?=$page-1?>">Previous</a></button>
<button class="btn btn-outline-indigo"><a href="degree.php?page=<?=$page+1?>">Next</a></button>
</div>
</div>

       </div>
      </section>
      <!-- end product section -->
     <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2022 UMP Advanced, Malaysia· All rights reserved.</span>
        </div><!-- container -->
      </div><!-- az-footer -->
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
}}
else {
  echo '<script>';  
  echo 'alert("Session expired. Please login again.")';
  //echo 'window.href("index.php")';
  echo 'window.location = "../apela.php"';
  echo '</script>';
}
?>
</html>
