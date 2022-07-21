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
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.png"/>

    

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
        $app_status = $data2['app_status'];
   $stud_name=$data2['stud_name']; 
        include 'main_menu.php';
      
       }     
    ?>
<div class="az-content-header d-block d-md-flex">
  <div>
    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Offer Letter & Acceptance Letter</h2>
  </div>
  <div class="az-dashboard-header-right">
  </div><!-- az-dashboard-header-right -->
</div><!-- az-content-header -->
<div class="az-content-body">
<div class="row row-sm">
<div class="col-md-12 col-lg-12 col-xl-12">
  <div class="card card-dashboard-seven">
    <div class="card-body">
    
    <!-- <div class="modal fade" id="addDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        
                      </div>
                     
                        <div class="modal-body">
                        </div>
                      
                      
                    </div>
                  </div>
                </div> -->
   <br>
            <?php 
          $records3 = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
          while($data3=mysqli_fetch_array($records3)){
            //$pg_name=$data3['pg_name'];
              $status=ucwords($data3['app_status']);


              $count=1;
              $records4 = "SELECT * from programselection where stud_ic='$ic' and status='Accepted'";
              $data2=mysqli_query($dbconfig,$records4);
          }
          date_default_timezone_set("Asia/Bangkok");
          $date='Y';
          ?>
        <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>Program Name</th>
                                    <th>Status</th>
                                    <th>View</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                            <tbody>
                            <?php
	    while($row5 = mysqli_fetch_array($data2)){
        $status1=ucwords($row5['status']);
        $pg_name=$row5['pg_name'];
        $id_selection=$row5['pg_id'];
        $pg_code = $row5['pg_code'];
                        
	    ?>     
                    <tr>
                    <td><?php echo $pg_name;?></td>
                      <td><?php echo $status1;?></td>
                      <td><a href='offer_letter_student.php?i=<?php echo base64_encode($id_selection); ?>' target='_blank'>Offer Letter
                        <br>
                        <a href='acceptance_letter.php?i=<?php echo base64_encode($id_selection); ?>' target='_blank'>Acceptance Letter
                        <br>
                        <?php
                        $records5 = "SELECT * from hep where stud_ic='$ic' and pg_id = '$id_selection'";
                        $data3=mysqli_query($dbconfig,$records5);
                        while($row6 = mysqli_fetch_array($data3)){
                          $fileDoc = $row6['fileDoc'];
                        ?>
                        <a href="../sys/folder/upload/<?php echo $fileDoc;?>" target="_blank"><?php echo $fileDoc; ?></a>
                        <?php } ?>
                      </td>
                     <td><button name="update" href="#addDoc<?php echo $id_selection; ?>" data-toggle="modal" data-target="#addDoc" class="btn btn-primary btn-md">Upload Documents</button></td>
                    </tr>
                    

                    <div class="modal fade" id="addDoc" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel" aria-hidden="true"
                                                    style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close"><span
                                                                        aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Upload Document
                                                                </h4>
                                                            </div>
                                                            <form action="save_personal.php" method="POST"
                                                                enctype="multipart/form-data">
                                                                <div class="modal-body">

                                                                    <div class="form-group">
                                                                        <label>Document Name</label>
                                                                        <select name="file_type" class="form-control">
                                                                            <option value=" " selected disabled=""
                                                                                style="font-size:14px;">Please
                                                                                select</option>
                                                                                <option value="Borang Aku Janji">Borang Aku Janji</option>
                                                                                <option value="Acceptance Letter">Acceptance Letter</option>
                                                                                <option value="Payment Receipt(Fees)">Payment Receipt(Fees)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="file" class="form-control"
                                                                            id="fileDoc" name="fileDoc" required>
                                                                        <span class="help-block">*The maximum
                                                                            file size you can upload is
                                                                            30MB</span>
                                                                    </div>
                                                                </div>
                                                                <input type="text" value="<?php echo $pg_code;?>" name="code" hidden>
                                                                <input type="text" value="<?php echo $id_selection;?>" name="pgID" hidden>
                                                                <input type="text" value="<?php echo $ic;?>" name="ic" hidden>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="submitDoc"
                                                                        class="btn btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
							</div>
							
						
        
      </th>
                    <?php
		$count=$count+1;
                    }
?>
                </table>
						  </div>
              
              </form> 
              
              
              </div>
            </div>
        <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                    
                </div>
            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
  </div><!-- row -->
</div>
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

    <script src="../js/azia.js"></script>
    <script>
 
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
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


        var morrisData = [
          { y: 'Oct 01', a: 95000, b: 70000 },
          { y: 'Oct 05', a: 75000,  b: 55000 },
          { y: 'Oct 10', a: 50000,  b: 40000 },
          { y: 'Oct 15', a: 75000,  b: 65000 },
          { y: 'Oct 20', a: 50000,  b: 40000 },
          { y: 'Oct 25', a: 80000, b: 90000 },
          { y: 'Oct 30', a: 75000,  b: 65000 }
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
