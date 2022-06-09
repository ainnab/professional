<?php include 'header_admin.php' ?>
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">List To Process</h2>
        </div>
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card card-dashboard-seven">
		<div class="card-body">
		<div>
          <center><h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Aliran Sastera</h2></center>
        </div>
          <?php 
    include 'talum.php';
    $ic=$_SESSION['ic'];
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
	/*$checkaliran=mysqli_query($dbconfig,"select * from qualification_info where stud_ic='$ic'");
	while($ca=mysqli_fetch_array($checkaliran)){
		$spm_aliran='spm_aliran';
	}*/
   ?>

<?php while($data = mysqli_fetch_array($records)) {
?>
      <div class="col-6 col-md-4 col-xl-11">
         <?php $result = mysqli_query($dbconfig,"SELECT * FROM qualification_info INNER JOIN student ON qualification_info.stud_ic = student.stud_ic WHERE role='student' and spm_aliran='A'");
			?>
            <?php if (mysqli_num_rows($result) > 0){
				?>
          <div>
            <table id="example1" class="table">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-25p">NAME</th>
                  <th class="wd-20p">BM</th>
                  <th class="wd-15p">BI</th>
                  <th class="wd-20p">MT</th>
                  <th class="wd-20p">SJ</th>
				  <th class="wd-20p">ACTION</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=0; $j=1;{ while($row = mysqli_fetch_array($result)) {
						$kodspm1=$row['gredspm1'];
						$kodspm2=$row['gredspm2'];
						$kodspm3=$row['gredspm3'];
						$kodspm4=$row['gredspm4'];
						$kodspm5=$row['gredspm5'];
						$kodspm6=$row['gredspm6'];	

						//UNTUK KODSPM1
						if($kodspm1=='0'){
							$gredspm1='A+';
						}else if($kodspm1=='1'){
							$gredspm1='A  / 1A / A1';
						}else if($kodspm1=='2'){
							$gredspm1='A- / 2A / A2';
						}else if($kodspm1=='3'){
							$gredspm1='B+ / 3B / C3';
						}else if($kodspm1=='4'){
							$gredspm1='B  / 4B / C4';
						}else if($kodspm1=='5'){
							$gredspm1='C+ / 5C / C5';
						}else if($kodspm1=='6'){
							$gredspm1='C  / 6C / C6';
						}else if($kodspm1=='7'){
							$gredspm1='D  / 7D / P7';
						}else if($kodspm1=='8'){
							$gredspm1='E  / 8E / P8';
						}else if($kodspm1=='9'){
							$gredspm1='F  / 9G / F9';
						}else if($kodspm1=='R'){
							$gredspm1='Rujukan LPM';
						}else if($kodspm1=='Z'){
							$gredspm1='Masalah Keputusan';
						}else if($kodspm1=='T'){
							$gredspm1='Tidak Hadir';
						}else if($kodspm1=='X'){
							$gredspm1='Tiada';
						}
						
						//UNTUK KODSPM2
						if($kodspm2=='0'){
							$gredspm2='A+';
						}else if($kodspm2=='1'){
							$gredspm2='A  / 1A / A1';
						}else if($kodspm2=='2'){
							$gredspm2='A- / 2A / A2';
						}else if($kodspm2=='3'){
							$gredspm2='B+ / 3B / C3';
						}else if($kodspm2=='4'){
							$gredspm2='B  / 4B / C4';
						}else if($kodspm2=='5'){
							$gredspm2='C+ / 5C / C5';
						}else if($kodspm2=='6'){
							$gredspm2='C  / 6C / C6';
						}else if($kodspm2=='7'){
							$gredspm2='D  / 7D / P7';
						}else if($kodspm2=='8'){
							$gredspm2='E  / 8E / P8';
						}else if($kodspm2=='9'){
							$gredspm2='F  / 9G / F9';
						}else if($kodspm2=='R'){
							$gredspm2='Rujukan LPM';
						}else if($kodspm2=='Z'){
							$gredspm2='Masalah Keputusan';
						}else if($kodspm2=='T'){
							$gredspm2='Tidak Hadir';
						}else if($kodspm2=='X'){
							$gredspm2='Tiada';
						}
						
						//UNTUK KODSPM3
						if($kodspm3=='0'){
							$gredspm3='A+';
						}else if($kodspm3=='1'){
							$gredspm3='A  / 1A / A1';
						}else if($kodspm3=='2'){
							$gredspm3='A- / 2A / A2';
						}else if($kodspm3=='3'){
							$gredspm3='B+ / 3B / C3';
						}else if($kodspm3=='4'){
							$gredspm3='B  / 4B / C4';
						}else if($kodspm3=='5'){
							$gredspm3='C+ / 5C / C5';
						}else if($kodspm3=='6'){
							$gredspm3='C  / 6C / C6';
						}else if($kodspm3=='7'){
							$gredspm3='D  / 7D / P7';
						}else if($kodspm3=='8'){
							$gredspm3='E  / 8E / P8';
						}else if($kodspm3=='9'){
							$gredspm3='F  / 9G / F9';
						}else if($kodspm3=='R'){
							$gredspm3='Rujukan LPM';
						}else if($kodspm3=='Z'){
							$gredspm3='Masalah Keputusan';
						}else if($kodspm3=='T'){
							$gredspm3='Tidak Hadir';
						}else if($kodspm3=='X'){
							$gredspm3='Tiada';
						}
						
						//UNTUK KODSPM4
						if($kodspm4=='0'){
							$gredspm4='A+';
						}else if($kodspm4=='1'){
							$gredspm4='A  / 1A / A1';
						}else if($kodspm4=='2'){
							$gredspm4='A- / 2A / A2';
						}else if($kodspm4=='3'){
							$gredspm4='B+ / 3B / C3';
						}else if($kodspm4=='4'){
							$gredspm4='B  / 4B / C4';
						}else if($kodspm4=='5'){
							$gredspm4='C+ / 5C / C5';
						}else if($kodspm4=='6'){
							$gredspm4='C  / 6C / C6';
						}else if($kodspm4=='7'){
							$gredspm4='D  / 7D / P7';
						}else if($kodspm4=='8'){
							$gredspm4='E  / 8E / P8';
						}else if($kodspm4=='9'){
							$gredspm4='F  / 9G / F9';
						}else if($kodspm4=='R'){
							$gredspm4='Rujukan LPM';
						}else if($kodspm4=='Z'){
							$gredspm4='Masalah Keputusan';
						}else if($kodspm4=='T'){
							$gredspm4='Tidak Hadir';
						}else if($kodspm4=='X'){
							$gredspm3='Tiada';
						}
						
						//UNTUK KODSPM5
						if($kodspm5=='0'){
							$gredspm5='A+';
						}else if($kodspm5=='1'){
							$gredspm5='A  / 1A / A1';
						}else if($kodspm5=='2'){
							$gredspm5='A- / 2A / A2';
						}else if($kodspm5=='3'){
							$gredspm5='B+ / 3B / C3';
						}else if($kodspm5=='4'){
							$gredspm5='B  / 4B / C4';
						}else if($kodspm5=='5'){
							$gredspm5='C+ / 5C / C5';
						}else if($kodspm5=='6'){
							$gredspm5='C  / 6C / C6';
						}else if($kodspm5=='7'){
							$gredspm5='D  / 7D / P7';
						}else if($kodspm5=='8'){
							$gredspm5='E  / 8E / P8';
						}else if($kodspm5=='9'){
							$gredspm5='F  / 9G / F9';
						}else if($kodspm5=='R'){
							$gredspm5='Rujukan LPM';
						}else if($kodspm5=='Z'){
							$gredspm5='Masalah Keputusan';
						}else if($kodspm5=='T'){
							$gredspm5='Tidak Hadir';
						}else if($kodspm5=='X'){
							$gredspm5='Tiada';
						}
						
						//UNTUK KODSPM6
						if($kodspm6=='0'){
							$gredspm6='A+';
						}else if($kodspm6=='1'){
							$gredspm6='A  / 1A / A1';
						}else if($kodspm6=='2'){
							$gredspm6='A- / 2A / A2';
						}else if($kodspm6=='3'){
							$gredspm6='B+ / 3B / C3';
						}else if($kodspm6=='4'){
							$gredspm6='B  / 4B / C4';
						}else if($kodspm6=='5'){
							$gredspm6='C+ / 5C / C5';
						}else if($kodspm6=='6'){
							$gredspm6='C  / 6C / C6';
						}else if($kodspm6=='7'){
							$gredspm6='D  / 7D / P7';
						}else if($kodspm6=='8'){
							$gredspm6='E  / 8E / P8';
						}else if($kodspm6=='9'){
							$gredspm6='F  / 9G / F9';
						}else if($kodspm6=='R'){
							$gredspm6='Rujukan LPM';
						}else if($kodspm6=='Z'){
							$gredspm5='Masalah Keputusan';
						}else if($kodspm6=='T'){
							$gredspm6='Tidak Hadir';
						}else if($kodspm6=='X'){
							$gredspm6='Tiada';
						}
						
								  ?>
                            <tr>
                            <td><?php echo $j++;  ?></td>
                            <td><?php echo $row["stud_ic"]; ?></td>
                            <td><?php echo $gredspm1; ?></td>
                            <td><?php echo $gredspm2; ?></td>
                            <td><?php echo $gredspm3; ?></td>
                            <td><?php echo $gredspm4; ?></td>
							<td><a href="view.php?id=<?php echo $row["stud_ic"]; ?>">View</a></td>
                            </tr>
            <?php $i++;  }
			  }			?>
              </tbody>
            </table>
            <?php } else{  echo "No result found"; } ?>
<?php }		?>
              </div>
        
            
         </div></div>
		 </div><!-- card-body -->
		 </div><!-- card -->
		</div><!-- col -->
	<div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card card-dashboard-seven">
          <div class="card-body">
		  <div>
          <center><h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Aliran Sains</h2></center>
        </div>
          <?php 
    $ic=$_SESSION['ic'];
    $records1 = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
	?>

