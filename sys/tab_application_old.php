
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
      if($data2['app_option'] == '1'){
        
        include 'header_diploma.php';
      }
      else{
        include 'header_degree.php';
      }
       }     
    ?>
    <?php     
    $sql31 = "SELECT * FROM `spm_subject`";
    $all_sub = mysqli_query($dbconfig,$sql31);
    $sql32 = "SELECT * FROM `spm_grade`";  
    $records3 = mysqli_query($dbconfig,"select * from application where stud_ic='$ic'"); 
    while($data = mysqli_fetch_array($records3)) {         
    ?>

      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Application Information</h2>
          <p class="mg-b-0">Please complete all the information below.</p>
        </div>
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-10">
        <div class="card card-dashboard-seven">
          <div class="card-body">
      <form action="save_application.php" method="post">
      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group">
          <label for="seeAnotherField">Programme Category -First Choice:</label>
          <select class="form-control" id="seeAnotherField" name="pgFirst">
          <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                              <?php
                                  $sql4 = "SELECT * FROM program WHERE pg_code != 'A'";
                                  $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig));
                                  while( $row4 = mysqli_fetch_assoc($result4) ) {
                                      $pgCode=$row4['pg_code'];
                                      $pgName=strtolower($row4['pg_name']);
                                  ?>
                                  <option value="<?php echo $pgCode; ?>"<?php if($pgCode==$data['first_choice']) echo 'selected="selected"'; ?>><?php echo ucwords($pgName); ?></option>
                              <?php }	?>
          </select>
          </div>
        </div> 
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group" id="otherFieldDiv">
            <label for="otherField">Diploma -First Choice:</label>
            <select class="form-control" id="seeAnotherField" name=pgDipFirst[]">
            <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                    $dta = $data['firstList'];
                                    $dta1 = explode(",", $dta);
                                    $sql42 = "SELECT * FROM program_diploma";
                                    $result42 = mysqli_query($dbconfig3, $sql42) or die("database error:". mysqli_error($dbconfig3));
                                    while( $row42 = mysqli_fetch_assoc($result42) ) {
                                        $pgCode2=$row42['pg_code'];
                                        $pgName2=strtolower($row42['pg_name']);
                                    ?>
                                    <option value="<?php echo $pgCode2; ?>"<?php if($pgCode2==$dta1[0]) echo 'selected="selected"'; ?>><?php echo ucwords($pgName2); ?></option>
                                <?php }	?>
            </select>
            <p class="mg-b-20"></p>
            <label for="otherField">Diploma -Second Choice:</label>
            <select class="form-control" id="seeAnotherField" name="pgDipFirst[]">
            <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                    $dta1 = $data['firstList'];
                                    $dta11 = explode(",", $dta1);
                                    $dataa[$dta11[0]] = isset($dta11[1]) ? $dta11[1] : null; //if array1 is null, set to null
                                    $sql43 = "SELECT * FROM program_diploma";
                                    $result43 = mysqli_query($dbconfig3, $sql43) or die("database error:". mysqli_error($dbconfig3));
                                    while( $row43 = mysqli_fetch_assoc($result43) ) {
                                        $pgCode3=$row43['pg_code'];
                                        $pgName3=strtolower($row43['pg_name']);
                                    ?>
                                    <option value="<?php echo $pgCode3; ?>"<?php if($pgCode3==$dataa[$dta11[0]]) echo 'selected="selected"'; ?>><?php echo ucwords($pgName3); ?></option>
                                <?php }	?>
            </select>
            <p class="mg-b-20"></p>
            <label for="otherField">Diploma -Third Choice:</label>
            <select class="form-control" id="seeAnotherField" name="pgDipFirst[]">
            <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                    $dta2 = $data['firstList'];
                                    $dta12 = explode(",", $dta2);
                                    $dataa[$dta12[0]] = isset($dta12[2]) ? $dta12[2] : null; //if array2 is null, set to null
                                    $sql44 = "SELECT * FROM program_diploma";
                                    $result44 = mysqli_query($dbconfig3, $sql44) or die("database error:". mysqli_error($dbconfig3));
                                    while( $row44 = mysqli_fetch_assoc($result44) ) {
                                        $pgCode4=$row44['pg_code'];
                                        $pgName4=strtolower($row44['pg_name']);
                                    ?>
                                    <option value="<?php echo $pgCode4; ?>"<?php if($pgCode4==$dataa[$dta12[0]]) echo 'selected="selected"'; ?>><?php echo ucwords($pgName4); ?></option>
                                <?php }	?>
            </select>
          </div>
   
        <div class="form-group" id="otherFieldDiv2">
          <label for="otherField3">Pre Diploma Programme:</label>
            <input type="text" class="form-control" id="otherField3" value="PREDIP" name="pgPreDip1[]" readonly>
        </div>
        <div class="form-group" id="otherFieldDiv3">
          <label for="otherField4">Foundation Programme:</label>
            <input type="text" class="form-control" id="otherField4" value="FOUNDATION" name="pgFoundation1[]" readonly>
        </div>
      </div>
      </div><!-- row -->
      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group">
          <label for="seeAnotherField2">Programme Category -Second Choice:</label>
          <select class="form-control" id="seeAnotherField2" name="pgSecond">
          <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                              <?php
                                  $sql4 = "SELECT * FROM program WHERE pg_code != 'A'";
                                  $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig));
                                  while( $row4 = mysqli_fetch_assoc($result4) ) {
                                      $pgCode=$row4['pg_code'];
                                      $pgName=strtolower($row4['pg_name']);
                                  ?>
                                  <option value="<?php echo $pgCode; ?>"<?php if($pgCode==$data['second_choice']) echo 'selected="selected"'; ?>><?php echo ucwords($pgName); ?></option>
                              <?php }	?>
          </select>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group" id="otherFieldDiv5">
            <label for="otherField5">Diploma -First Choice:</label>
            <select class="form-control" id="seeAnotherField2" name=pgDipSecond[]">
            <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                     $dta = $data['secList'];
                                     $dta1 = explode(",", $dta);
                                    $sql42 = "SELECT * FROM program_diploma";
                                    $result42 = mysqli_query($dbconfig3, $sql42) or die("database error:". mysqli_error($dbconfig3));
                                    while( $row42 = mysqli_fetch_assoc($result42) ) {
                                        $pgCode2=$row42['pg_code'];
                                        $pgName2=strtolower($row42['pg_name']);
                                    ?>
                                    <option value="<?php echo $pgCode2; ?>"<?php if($pgCode2==$dta1[0]) echo 'selected="selected"'; ?>><?php echo ucwords($pgName2); ?></option>
                                <?php }	?>
            </select>
            <p class="mg-b-20"></p>
            <label for="otherField5">Diploma -Second Choice:</label>
            <select class="form-control" id="seeAnotherField2" name="pgDipSecond[]">
            <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                    $dta1 = $data['secList'];
                                    $dta11 = explode(",", $dta1);
                                    $dataa[$dta11[0]] = isset($dta11[1]) ? $dta11[1] : null; //if array1 is null, set to null
                                    $sql43 = "SELECT * FROM program_diploma";
                                    $result43 = mysqli_query($dbconfig3, $sql43) or die("database error:". mysqli_error($dbconfig3));
                                    while( $row43 = mysqli_fetch_assoc($result43) ) {
                                        $pgCode3=$row43['pg_code'];
                                        $pgName3=strtolower($row43['pg_name']);
                                    ?>
                                    <option value="<?php echo $pgCode3; ?>"<?php if($pgCode3==$dataa[$dta11[0]]) echo 'selected="selected"'; ?>><?php echo ucwords($pgName3); ?></option>
                                <?php }	?>
            </select>
            <p class="mg-b-20"></p>
            <label for="otherField5">Diploma -Third Choice:</label>
            <select class="form-control" id="seeAnotherField2" name="pgDipSecond[]">
            <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                    $dta2 = $data['secList'];
                                    $dta12 = explode(",", $dta2);
                                    $dataa[$dta12[0]] = isset($dta12[2]) ? $dta12[2] : null; //if array2 is null, set to null
                                    $sql44 = "SELECT * FROM program_diploma";
                                    $result44 = mysqli_query($dbconfig3, $sql44) or die("database error:". mysqli_error($dbconfig3));
                                    while( $row44 = mysqli_fetch_assoc($result44) ) {
                                        $pgCode4=$row44['pg_code'];
                                        $pgName4=strtolower($row44['pg_name']);
                                    ?>
                                    <option value="<?php echo $pgCode4; ?>"<?php if($pgCode4==$dataa[$dta12[0]]) echo 'selected="selected"'; ?>><?php echo ucwords($pgName4); ?></option>
                                <?php }	?>
            </select>
          </div>
   
        <div class="form-group" id="otherFieldDiv6">
          <label for="otherField6">Pre Diploma Programme:</label>
            <input type="text" class="form-control" id="otherField6" value="PREDIP" name="pgPreDip2[]" readonly>
        </div>
        <div class="form-group" id="otherFieldDiv7">
          <label for="otherField7">Foundation Programme:</label>
            <input type="text" class="form-control" id="otherField7" value="FOUNDATION" name="pgFoundation2[]" readonly>
        </div>
      </div>
      </div><!-- row -->
      <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group">
          <label for="seeAnotherField3">Programme Category -Third Choice:</label>
          <select class="form-control" id="seeAnotherField3" name="pgThird">
          <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                              <?php
                                  $sql4 = "SELECT * FROM program WHERE pg_code != 'A'";
                                  $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig));
                                  while( $row4 = mysqli_fetch_assoc($result4) ) {
                                      $pgCode=$row4['pg_code'];
                                      $pgName=strtolower($row4['pg_name']);
                                  ?>
                                  <option value="<?php echo $pgCode; ?>"<?php if($pgCode==$data['third_choice']) echo 'selected="selected"'; ?>><?php echo ucwords($pgName); ?></option>
                              <?php }	?>
          </select>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-6">
          <div class="form-group" id="otherFieldDiv8">
            <label for="otherField8">Diploma -First Choice:</label>
            <select class="form-control" id="seeAnotherField3" name=pgDipThird[]">
            <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                    $dta = $data['secList'];
                                    $dta1 = explode(",", $dta);
                                    $sql42 = "SELECT * FROM program_diploma";
                                    $result42 = mysqli_query($dbconfig3, $sql42) or die("database error:". mysqli_error($dbconfig3));
                                    while( $row42 = mysqli_fetch_assoc($result42) ) {
                                        $pgCode2=$row42['pg_code'];
                                        $pgName2=strtolower($row42['pg_name']);
                                    ?>
                                    <option value="<?php echo $pgCode2; ?>"<?php if($pgCode2==$dta1[0]) echo 'selected="selected"'; ?>><?php echo ucwords($pgName2); ?></option>
                                <?php }	?>
            </select>
            <p class="mg-b-20"></p>
            <label for="otherField8">Diploma -Second Choice:</label>
            <select class="form-control" id="seeAnotherField3" name="pgDipThird[]">
            <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                    $dta1 = $data['thirdList'];
                                    $dta11 = explode(",", $dta1);
                                    $dataa[$dta11[0]] = isset($dta11[1]) ? $dta11[1] : null; //if array1 is null, set to null
                                    $sql43 = "SELECT * FROM program_diploma";
                                    $result43 = mysqli_query($dbconfig3, $sql43) or die("database error:". mysqli_error($dbconfig3));
                                    while( $row43 = mysqli_fetch_assoc($result43) ) {
                                        $pgCode3=$row43['pg_code'];
                                        $pgName3=strtolower($row43['pg_name']);
                                    ?>
                                    <option value="<?php echo $pgCode3; ?>"<?php if($pgCode3==$dataa[$dta11[0]]) echo 'selected="selected"'; ?>><?php echo ucwords($pgName3); ?></option>
                                <?php }	?>
            </select>
            <p class="mg-b-20"></p>
            <label for="otherField8">Diploma -Third Choice:</label>
            <select class="form-control" id="seeAnotherField3" name="pgDipThird[]">
            <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                                <?php
                                    $dta2 = $data['thirdList'];
                                    $dta12 = explode(",", $dta2);
                                    $dataa[$dta12[0]] = isset($dta12[2]) ? $dta12[2] : null; //if array2 is null, set to null
                                    $sql44 = "SELECT * FROM program_diploma";
                                    $result44 = mysqli_query($dbconfig3, $sql44) or die("database error:". mysqli_error($dbconfig3));
                                    while( $row44 = mysqli_fetch_assoc($result44) ) {
                                        $pgCode4=$row44['pg_code'];
                                        $pgName4=strtolower($row44['pg_name']);
                                    ?>
                                    <option value="<?php echo $pgCode4; ?>"<?php if($pgCode4==$dataa[$dta12[0]]) echo 'selected="selected"'; ?>><?php echo ucwords($pgName4); ?></option>
                                <?php }	?>
            </select>
          </div>
   
        <div class="form-group" id="otherFieldDiv9">
          <label for="otherField6">Pre Diploma Programme:</label>
            <input type="text" class="form-control" id="otherField9" value="PREDIP" name="pgPreDip3[]" readonly>
        </div>
        <div class="form-group" id="otherFieldDiv10">
          <label for="otherField7">Foundation Programme:</label>
            <input type="text" class="form-control" id="otherField10" value="FOUNDATION" name="pgFoundation3[]" readonly>
        </div>
      </div>
      </div><!-- row --><?php } ?>
      <input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block">   
      </form>            
            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
    <div class="col-md-2 col-xl-2 mg-t-2 mg-md-t-2">
            <div class="card card-dashboard-seven">
              <div class="card-body">
              <?php 
              $sql_1 = "SELECT * FROM application WHERE stud_ic = '$ic'";
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
            </div>
    </div>
  </div>
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
    <script src="../lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../lib/raphael/raphael.min.js"></script>
    <script src="../lib/morris.js/morris.min.js"></script>
    <script src="../lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="../lib/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script>
