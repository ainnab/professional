<?php include 'header_admin.php' ?>
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Academic and document details.</h2>
        </div>
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card card-dashboard-seven">
          <div class="card-body">
          <?php 
    include 'talum.php';
    $ic=$_SESSION['ic'];
    $stud=$_REQUEST['stud'];
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    $records2 = mysqli_query($dbconfig, "select * from qualification_info where stud_ic='$stud'");
    
   ?>

   <h5>Academic Information</h5>
   <?php while($data = mysqli_fetch_array($records2)) { ?>
   <div class="pd-30 pd-sm-20 wd-xl-50p">
            <div class="row row-xs align-items-center mg-b-20">
              <div class="col-md-3">
                <label class="form-label mg-b-0">SPM Number</label>
              </div><!-- col -->
              <div class="col-md-8 mg-t-5 mg-md-t-0">
                <?php echo $data['spm_number']; ?>
              </div><!-- col -->
            </div><!-- row -->

            <div class="row row-xs align-items-center mg-b-20">
              <div class="col-md-3">
                <label class="form-label mg-b-0">Year of SPM</label>
              </div><!-- col -->
              <div class="col-md-8 mg-t-5 mg-md-t-0">
              <?php echo $data['spm_year']; ?>
              </div><!-- col -->
            </div><!-- row -->

            <div class="row row-xs align-items-center mg-b-20">
              <div class="col-md-3">
                <label class="form-label mg-b-0">Type of School</label>
              </div><!-- col -->
              <div class="col-md-8 mg-t-5 mg-md-t-0">
              <?php echo $data['school_type']; ?>
              </div><!-- col -->
            </div><!-- row -->

            <div class="row row-xs align-items-center mg-b-20">
              <div class="col-md-3">
                <label class="form-label mg-b-0">School Name</label>
              </div><!-- col -->
              <div class="col-md-8 mg-t-5 mg-md-t-0">
              <?php echo $data['school_name']; ?>
              </div><!-- col -->
            </div><!-- row -->

          </div> 
          <?php } ?>
        <p class="mg-b-20">Core Subjects</p>
        <p class="mg-b-20"></p>
      <div class="col-6 col-md-4 col-xl-12">
         <?php $result = mysqli_query($dbconfig,"SELECT * FROM qualification_info INNER JOIN student ON qualification_info.stud_ic=student.stud_ic where qualification_info.stud_ic='$stud';"); ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <?php $i=0; $j=1; while($row = mysqli_fetch_array($result)) { ?>
                <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-14p">Bahasa Melayu</th>
                  <th class="wd-14p">Bahasa Inggeris</th>
                  <th class="wd-10p">Matematik</th>
                  <th class="wd-10p">Sejarah</th>
                  <th class="wd-15p">Pendidikan Islam</th>
                  <th class="wd-15p">Pendidikan Moral</th>
                  <th class="wd-20p">Markah MP Utama Aliran</th>
                </tr>
              </thead>
              <tbody>
              
                <?php
                $bm = (int)$row['valuespm1'];
                $bi = (int)$row['valuespm2'];
                $mt = (int)$row['valuespm3'];
                $sj = (int)$row['valuespm4'];
                $pai = (int)$row['valuespm5'];
                //$moral = $row['valuespm6'];
                ?>
                            <tr>
                            <td><?php echo $j++;  ?></td>
                            <td><?php echo $row["gredspm1"]; ?></td>
                            <td><?php echo $row["gredspm2"]; ?></td>
                            <td><?php echo $row["gredspm3"]; ?></td>
                            <td><?php echo $row["gredspm4"]; ?></td>
                            <td><?php echo $row["gredspm5"]; ?></td>
                            <td><?php echo $row["gredspm6"]; ?></td>
                            <td><?php echo $bm+$bi+$mt?></td>
                            </tr>
            <?php $i++;  } ?>
              </tbody>
            </table>
            <?php } else{  echo "No result found"; } ?>
            
              </div>
              
            
         </div>
         <p class="mg-b-30"></p>
        <p class="mg-b-20">Elective Subjects</p>
        <p class="mg-b-20"></p>
        <div class="col-6 col-md-4 col-xl-12">
         <?php $result = mysqli_query($dbconfig,"SELECT * FROM additional_qualification INNER JOIN student ON additional_qualification.stud_ic=student.stud_ic where additional_qualification.stud_ic='$stud' ORDER BY grade_code ASC;"); ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-14p">Subjects</th>
                  <th class="wd-14p">Grade</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=0; $j=1; while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                            <td><?php echo $j++;  ?></td>
                            <td><?php echo $row["subject_code"]; ?></td>
                            <td><?php echo $row["grade_code"]; ?></td>
                            </tr>
            <?php $i++;  } ?>
              </tbody>
            </table>
            <?php } else{  echo "No result found"; } ?>
            
              </div>
              
         </div>
         <p class="mg-b-30"></p>
        <p class="mg-b-20">List of Document</p>
        <p class="mg-b-20"></p>
        <div class="col-6 col-md-4 col-xl-12">
         <?php $result = mysqli_query($dbconfig,"SELECT * FROM document INNER JOIN student ON document.stud_ic=student.stud_ic where document.stud_ic='$stud';"); ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-14p">Subjects</th>
                  <th class="wd-14p">Grade</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=0; $j=1; while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                            <td><?php echo $j++;  ?></td>
                            <td><?php echo $row["file_name"]; ?></td>
                            <td><?php echo $row["location"]; ?></td>
                            </tr>
            <?php $i++;  } ?>
              </tbody>
            </table>
            <?php } else{  echo "No result found"; } ?>
            
              </div>
              
         </div>

         

    </div>
         </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col --></div>
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    

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
    <script>
      $(function(){
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
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