<?php while($data = mysqli_fetch_array($records1)) {
?>
      <div class="col-6 col-md-4 col-xl-11">
         <?php $result1 = mysqli_query($dbconfig,"SELECT * FROM qualification_info INNER JOIN student ON qualification_info.stud_ic = student.stud_ic WHERE role='student' and spm_aliran='S'");
			?>
            <?php if (mysqli_num_rows($result1) > 0){
				?>
          <div>
            <table id="example2" class="table">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-25p">NAME</th>
                  <th class="wd-20p">BIO</th>
                  <th class="wd-15p">ADD MATHS</th>
                  <th class="wd-20p">CHEM</th>
                  <th class="wd-20p">PHYS</th>
				  <th class="wd-20p">ACTION</th>
                </tr>
              </thead>
              <tbody>
              <?php $u=0; $h=1;{ while($row1 = mysqli_fetch_array($result1)) {
						$kodspm1=$row1['gredspm1'];
						$kodspm2=$row1['gredspm2'];
						$kodspm3=$row1['gredspm3'];
						$kodspm4=$row1['gredspm4'];
						$kodspm5=$row1['gredspm5'];
						$kodspm6=$row1['gredspm6'];	

						//UNTUK KODSPM1
						if($kodspm1=='0'){
							$gredspm1='A+';
						}else if($kodspm1=='1'){
							$gredspm1='A  / 1A / A1';
						}else if($kodspm1=='2'){
							$gredspm1='A- / 2A / A2';
						}else if($kodspm1=='3'){
							$gredspm1='B+ / 3B / C3';
						}else if($kodspm1=='4'){
							$gredspm1='B  / 4B / C4';
						}else if($kodspm1=='5'){
							$gredspm1='C+ / 5C / C5';
						}else if($kodspm1=='6'){
							$gredspm1='C  / 6C / C6';
						}else if($kodspm1=='7'){
							$gredspm1='D  / 7D / P7';
						}else if($kodspm1=='8'){
							$gredspm1='E  / 8E / P8';
						}else if($kodspm1=='9'){
							$gredspm1='F  / 9G / F9';
						}else if($kodspm1=='R'){
							$gredspm1='Rujukan LPM';
						}else if($kodspm1=='Z'){
							$gredspm1='Masalah Keputusan';
						}else if($kodspm1=='T'){
							$gredspm1='Tidak Hadir';
						}else if($kodspm1=='X'){
							$gredspm1='Tiada';
						}
						
						//UNTUK KODSPM2
						if($kodspm2=='0'){
							$gredspm2='A+';
						}else if($kodspm2=='1'){
							$gredspm2='A  / 1A / A1';
						}else if($kodspm2=='2'){
							$gredspm2='A- / 2A / A2';
						}else if($kodspm2=='3'){
							$gredspm2='B+ / 3B / C3';
						}else if($kodspm2=='4'){
							$gredspm2='B  / 4B / C4';
						}else if($kodspm2=='5'){
							$gredspm2='C+ / 5C / C5';
						}else if($kodspm2=='6'){
							$gredspm2='C  / 6C / C6';
						}else if($kodspm2=='7'){
							$gredspm2='D  / 7D / P7';
						}else if($kodspm2=='8'){
							$gredspm2='E  / 8E / P8';
						}else if($kodspm2=='9'){
							$gredspm2='F  / 9G / F9';
						}else if($kodspm2=='R'){
							$gredspm2='Rujukan LPM';
						}else if($kodspm2=='Z'){
							$gredspm2='Masalah Keputusan';
						}else if($kodspm2=='T'){
							$gredspm2='Tidak Hadir';
						}else if($kodspm2=='X'){
							$gredspm2='Tiada';
						}
						
						//UNTUK KODSPM3
						if($kodspm3=='0'){
							$gredspm3='A+';
						}else if($kodspm3=='1'){
							$gredspm3='A  / 1A / A1';
						}else if($kodspm3=='2'){
							$gredspm3='A- / 2A / A2';
						}else if($kodspm3=='3'){
							$gredspm3='B+ / 3B / C3';
						}else if($kodspm3=='4'){
							$gredspm3='B  / 4B / C4';
						}else if($kodspm3=='5'){
							$gredspm3='C+ / 5C / C5';
						}else if($kodspm3=='6'){
							$gredspm3='C  / 6C / C6';
						}else if($kodspm3=='7'){
							$gredspm3='D  / 7D / P7';
						}else if($kodspm3=='8'){
							$gredspm3='E  / 8E / P8';
						}else if($kodspm3=='9'){
							$gredspm3='F  / 9G / F9';
						}else if($kodspm3=='R'){
							$gredspm3='Rujukan LPM';
						}else if($kodspm3=='Z'){
							$gredspm3='Masalah Keputusan';
						}else if($kodspm3=='T'){
							$gredspm3='Tidak Hadir';
						}else if($kodspm3=='X'){
							$gredspm3='Tiada';
						}
						
						//UNTUK KODSPM4
						if($kodspm4=='0'){
							$gredspm4='A+';
						}else if($kodspm4=='1'){
							$gredspm4='A  / 1A / A1';
						}else if($kodspm4=='2'){
							$gredspm4='A- / 2A / A2';
						}else if($kodspm4=='3'){
							$gredspm4='B+ / 3B / C3';
						}else if($kodspm4=='4'){
							$gredspm4='B  / 4B / C4';
						}else if($kodspm4=='5'){
							$gredspm4='C+ / 5C / C5';
						}else if($kodspm4=='6'){
							$gredspm4='C  / 6C / C6';
						}else if($kodspm4=='7'){
							$gredspm4='D  / 7D / P7';
						}else if($kodspm4=='8'){
							$gredspm4='E  / 8E / P8';
						}else if($kodspm4=='9'){
							$gredspm4='F  / 9G / F9';
						}else if($kodspm4=='R'){
							$gredspm4='Rujukan LPM';
						}else if($kodspm4=='Z'){
							$gredspm4='Masalah Keputusan';
						}else if($kodspm4=='T'){
							$gredspm4='Tidak Hadir';
						}else if($kodspm4=='X'){
							$gredspm3='Tiada';
						}
						
						//UNTUK KODSPM5
						if($kodspm5=='0'){
							$gredspm5='A+';
						}else if($kodspm5=='1'){
							$gredspm5='A  / 1A / A1';
						}else if($kodspm5=='2'){
							$gredspm5='A- / 2A / A2';
						}else if($kodspm5=='3'){
							$gredspm5='B+ / 3B / C3';
						}else if($kodspm5=='4'){
							$gredspm5='B  / 4B / C4';
						}else if($kodspm5=='5'){
							$gredspm5='C+ / 5C / C5';
						}else if($kodspm5=='6'){
							$gredspm5='C  / 6C / C6';
						}else if($kodspm5=='7'){
							$gredspm5='D  / 7D / P7';
						}else if($kodspm5=='8'){
							$gredspm5='E  / 8E / P8';
						}else if($kodspm5=='9'){
							$gredspm5='F  / 9G / F9';
						}else if($kodspm5=='R'){
							$gredspm5='Rujukan LPM';
						}else if($kodspm5=='Z'){
							$gredspm5='Masalah Keputusan';
						}else if($kodspm5=='T'){
							$gredspm5='Tidak Hadir';
						}else if($kodspm5=='X'){
							$gredspm5='Tiada';
						}
						
						//UNTUK KODSPM6
						if($kodspm6=='0'){
							$gredspm6='A+';
						}else if($kodspm6=='1'){
							$gredspm6='A  / 1A / A1';
						}else if($kodspm6=='2'){
							$gredspm6='A- / 2A / A2';
						}else if($kodspm6=='3'){
							$gredspm6='B+ / 3B / C3';
						}else if($kodspm6=='4'){
							$gredspm6='B  / 4B / C4';
						}else if($kodspm6=='5'){
							$gredspm6='C+ / 5C / C5';
						}else if($kodspm6=='6'){
							$gredspm6='C  / 6C / C6';
						}else if($kodspm6=='7'){
							$gredspm6='D  / 7D / P7';
						}else if($kodspm6=='8'){
							$gredspm6='E  / 8E / P8';
						}else if($kodspm6=='9'){
							$gredspm6='F  / 9G / F9';
						}else if($kodspm6=='R'){
							$gredspm6='Rujukan LPM';
						}else if($kodspm6=='Z'){
							$gredspm5='Masalah Keputusan';
						}else if($kodspm6=='T'){
							$gredspm6='Tidak Hadir';
						}else if($kodspm6=='X'){
							$gredspm6='Tiada';
						}
						
								  ?>
                            <tr>
                            <td><?php echo $h++;  ?></td>
                            <td><?php echo $row1["stud_ic"]; ?></td>
                            <td><?php echo $gredspm1; ?></td>
                            <td><?php echo $gredspm2; ?></td>
                            <td><?php echo $gredspm3; ?></td>
                            <td><?php echo $gredspm4; ?></td>
							<td><a href="view.php?id=<?php echo $row1["stud_ic"]; ?>">View</a></td>
                            </tr>
            <?php $u++;  }
			  }			?>
              </tbody>
            </table>
            <?php } else{  echo "No result found"; } ?>
<?php }		?>
              </div>
        
            
         </div></div>
		 
		 
         </div><!-- card-body -->
		 
		 
        </div><!-- card -->
		
		
    </div>
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
