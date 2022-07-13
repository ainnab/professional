<?php 
    include 'talum.php';
    include 'header_admin.php';
   
    ?>


<div class="az-content-header d-block d-md-flex">
  <div>
    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Program</h2>
    <p class="mg-b-0">Press button below to add program.</p>
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
								      <form action="save.php" method="POST" enctype="multipart/form-data">
									      <div class="modal-body">

									      	<div class="form-group">
									      		<label>Program Name</label>
									      		<input type="text" class="form-control" id="progName" name="progName" required="">
									      	</div>
                          <div class="form-group">
                            <label>Program Code</label>
                            <input type="text" class="form-control" id="progCode" name="progCode" required="">
                          </div>
                          <div class="form-group">
                            <label>Duration (Year & Months)</label>
                            <input type="text" class="form-control" id="duration" name="duration" required="">
                          </div>
                          <div class="form-group">
                            <label>Registration Date </label>
                            <input type="date" class="form-control" name="regDate" id="regDate" required="">
                          </div>
                          <div class="form-group">
                            <label>Learning Centre</label>
                            <input type="text" class="form-control" id="learningCentre" name="learningCentre" required="">
                          </div>
                          <div class="form-group">
                            <label>Specialization</label>
                            <input type="text" class="form-control" id="Specialization" name="Specialization" required="">
                          </div>
                           <div class="form-group">
                            <label>Institution Name</label>
                            <input type="text" class="form-control" id="instName" name="instName" required="">
                          </div>
                          <div class="form-group">
                            <label>Date Created </label>
                            <input type="date" class="form-control" name="date_start" id="date_start" placeholder="MM-YYYY" required="">
                          </div>
                          <div class="form-group">
									      		<label>Admission Name</label>
									      		<input type="text" class="form-control" id="adsName" name="adsName" required="">
									      	</div>
                          <div class="form-group">
                            <label>Upload Picture</label>
                            <input type="file" class="form-control" id="picDip" name="picDip">
                            <span class="help-block">*The maximum file size you can upload is 30MB</span>
                          </div>
                           <div class="form-group">
                            <label>Certificate Category</label>
                            <input type="text" class="form-control" id="certificate" name="certificate" value="EXECUTIVE MASTER" readonly>
                            <input type="hidden" class="form-control" id="mode" name="mode" value="MASTER" readonly>
                          </div>
                          <div class="form-group">
                            <label>List Of Module (Common Module)</label>
                            <input type="text" class="form-control" id="commonModule" name="commonModule" placeholder="Module1,Module2" >
                           
                          </div>
                           <div class="form-group">
                            <label>List Of Module (Core Module)</label>
                            <input type="text" class="form-control" id="coreModule" name="coreModule" placeholder="Module1,Module2" >
                           
                          </div>
                          <div class="form-group">
                            <label>Yuran Pendaftaran</label>
                            <input type="text" class="form-control" id="feeDaftar" name="feeDaftar" placeholder="605.00" >
                           
                          </div>
                           <div class="form-group">
                            <label>Yuran Pengajian</label>
                            <input type="text" class="form-control" id="feeStudy" name="feeStudy" placeholder="605.00" >
                           
                          </div>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button type="submit" name="submit_program" class="btn btn-primary">Save</button>
									      </div>
								      </form>
								    </div>
								  </div>
								</div>
   <form action="save.php" method="post">
  
            
         
<?php  ?>
            </form><br>
            <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>Program Name</th>
                                    <th>Date Created</th>
                                    <th>Admission Name</th>
                                    <!-- <th>Mode of Admission</th> -->
                                    <th>Certificate Category</th>
                                    <th>Action</th>
                                    <th>Common Module</th>
                                    <th>Core Module</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php 


                          $sql3=mysqli_query($dbconfig,"SELECT * FROM program_diploma WHERE mode='MASTER'");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql3)){
                             $id=$row['pg_id'];
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['pg_name']));?></td>
                      <td><?php echo htmlentities (ucwords($row['keyin_date']));?></td>
                      <td><?php echo htmlentities (ucwords($row['adsName']));?></td>
                      <!-- <td><?php echo htmlentities (ucwords($row['mode']));?></td> -->
                      <td><?php echo htmlentities (ucwords($row['certificate']));?></td>
                      <td>
                       

                     <a href="edit_listprogram.php?id=<?php echo $row['pg_id']?>" ><button name="update" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                      <a href="save.php?id=<?php echo $row['pg_id']?>&deleteprog=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="submit" name="deleteprog" id="btn-submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>

                       <!--  <i class="icon-remove-sign"></i> -->
                       <td><?php echo htmlentities (ucwords($row['common_module']));?></td>
                        <td><?php echo htmlentities (ucwords($row['core_module']));?></td>
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>

                </table>
              </div>
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
