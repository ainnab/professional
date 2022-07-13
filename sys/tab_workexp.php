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
    <link rel="stylesheet" href="css/azia.css"><?php 
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
        $app_status = $data2['app_status'];
        $ic = $data2['stud_ic'];
        include 'main_menu.php';
     
       }     
    ?>


    <?php 
$records3 = mysqli_query($dbconfig,"select * from academic where stud_ic='$ic'"); 
?>
</head>

<body class="az-body az-body-sidebar">
    <div class="az-content-header d-block d-md-flex">
        <div>
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Personal Information</h2>
            <p class="mg-b-0">Please complete all the information below.</p>
        </div>
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
    </div><!-- az-content-header -->
    <div class="az-content-body">
        <div class="row row-sm">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card card-dashboard-seven">
                    <div class="card-body">
                        <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal"
                            data-target="#addEdu">
                            <i class="fa fa-plus"></i>
                            Add
                        </button>
                        <div class="modal fade" id="addEdu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title" id="myModalLabel">New</h4>
                                    </div>
                                    <form action="save_personal.php" method="POST"
                                                                enctype="multipart/form-data">
                                                                <div class="modal-body">

                                                                    <div class="form-group">
                                                                        <label>Type</label>
                                                                        <select name="type" id="type"
                                                                            class="form-control" required="">
                                                                            <option selected disabled=""
                                                                                style="font-size:14px;">Select Type
                                                                            </option>
                                                                            <option>Employment</option>
                                                                            <option>Other</option>
                                                                            <option>Own Business</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Position</label>
                                                                        <input type="text" class="form-control"
                                                                            id="wrkPostion" name="wrkPostion"
                                                                            required="">
                                                                    </div>

                                                                    <div class="row p-b-2">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Year Start/Service
                                                                                    Year</label>
                                                                                <input type="date" class="form-control"
                                                                                    name="edu_start" id="edu_start"
                                                                                    placeholder="MM-YYYY" required="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Year End</label>
                                                                                <input type="date" class="form-control"
                                                                                    name="edu_end" id="edu_end"
                                                                                    placeholder="MM-YYYY" required="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row p-b-2">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Category/Grade</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="edu_gred" name="edu_gred"
                                                                                    required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Organization Size</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="edu_major" name="edu_major">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Employer/Company Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="wrkPostion1" name="wrkPostion1"
                                                                            required="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Employer/Company Address</label>
                                                                        <textarea name="wrkPostion2" id="wrkPostion2"
                                                                            cols="30" rows="3"
                                                                            class="form-control"></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Job Scope/Project
                                                                            Value/Qualification</label>
                                                                        <textarea name="wrkPostion3" id="wrkPostion3"
                                                                            cols="30" rows="3"
                                                                            class="form-control"></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="wrkPostion4">Significant
                                                                            Contribution</label>
                                                                        <textarea name="wrkPostion4" id="wrkPostion4"
                                                                            cols="30" rows="3"
                                                                            class="form-control"></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Attachment</label>
                                                                        <input type="file" class="form-control"
                                                                            id="fileWork" name="fileWork" required>
                                                                        <span class="help-block">*The maximum file
                                                                            size you can upload is 30MB</span>
                                                                    </div>

                                                                </div>
                                                                <input type='text' name='stud_ic'
                                                                    value=<?php echo  $ic?> hidden>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="submit_new_work"
                                                                        class="btn btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                </div>
                            </div>
                        </div>


                        <form action="save_personal.php" method="post">



                            <?php  ?>
                        </form><br>
                        <div class="module">
                            <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0"
                                                            class="datatable-1 table table-bordered table-striped  display"
                                                            width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Position</th>
                                                                    <th>Employer/Company Name</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM working_experience WHERE stud_ic = '$ic'");
                                                                        $cnt=1;
                                                                        while($row=mysqli_fetch_array($sql3)){
                                                                          $id=$row['id'];

                                                                        {
                                                                        ?>
                                                                <tr>
                                                                    <td><?php echo htmlentities($cnt);?></td>
                                                                    <td><?php echo htmlentities (ucwords($row['type']));?>
                                                                    </td>
                                                                    <td><?php echo htmlentities (ucwords($row['position']));?>
                                                                    </td>
                                                                    <td><?php echo htmlentities (ucwords($row['employer_name']));?>
                                                                    </td>
                                                                    <td>

                                                                        <a
                                                                            href="edit_workexp.php?id=<?php echo $row['id']?>&stud_id=<?php echo $ic;?>"><button
                                                                                name="update_new_work"
                                                                                class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                                                        <a href="save_personal.php?id=<?php echo $row['id']?>&deletewrk=delete"
                                                                            onClick="return confirm('Are you sure you want to delete?')"><button
                                                                                type="submit" name="deletewrk"
                                                                                id="btn-submit"
                                                                                class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                                        <!--  <i class="icon-remove-sign"></i> -->
                                                                </tr>
                                                                <?php $cnt=$cnt+1;
                    }
                  }
                   ?>

                                                        </table>
                            </div>
                        </div>
                        <div class="col-lg-12 text-right">
                            <div class="form-group m-b-0">
                                <button type="button" onclick="window.location.href = 'tab_academic.php'"
                                    class="btn btn-lg btn-secondary waves-effect waves-light">
                                    Seterusnya&nbsp;&nbsp;<i class="far fa-arrow-alt-circle-right"></i>
                                </button>
                            </div>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->

            </div>
        </div><!-- row -->
        <div class="az-footer ht-40">
            <div class="container-fluid pd-t-0-f ht-100p">
                <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
            </div><!-- container -->
        </div><!-- az-footer -->
    </div><!-- az-content -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../lib/raphael/raphael.min.js"></script>
    <script src="../lib/morris.js/morris.min.js"></script>
    <script src="../lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="../lib/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>

    <script src="../js/azia.js"></script>
    <script>
        $(function () {
            'use strict'

            // Toggle Switches
            $('.az-toggle').on('click', function () {
                $(this).toggleClass('on');
            })

            // Input Masks
            $('#dateMask').mask('99/99/9999');
            $('#phoneMask').mask('(999) 999-9999');
            $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
            $('#ssnMask').mask('999-99-9999');

            // Color picker
            $('#colorpicker').spectrum({
                color: '#17A2B8'
            });

            $('#showAlpha').spectrum({
                color: 'rgba(23,162,184,0.5)',
                showAlpha: true
            });

            $('#showPaletteOnly').spectrum({
                showPaletteOnly: true,
                showPalette: true,
                color: '#DC3545',
                palette: [
                    ['#1D2939', '#fff', '#0866C6', '#23BF08', '#F49917'],
                    ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
                ]
            });

            // Datepicker
            $('.fc-datepicker').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });

            $('#datepickerNoOfMonths').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                numberOfMonths: 2
            });

            // AmazeUI Datetimepicker
            $('#datetimepicker').datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                autoclose: true
            });

            // jQuery Simple DateTimePicker
            $('#datetimepicker2').appendDtpicker({
                closeOnSelected: true,
                onInit: function (handler) {
                    var picker = handler.getPicker();
                    $(picker).addClass('az-datetimepicker');
                }
            });

            new Picker(document.querySelector('#datetimepicker3'), {
                headers: true,
                format: 'MMMM DD, YYYY HH:mm',
                text: {
                    title: 'Pick a Date and Time',
                    year: 'Year',
                    month: 'Month',
                    day: 'Day',
                    hour: 'Hour',
                    minute: 'Minute'
                },
            });


            $(document).ready(function () {
                $('.select2').select2({
                    placeholder: 'Choose one',
                    searchInputPlaceholder: 'Search'
                });

                $('.select2-no-search').select2({
                    minimumResultsForSearch: Infinity,
                    placeholder: 'Choose one'
                });
            });

            $('.rangeslider1').ionRangeSlider();

            $('.rangeslider2').ionRangeSlider({
                min: 100,
                max: 1000,
                from: 550
            });

            $('.rangeslider3').ionRangeSlider({
                type: 'double',
                grid: true,
                min: 0,
                max: 1000,
                from: 200,
                to: 800,
                prefix: '$'
            });

            $('.rangeslider4').ionRangeSlider({
                type: 'double',
                grid: true,
                min: -1000,
                max: 1000,
                from: -500,
                to: 500,
                step: 250
            });

        });

    </script>
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
</body>

</html>