//first choice
$("#seeAnotherField").change(function() {
			if ($(this).val() == "DIP") {
				$('#otherFieldDiv').show();
				$('#otherField').attr('required','');
				$('#otherField').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv').hide();
				$('#otherField').removeAttr('required');
				$('#otherField').removeAttr('data-error');				
			}
      if ($(this).val() == "PREDIP") {
				$('#otherFieldDiv2').show();
				$('#otherField3').attr('required','');
				$('#otherField3').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv2').hide();
				$('#otherField3').removeAttr('required');
				$('#otherField3').removeAttr('data-error');				
			}
      if ($(this).val() == "FOUNDATION") {
				$('#otherFieldDiv3').show();
				$('#otherField4').attr('required','');
				$('#otherField4').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv3').hide();
				$('#otherField4').removeAttr('required');
				$('#otherField4').removeAttr('data-error');				
			}
		});
		$("#seeAnotherField").trigger("change");
		

		</script>
    <script>
//second choice
$("#seeAnotherField2").change(function() {
			if ($(this).val() == "DIP") {
				$('#otherFieldDiv5').show();
				$('#otherField5').attr('required','');
				$('#otherField5').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv5').hide();
				$('#otherField5').removeAttr('required');
				$('#otherField5').removeAttr('data-error');				
			}
      if ($(this).val() == "PREDIP") {
				$('#otherFieldDiv6').show();
				$('#otherField6').attr('required','');
				$('#otherField6').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv6').hide();
				$('#otherField6').removeAttr('required');
				$('#otherField6').removeAttr('data-error');				
			}
      if ($(this).val() == "FOUNDATION") {
				$('#otherFieldDiv7').show();
				$('#otherField7').attr('required','');
				$('#otherField7').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv7').hide();
				$('#otherField7').removeAttr('required');
				$('#otherField7').removeAttr('data-error');				
			}
		});
		$("#seeAnotherField2").trigger("change");
		

		</script>
      <script>
