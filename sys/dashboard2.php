<?php include 'main_menu.php';?>

    <?php 
    include 'talum.php';
    $ic=$_SESSION['ic'];
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
   ?>
      <?php while($data = mysqli_fetch_array($records)) { ?>
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Guideline</h2>
          <p class="mg-b-0">Please read the guidelines carefully before continue with the application.</p>
        </div>
        
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card card-dashboard-seven">
          <div class="card-body">
            <div class="row row-sm mg-b-15 mg-sm-b-20">
            <div class="col-md-12 col-lg-12">
          
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Reminder!</strong> Please complete all the information before 30th June 2022. Incomplete information will not be processed.
          </div><!-- alert -->
          <div class="alert alert-danger mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Alert!</strong> Application will be closed on 30th June 2022. 
          </div><!-- alert -->
        
        <p class="mg-b-20"></p>
            <?php } ?>
            <!--<p><strong>INSTRUCTION</strong></p>
                <p>Application for Direct Intake to UMP <a href="http://umpadvanced.ump.edu.my/newportalumpa/diploma_must" target="_blank"><b><u>Diploma</u></b></a> / <a href="http://umpadvanced.ump.edu.my/newportalumpa/foundation" target="_blank"><b><u>Foundation in Science and Technology</u></b></a> / <a href="http://umpadvanced.ump.edu.my/newportalumpa/pre_diploma" target="_blank"><b><u>Pre Diploma</u></b></a> Programme through <a style="color:blue;"><i><b>'Masuk UMP Secara Terus' (MUST). </b></i></a></p>
                <p>Please prepare certified scanned copies of the academic qualification documents <b>(Trial SPM/Actual SPM/O-Level/ICGSE etc.)</b> in PDF format to be uploaded during the online application process.
                </p>
            
                <hr/>
                <p><b>IMPORTANT:</b></p>
                    <ul><b><a style="color:blue;">Application for Diploma in Engineering Programmes (Study Duration: Less than Three (3) years)</a></b></ul> 
                        <ul><b>General requirements:</b></ul>
                        <ul>&nbsp;&nbsp;i. SPM/O-Level/Equivalent with minimum THREE (3) credits</ul>
                        <ul>&nbsp;&nbsp;ii. Credits in Bahasa Melayu and passed in History subject</ul> 
                        <p><ul><b>Specific requirement: </b></ul>
                        <ul>&nbsp;&nbsp;i. Minimum C grade in the following subjects</ul>
                        <ul> &nbsp;&nbsp;&nbsp;&nbsp;a) Mathematics</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Science/Technical/Vokasional</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;c) Passed in English language subject</ul></ul><br></p>
					
                    <ul><b><a style="color:blue;">Application for Diploma in Computer Science (Study Duration: Less than Three (3) years)</a></b></ul> 
                    <ul><b>General requirements:</b></ul>
                        <ul>&nbsp;&nbsp;i. SPM/O-Level/Equivalent with minimum THREE (3) credits</ul>
                        <ul>&nbsp;&nbsp;ii. Credits in Bahasa Melayu and passed in History subject</ul> 
                        <p><ul><b>Specific requirement: </b></ul>
                        <ul>&nbsp;&nbsp;i. Minimum C grade in the following subjects</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;a) Mathematics,and </ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Any subjects</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;c) Passed in English language subject</ul></ul><br></p>

                    <ul><b><a style="color:blue;">Application for Diploma in Occupational, Safety & Health (Study Duration: Less than Three (3) years)</a></b></ul>
                    <ul><b>General requirements:</b></ul>
                        <ul>&nbsp;&nbsp;i. SPM/O-Level/Equivalent with minimum THREE (3) credits</ul>
                        <ul>&nbsp;&nbsp;ii. Credits in Bahasa Melayu and passed in History subject</ul> 
                        <p><ul><b>Specific requirement: </b></ul>
                        <ul>&nbsp;&nbsp;i. Minimum C grade in the following subjects</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp; a) Mathematics/ ONE (1) of science subjects(Physics/Biology/Chemistry/General Science),</ul> 
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Passed in any TWO (2) subjects</ul></ul><br></p>

                        <hr/>

                    <ul><b><a style="color:blue;">Application for Foundation in Science and Technology (Study Duration: One (1) year)</a></b></ul>
                    <ul>Program specifically designed for dual degree programmes, UMP collaboration with German/China Universities, or for local programmes</ul>    
                    <ul><b>General requirements:</b></ul>
                        <ul>&nbsp;&nbsp;i. SPM/O-Level/Equivalent with minimum FIVE (5) credits</ul>
                        <ul>&nbsp;&nbsp;ii. Credits in Bahasa Melayu and passed in History subject</ul> 
                        <p><ul><b>Specific requirement: </b></ul>
                        <ul>&nbsp;&nbsp;i. Minimum C grade in the following subjects</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;a) Mathematics</ul>
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Any TWO (2) of science subjects(Physics/Biology/Chemistry/General Science or equivalent),</ul> 
                        <ul>&nbsp;&nbsp;&nbsp;&nbsp;b) Credit in any other subject</ul><br></p>

                       

                        <hr/>

                        
                        <p>For further assistance, please <a href="http://umpadvanced.ump.edu.my/contact" target="_blank"><b><u>contact us</u></b></a></p>
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
