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
   $agent=$data2['stud_name'];  
   $app_status = $data2['app_status'];
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
    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Academic Background</h2>
    <p class="mg-b-0">Press button below to add academic background.</p>
  </div>
  <div class="az-dashboard-header-right">
  </div><!-- az-dashboard-header-right -->
</div><!-- az-content-header -->
<div class="az-content-body">
<div class="row row-sm">
<div class="col-md-12 col-lg-12 col-xl-12">
  <div class="card card-dashboard-seven">
    <div class="card-body">
    <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#addEdu">
      <i class="fa fa-plus"></i> 
      Add
    </button>
    <div class="modal fade" id="addEdu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
								        <h4 class="modal-title" id="myModalLabel">New</h4>
								      </div>
								      <form action="save_personal.php" method="POST" enctype="multipart/form-data">
									      <div class="modal-body">

									      	<div class="form-group">
												<label for="edu_type">Type</label>
												<select name="edu_type" class="form-control" required="">
													<option value="">Select Type</option>
													<option>Academic Qualification</option>
                          <option>Award</option>
                          <option>Course</option>
                          <option>IT Skill</option>
                          <option>Language Proficiency</option>
                          <option>Recognition</option>
                          <option>Seminar</option>
                          <option>Social Activity</option>
                          <option>Sport</option>
												</select>
											</div>

									      	<div class="form-group">
									      		<label>University/Institution/Event/Skill/Provider Name</label>
									      		<input type="text" class="form-control" id="edu_school" name="edu_school" required="">
									      	</div>

									      	<div class="row p-b-2">
									      		<div class="col-md-6">
									      			<div class="form-group">
									      				<label>Start Year</label>
									      				<input type="date" class="form-control" name="startYear" id="startYear" placeholder="YYYY" required="">
									      			</div>
									      		</div>

									      		<div class="col-md-6">
													<div class="form-group">
									      				<label>Gain Year</label>
									      				<input type="date" class="form-control" name="gainYear" id="gainYear" placeholder="YYYY" required="">
									      			</div>
									      		</div>
									      	</div>

									      	<div class="form-group">
									      		<label>Gred/Outcome/Level</label>
									      		<input type="text" class="form-control" id="level" name="level" required="">
									      	</div>

									      	<div class="form-group">
									      		<label>Majoring/Scopes</label>
									      		<input type="text" class="form-control" id="major" name="major">
									      	</div>

									      	<div class="form-group">
									      		<label for="edu_file">Attachment</label>
									      		<input type="file" id="fileA" name="fileA" class="form-control">
									      		<span class="help-block">*The maximum file size you can upload is 20MB</span>
									      	</div>

									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <input type="hidden" class="form-control" id="ic" name="stud_ic" value="<?php echo $ic;?>">
									        <button type="submit" name="submit_new_acd" class="btn btn-primary">Save</button>
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
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>University/Institution/Event/Skill/Provider Name</th>
                                    <th>Gred/Outcome/Level</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM academic WHERE stud_ic = '$ic'");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql3)){
                            $id=$row['id'];
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_type']));?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_school']));?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_gred']));?></td>
                      <td>
                       

                     <a href="edit_academic.php?id=<?php echo $row['id']?>" ><button name="update" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                      <a href="save_personal.php?id=<?php echo $row['id']?>&deleteacd=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="submit" name="deleteacd" id="btn-submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>

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
                    <button type="button" onclick="window.location.href = 'tab_upload.php'" class="btn btn-lg btn-secondary waves-effect waves-light">
                        Seterusnya&nbsp;&nbsp;<i class="far fa-arrow-alt-circle-right"></i>
                    </button>
                </div>
            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->

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
