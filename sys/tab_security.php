<?php include 'talum.php'; ?>

<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$ic=$_SESSION['ic'];       
$records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
while($data2 = mysqli_fetch_array($records)) { 
  
    include 'header_diploma.php';
 
   }     
?>
<?php 
$records2 = mysqli_query($dbconfig,"select * from parent where stud_ic='$ic'"); // fetch data from database

$sql21 = "SELECT * FROM `nationality`";
$all_nation = mysqli_query($dbconfig,$sql21);
$all_nation2 = mysqli_query($dbconfig,$sql21);
$sql22 = "SELECT * FROM `marital`";
$all_marital = mysqli_query($dbconfig,$sql22);
$all_marital2 = mysqli_query($dbconfig,$sql22);
$sql23 = "SELECT * FROM `race` ";
$all_race = mysqli_query($dbconfig,$sql23);
$all_race2 = mysqli_query($dbconfig,$sql23);
$sql24 = "SELECT * FROM `religion` ";
$all_religion = mysqli_query($dbconfig,$sql24);
$all_religion2 = mysqli_query($dbconfig,$sql24);
$sql25 = "SELECT * FROM `guardian_relations` ";
$all_relation = mysqli_query($dbconfig,$sql25);
$all_relation2 = mysqli_query($dbconfig,$sql25);
$sql26 = "SELECT * FROM `household` ";
$all_household = mysqli_query($dbconfig,$sql26);
$sql27 = "SELECT * FROM `household_income` ";
$all_income = mysqli_query($dbconfig,$sql27);

?>
  <div class="az-content-header d-block d-md-flex">
    <div>
      <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Change Password</h2>
      <p class="mg-b-0">Once your password was successfully changed, you will be prompted to login again.</p>
    </div>
    <div class="az-dashboard-header-right">
    </div><!-- az-dashboard-header-right -->
  </div><!-- az-content-header -->
  <div class="az-content-body">
  <div class="row row-sm">
  <div class="col-md-12 col-lg-12 col-xl-10">
    <div class="card card-dashboard-seven">
      <div class="card-body">
        <p class="mg-b-20"></p>
        <form action="save_parent.php" method="post">     
<?php while($data2 = mysqli_fetch_array($records2)) { ?>
<p class="mg-b-20"></p>
<div class="row row-sm">
<div class="col-md-5 col-lg-4">
<div class="form-group">
  <label class="form-control-label">Old Password:</label>
  <input id="icp1" class="form-control" name="" placeholder="" type="text" value="" >
</div><!-- form group -->
</div><!--col-->
</div><!-- row -->
<hr/>
<div class="row row-sm">
<div class="col-md-5 col-lg-4">
<div class="form-group">
  <label class="form-control-label">New Password:</label>
  <input id="icp1" class="form-control" name="" placeholder="Eg: Umpa.123" type="text" value="" >
</div><!-- form group -->
</div><!--col-->
<div class="col-md-5 col-lg-4">
<div class="form-group">
  <label class="form-control-label">Confirm Password:</label>
  <input id="icp1" class="form-control" name="" placeholder="" type="text" value="" >
</div><!-- form group -->
</div><!--col-->
</div><!-- row -->

<?php } ?>
<input type="submit" name="submit" value="Save Changes" class="btn btn-az-primary btn-block">
</form>
   
        </div><!-- card-body -->
    </div><!-- card -->
</div><!-- col -->
<div class="col-md-2 col-xl-2 mg-t-2 mg-md-t-2">
        <div class="card card-dashboard-seven">
        <div class="card-body">
        <?php 
          $sql_1 = "SELECT * FROM parent WHERE stud_ic = '$ic'";
          $result_1 = mysqli_query($dbconfig, $sql_1);
          while($row11 = mysqli_fetch_row($result_1)){
              $empty_count = 0;
              $count = count($row11);
              for($i = 0; $i < $count; $i++)
                  if($row11[$i] === '' || $row11[$i] === 'NULL'|| $row11[$i] === ' ')
                      $empty_count++;
                  $percent = (int)(100*(1-$empty_count/($count-1)));
          }
          ?>
            <p>Complete</p>
            <?php echo $percent.'%'; ?>
            <div class="progress mg-b-20">
        <div style="width: <?php echo $percent.'%'; ?>;height: 30px;background-color: #4CAF50;text-align: center;line-height: 30px;color: white;" role="progressbar" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
        </div></div></div>
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
