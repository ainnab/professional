
<?php include 'header_admin.php' ?>
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">List of Status Application</h2>
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
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'");
   ?>

<div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
  <div class="card">

    <div class="card-header" role="tab" id="headingOne">
      <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        List of Rejected Application
      </a>
    </div>
    <?php while($data = mysqli_fetch_array($records)) { ?>
         <?php $result = mysqli_query($dbconfig,"SELECT * FROM student where role='student' AND (modeAds='ROPE' AND app_status='Rejected');"); ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
    <div id="collapseOne" data-parent="#accordion" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-body">
        <div class="col-6 col-md-4 col-xl-12">
            <div>
            <table id="example1" class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>IC</th>
                  <th>STATUS</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=0; $j=1; while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                            <td><?php echo $j++;  ?></td>
                            <td><?php echo $row["stud_name"]; ?></td>
                            <td><?php echo $row["stud_ic"]; ?></td>
                            <td><?php echo $row["app_status"]; ?></td>
                              </div>
                            </tr>
            <?php $i++;  } ?>
              </tbody>
            </table>
            <?php } else{  echo "No result found"; } ?>
            <?php } ?>
         </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
  <br>

   <?php
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'");
   ?>
    <div class="card-header" role="tab" id="heading2">
      <a data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
        List of Verified Application
      </a>
    </div><!-- card-header -->
    <?php while($data = mysqli_fetch_array($records)) { ?>
         <?php $result = mysqli_query($dbconfig,"SELECT * FROM student where role='student' AND (modeAds='ROPE' AND app_status='Verified');"); ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
    <div id="collapse2" data-parent="#accordion" class="collapse show" role="tabpanel" aria-labelledby="heading2">
      <div class="card-body">
        <div class="col-6 col-md-4 col-xl-12">
            <div>
            <table id="example2" class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>IC</th>
                  <th>STATUS</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=0; $j=1; while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                            <td><?php echo $j++;  ?></td>
                            <td><?php echo $row["stud_name"]; ?></td>
                            <td><?php echo $row["stud_ic"]; ?></td>
                            <td><?php echo $row["app_status"]; ?></td>
                              </div>
                            </tr>
            <?php $i++;  } ?>
              </tbody>
            </table>
            <?php } else{  echo "No result found"; } ?>
            <?php } ?>
         </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
 


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
