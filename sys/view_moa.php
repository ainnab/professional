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
    <link href="../lib/morris.js/morris.css" rel="stylesheet">
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
    <?php
    if(!isset($_SESSION))
    {
      include 'talum.php';
        session_start();
         $ic=$_SESSION['ic'];


    $sql_query="select * from student where stud_ic='$ic' ";

  $res=mysqli_query($dbconfig,$sql_query);
  //echo $sql_query;
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $app_status=$userRow['app_status'];
}
?>

  </head>
  <body class="az-body az-body-sidebar">
    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="" class="az-logo">Admission</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <!-- <div class="az-img-user online"><img src="../img/faces/face1.jpg" alt=""></div> -->
        <div class="media-body">
          <h6></h6>
          <span></span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">

        <ul class="nav">
        <li class="nav-label">Main Menu</li>
          <li class="nav-item show current">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Rakan Kerjasama</a>
            <ul class="nav-sub">
              <li class="nav-sub-item  "><a href="dashboard_rk.php" class="nav-sub-link ">Status</a></li>
              <?php if($app_status == 'Approved'){?>
              <li class="nav-sub-item"><a href="view_moa.php" class="nav-sub-link">View Offer Letter/MOA</a></li> 
              <li class="nav-sub-item"><a href="upload_moa.php" class="nav-sub-link">Upload MOA</a></li> 
            </ul>
             <?php } ?>
          </li><!-- nav-item -->
        </div>
      </div>

    <div class="az-content az-content-dashboard-two">
      <div class="az-header">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
            <div class="az-header-message">
              <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="" class="new"><i class="typcn typcn-bell"></i></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                  <div class="media new">
                    <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                    <div class="media-body">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media new">
                    <div class="az-img-user online"><img src="../img/faces/face3.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="../img/faces/face1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <h6>Aziana Pechon</h6>
                  <span>Premium Member</span>
                </div><!-- az-header-profile -->

                <a href="signout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
 <div class="az-content-header d-block d-md-flex">
          <div class="col-xl-12 mg-t-15 mg-t-20">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title tx-14 mg-b-5">Offer Letter and MOA</h6>
            </div>
        <!-- Export Datatable start -->
        <div class="card-box mb-30">
          <div class="pb-20">
            <table  class="table hover multiple-select-row data-table-export nowrap">
              <thead>
                <tr><br>
                  <th>Offer Letter</th>
                  <th>MOA</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    $sql=" SELECT * FROM student WHERE stud_ic='$ic'";
                    $result=mysqli_query($dbconfig,$sql);
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);                  
                    ?>
                  <td><a href='offer_letter_rk.php' target='_blank'>Offer Letter</td>
                  <td><a href='moa_rk.php' target='_blank'>MOA</td>
                      
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Export Datatable End -->

        <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>


    <script src="js/azia.js"></script>
    <script>
        $(function () {
            'use strict'

            $('.az-sidebar .with-sub').on('click', function (e) {
                e.preventDefault();
                $(this).parent().toggleClass('show');
                $(this).parent().siblings().removeClass('show');
            })

            $(document).on('click touchstart', function (e) {
                e.stopPropagation();

                // closing of sidebar menu when clicking outside of it
                if (!$(e.target).closest('.az-header-menu-icon').length) {
                    var sidebarTarg = $(e.target).closest('.az-sidebar').length;
                    if (!sidebarTarg) {
                        $('body').removeClass('az-sidebar-show');
                    }
                }
            });


            $('#azSidebarToggle').on('click', function (e) {
                e.preventDefault();

                if (window.matchMedia('(min-width: 992px)').matches) {
                    $('body').toggleClass('az-sidebar-hide');
                } else {
                    $('body').toggleClass('az-sidebar-show');
                }
            })

            /* ----------------------------------- */
            /* Dashboard content */

            $('#compositeline').sparkline('html', {
                lineColor: '#cecece',
                lineWidth: 2,
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                highlightSpotColor: null,
                highlightLineColor: null,
                fillColor: '#f9f9f9',
                chartRangeMin: 0,
                chartRangeMax: 10,
                width: '100%',
                height: 20,
                disableTooltips: true
            });

            $('#compositeline2').sparkline('html', {
                lineColor: '#cecece',
                lineWidth: 2,
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                highlightSpotColor: null,
                highlightLineColor: null,
                fillColor: '#f9f9f9',
                chartRangeMin: 0,
                chartRangeMax: 10,
                width: '100%',
                height: 20,
                disableTooltips: true
            });

            $('#compositeline3').sparkline('html', {
                lineColor: '#cecece',
                lineWidth: 2,
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                highlightSpotColor: null,
                highlightLineColor: null,
                fillColor: '#f9f9f9',
                chartRangeMin: 0,
                chartRangeMax: 10,
                width: '100%',
                height: 20,
                disableTooltips: true
            });

            $('#compositeline4').sparkline('html', {
                lineColor: '#cecece',
                lineWidth: 2,
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                highlightSpotColor: null,
                highlightLineColor: null,
                fillColor: '#f9f9f9',
                chartRangeMin: 0,
                chartRangeMax: 10,
                width: '100%',
                height: 20,
                disableTooltips: true
            });


            var morrisData = [{
                    y: 'Oct 01',
                    a: 95000,
                    b: 70000
                },
                {
                    y: 'Oct 05',
                    a: 75000,
                    b: 55000
                },
                {
                    y: 'Oct 10',
                    a: 50000,
                    b: 40000
                },
                {
                    y: 'Oct 15',
                    a: 75000,
                    b: 65000
                },
                {
                    y: 'Oct 20',
                    a: 50000,
                    b: 40000
                },
                {
                    y: 'Oct 25',
                    a: 80000,
                    b: 90000
                },
                {
                    y: 'Oct 30',
                    a: 75000,
                    b: 65000
                }
            ];

            new Morris.Bar({
                element: 'morrisBar1',
                data: morrisData,
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Online', 'Offline'],
                barColors: ['#560bd0', '#00cccc'],
                preUnits: '$',
                barSizeRatio: 0.55,
                gridTextSize: 11,
                gridTextColor: '#494c57',
                gridTextWeight: 'bold',
                gridLineColor: '#999',
                gridStrokeWidth: 0.25,
                hideHover: 'auto',
                resize: true,
                padding: 5
            });

            $('#vmap2').vectorMap({
                map: 'usa_en',
                showTooltip: true,
                backgroundColor: '#fff',
                color: '#60adff',
                colors: {
                    mo: '#9fceff',
                    fl: '#60adff',
                    or: '#409cff',
                    ca: '#005cbf',
                    tx: '#005cbf',
                    wy: '#005cbf',
                    ny: '#007bff'
                },
                hoverColor: '#222',
                enableZoom: false,
                borderWidth: 1,
                borderColor: '#fff',
                hoverOpacity: .85
            });

        });

    </script>
    <script>
        $(function () {
            'use strict'

            $('#example1').DataTable({
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#example2').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });

    </script>
</body>

</html>
