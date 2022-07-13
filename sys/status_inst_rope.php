<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-90680653-2');

    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.png" />



    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/morris.js/morris.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link href="lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">

    <?php
    include 'talum.php';

    ?>

    <?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $ic=$_SESSION['ic'];
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'");
    while($data2 = mysqli_fetch_array($records)) {


  $role = $data2['role'];
   $agent=$data2['stud_name'];

        include 'main_menu.php';
      }

    ?>
    <?php
    $records3 = mysqli_query($dbconfig,"select * from application where stud_ic='$ic'");
    while($data = mysqli_fetch_array($records3)) {

    ?>
</head>


<body class="az-body az-body-sidebar">


    <div class="az-content az-content-dashboard-two">
        <div class="az-content-header d-block d-md-flex">
            <div>
                <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">List of Student.</h2>
            </div>
            <div class="az-dashboard-header-right">
            </div><!-- az-dashboard-header-right -->
        </div><!-- az-content-header -->
        <div class="az-content-body">
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card card-dashboard-seven">
                        <div class="card-body">



                            <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            List of Application
                                        </a>
                                    </div><!-- card-header -->
                                    <div id="collapseOne" data-parent="#accordion" class="collapse show" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <div class="col-6 col-md-4 col-xl-12">
                                                <div>
                                                    <table id="example1" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="wd-5p">ID</th>
                                                                <th class="wd-25p">NAME</th>
                                                                <th class="wd-15p">IC</th>
                                                                <th class="wd-20p">EMAIL</th>
                                                                <th class="wd-15p">OFFER LETTER</th>
                                                                <th class="wd-15p">STATUS</th>
                                                                <th class="wd-20p">ACTION</th>
                                                                <th class="wd-20p">PROGRAM</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
$i = 0;



  $query = "SELECT * FROM `student`  where  agent='$agent' AND modeAds = 'ROPE'";

                             $app=mysqli_query($dbconfig,$query);

                          while($row1=mysqli_fetch_array($app,MYSQLI_ASSOC)){



$i++;

                      $stud_name = $row1['stud_name'];
                       $stud_ic = $row1['stud_ic'];
                    $email = $row1['stud_email'];
           $status = $row1['app_status'];

                    ?>
                                                            <tr>
                                                                <td><?php echo $i;?></td>
                                                                <td><?php echo $stud_name;?></td>
                                                                <td><?php echo $stud_ic;?></td>
                                                                <td><?php echo $email;?></td>
                                                                
                                                                
                                                                <td><?php if ($status == 'Approved')   { ?><a href="offer_letter.php?id=<?php echo $stud_ic; ?>">Offer Letter</a><?php  }else{ }?></td>
                                                                <td><?php echo $status;?></td>
                                                                <td><?php if ($status == 'Register' or  $status == 'Applied' or  $status == 'Verified' or  $status == 'Approved'){ ?><a href="tab_test_rk.php?id=<?php echo $stud_ic;?>"><button
                                                                            name="update"
                                                                            class="btn btn-primary btn-md" >Update</button></a>
                                                                    <?php }else{if ($status == 'Finance')?>
                                                                        <a href="tab_test_rk.php?id=<?php echo $stud_ic;?>"><button
                                                                            name="update"
                                                                            class="btn btn-primary btn-md" disabled>Update</button></a>
                                                                    <?php } ?>
                                                                </td>
                                                                <?php if ($status == 'Register') { ?>
                                                                <td><a
                                                                        href="professional_dip.php?id=<?php echo $stud_ic;?>"><button
                                                                            name="update"
                                                                            class="btn btn-primary btn-md mb-2" disabled>DIPLOMA</button></a>
                                                                    <a href="degree.php?id=<?php echo $stud_ic;?>"><button
                                                                            name="update"
                                                                            class="btn btn-primary btn-md mb-2" disabled>DEGREE</button></a>
                                                                    <a href="master.php?id=<?php echo $stud_ic;?>"><button
                                                                            name="update"
                                                                            class="btn btn-primary btn-md" disabled>MASTER</button></a>
                                                                </td>
                                                                <?php  }else{ ?>
                                                                <td><a
                                                                        href="professional_dip.php?id=<?php echo $stud_ic;?>"><button
                                                                            name="update"
                                                                            class="btn btn-primary btn-md mb-2"
                                                                            >DIPLOMA</button></a>
                                                                    <a href="degree.php?id=<?php echo $stud_ic;?>"><button
                                                                            name="update"
                                                                            class="btn btn-primary btn-md mb-2"
                                                                            >DEGREE</button></a>
                                                                    <a href="master.php?id=<?php echo $stud_ic;?>"><button
                                                                            name="update" class="btn btn-primary btn-md"
                                                                            >MASTER</button></a></td>
                                                                <?php } ?>


                                                            </tr>



                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                </div>
            </div> <?php } ?>
            <div class="az-footer ht-40">
                <div class="container-fluid pd-t-0-f ht-100p">
                    <span>&copy; 2022 UMP Advanced, Malaysia· All rights reserved.</span>
                </div><!-- container -->
            </div><!-- az-footer -->



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