//third choice
$("#seeAnotherField3").change(function() {
			if ($(this).val() == "DIP") {
				$('#otherFieldDiv8').show();
				$('#otherField8').attr('required','');
				$('#otherField8').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv8').hide();
				$('#otherField8').removeAttr('required');
				$('#otherField8').removeAttr('data-error');				
			}
      if ($(this).val() == "PREDIP") {
				$('#otherFieldDiv9').show();
				$('#otherField9').attr('required','');
				$('#otherField9').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv9').hide();
				$('#otherField9').removeAttr('required');
				$('#otherField9').removeAttr('data-error');				
			}
      if ($(this).val() == "FOUNDATION") {
				$('#otherFieldDiv10').show();
				$('#otherField10').attr('required','');
				$('#otherField10').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv10').hide();
				$('#otherField10').removeAttr('required');
				$('#otherField10').removeAttr('data-error');				
			}
		});
		$("#seeAnotherField3").trigger("change");
		

		</script>

   

  
    <script src="../js/azia.js"></script>
    <script>  
    $(document).ready(function(){  
          var i=1;  
          $('#add').click(function(){  
              i++;  
              $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="sub" class="form-control select2"><option>Select</option><?php include 'talum.php'; $sql31 = "SELECT * FROM `spm_subject`"; $all_sub = mysqli_query($dbconfig,$sql31); while ($sub = mysqli_fetch_array($all_sub,MYSQLI_ASSOC)):; ?><option value="<?php echo $sub["subject_code"];?>"><?php echo $sub["subject_name"];?></option><?php endwhile; ?></select></td><td><select name="gred2" class="form-control select2"><option>Select</option><?php include 'talum.php'; $sql32 = "SELECT * FROM `spm_grade`"; $all_gred = mysqli_query($dbconfig,$sql32); while ($gred = mysqli_fetch_array($all_gred,MYSQLI_ASSOC)):; ?><option value="<?php echo $gred["spm_code"];?>"><?php echo $gred["spm_grade"];?></option><?php endwhile; ?></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
          });  
          $(document).on('click', '.btn_remove', function(){  
              var button_id = $(this).attr("id");   
              $('#row'+button_id+'').remove();  
          });  
        
    });  
    </script>

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
