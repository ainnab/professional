<?php
session_start();
require 'talum.php';
 $ic=$_SESSION['ic'];
    //+$records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
$res = mysqli_query($dbconfig,  "select * from student where stud_ic='$ic'");


 ?>
<?php
require 'talum.php';

     ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Library UTeM</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="../main/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
          <div class="brand-logo"><a href="index.php"><b><img src="../assets/images/LMS.png" alt=""> </b><span class="brand-title"><img src="../assets/images/LUTeM.png" alt=""></span></a>
          </div>
            <div class="nav-control">
                <div class="hamburger"><span class="line"></span>  <span class="line"></span>  <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
              <div class="header-left">
                  <ul>
                      <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                          <div class="drop-down animated bounceInDown">
                              <div class="dropdown-content-body">
                                  <div class="header-search" id="header-search">
                                      <form method="get">
                                          <div class="input-group">
                                              <input type="text" class="form-control" name="search" placeholder="Search">
                                              <div class="input-group-append" value="Search"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                              </div>
                                             </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
                <div class="header-right">


                  <li class="icons">
                      <a href="javascript:void(0)" class="log-user">
                          <span>Genre Filter</span>  <i class="fa fa-search f-s-14" aria-hidden="true"></i>
                      </a>
                      <div style="width: 160%; z-index:100; background-color:#ece8fd;" class="drop-down dropdown-profile animated bounceInDown">
                          <div class="dropdown-content-body">
                            <div class="dropdown-content-heading">
                                <span class="pull-left">Filter</span>
                                <div class="clearfix"></div>
                            </div>
                              <ul>
                                <form method="get">



                           





                              </ul>

                                  <button style="width: 100%;" type="submit" class="btn btn-primary">Search</button>



                               </form>
                          </div>
                      </div>
                  </li>




                        <li class="icons">
                            <a href="javascript:void(0)" class="log-user">
                                <span></span>  <i class="fa fa-caret-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="profile.php"><i class="icon-user"></i> <span>My Profile</span></a>
                                        </li>
                                        <li><a href="logout.php"><i class="icon-power"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                  <li class="mega-menu mega-menu-lg">
                    <a href="index.php" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i><span class="nav-text">List of book</span>
                    </a>
                  </li>
                  <li class="mega-menu mega-menu-lg">
                    <a href="profile.php" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i><span class="nav-text">My Profile</span>
                    </a>
                  </li>
                  <li class="mega-menu mega-menu-lg">
                    <a href="booking.php" aria-expanded="false">
                        <i class="fa fa-thumb-tack" aria-hidden="true"></i><span class="nav-text">My Booking</span>
                    </a>
                  </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                  <div class="col p-0">
                      <h4>Books</h4>
                  </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="my-4">
                            <h4 class="d-inline card-intro-title">List of books</h4>
                            <p class="color-muted">Please choose to book.</p>
                        </div>
                        <div class="row">
                          <?php
                          if(isset($_GET['genre']))
                            {
                                $genrechecked = [];
                                $genrechecked = $_GET['genre'];
                                foreach($genrechecked as $rowgenre)
                                {
                                    // echo $rowgenre;
                                    $sql3 = "SELECT ISBN_NO,book_title,description,image FROM book WHERE genre IN ('$rowgenre')";
                                    $result3 = mysqli_query($con, $sql3);
                                    if(mysqli_num_rows($result3) > 0)
                                    {
                                         while($row = mysqli_fetch_array($result3))
                                         {
                                           $image = $row['image'];
                                           $book_title =$row['book_title'];
                                           $description = $row['description'];

                                    ?>
                                    <div class="col-lg-6 no-card-border">
                                        <div class="card user-card5">
                                          <div class="row m-0">
                                            <div class="col-md-5 p-0">
                                              <img class="img-fluid w-100" src="../Images/<?php echo $image; ?>" alt="" height="100px" width="100px">
                                            </div>
                                            <div class="col-md-7">
                                              <div class="card-body">
                                                <div class="my-4">
                                                  <h5 class="card-title"><?php echo $book_title; ?></h5>
                                                </div>
                                                <div class="border-bottom-1 my-4 pb-3">
                                                  <p class="card-text" ><?php echo $description; ?></p>
                                                </div>
                                                <a href="book.php?isbn=<?php echo $row['ISBN_NO']; ?>"><button class="btn btn-primary btn-card my-4">Read More..</button></a>
                                              </div>
                                            </div>

                                          </div>

                                        </div>
                                    </div>
                                    <?php
                                          }
                                      }
                                }
                            }
                              else {
                                  if(mysqli_num_rows($result) > 0)
                                {
                                     while($row = mysqli_fetch_array($result))
                                     {
                                       $image = $row['image'];
                                       $book_title =$row['book_title'];
                                       $description = $row['description'];

                                ?>
                                <div class="col-lg-6 no-card-border">
                                    <div class="card user-card5">
                                      <div class="row m-0">
                                        <div class="col-md-5 p-0">
                                          <img class="img-fluid w-100" src="../Images/<?php echo $image; ?>" alt="" height="100px" width="100px">
                                        </div>
                                        <div class="col-md-7">
                                          <div class="card-body">
                                            <div class="my-4">
                                              <h5 class="card-title"><?php echo $book_title; ?></h5>
                                            </div>
                                            <div class="border-bottom-1 my-4 pb-3">
                                              <p class="card-text" ><?php echo $description; ?></p>
                                            </div>
                                            <a href="book.php?isbn=<?php echo $row['ISBN_NO']; ?>"><button class="btn btn-primary btn-card my-4">Read More..</button></a>
                                          </div>
                                        </div>

                                      </div>

                                    </div>
                                </div>

                                <?php
                                      }
                                  } else {
                                    echo "No data found";
                                  }
                                }
                               ?>

                            <!-- End Col -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; All Right Reserved 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->


        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../assets/plugins/common/common.min.js"></script>
    <script src="../main/js/custom.min.js"></script>
    <script src="../main/js/settings.js"></script>
    <script src="../main/js/gleek.js"></script>
    <script src="../main/js/styleSwitcher.js"></script>

</body>

</html>
