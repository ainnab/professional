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
$records3 = mysqli_query($dbconfig,"select * from qualification_info where stud_ic='$ic'"); 
$sql31 = "SELECT * FROM `spm_subject` WHERE subject_code_no NOT IN (1103,1119,1225,1249,1449,1225)";
$all_sub = mysqli_query($dbconfig,$sql31);
$sql32 = "SELECT * FROM `spm_grade`";
$sql1 = "SELECT * FROM `school_type`";
$all_school = mysqli_query($dbconfig,$sql1);
$sql2 = "SELECT * FROM `aliran`";
$all_aliran = mysqli_query($dbconfig,$sql2);
?>


<div class="az-content-header d-block d-md-flex">
  <div>
    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Academic Information</h2>
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
    <form action="save_academic.php" method="post">
    <?php while($data3 = mysqli_fetch_array($records3)) { ?>  
    <div class="row row-sm">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label class="form-control-label">SPM Number: <span class="tx-danger">*</span></label>
        <input id="" class="form-control" name="spmnumber" placeholder="Enter SPM Number" value="<?php echo $data3['spm_number']; ?>" type="text" style="text-transform:uppercase" required>
        </div><!-- form group -->
    </div><!-- col -->
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label class="form-control-label">Year of SPM: <span class="tx-danger">*</span></label>
        <input id="" class="form-control" name="spmyear" placeholder="Enter Year of SPM" value="<?php echo $data3['spm_year']; ?>" type="text" style="text-transform:uppercase" required>
        </div><!-- form group -->
    </div><!-- col -->
    </div><!-- row -->
    <div class="row row-sm">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label class="form-control-label">Aliran: <span class="tx-danger">*</span></label>
        <select name="aliran" class="form-control select2" required>
          <option value=" ">Select</option>
          <?php while ($aliran = mysqli_fetch_array($all_aliran,MYSQLI_ASSOC)):; ?>
          <option value="<?php echo $aliran["ALIRAN_CODE"];?>"<?php if($aliran["ALIRAN_CODE"]==$data3['spm_aliran']) echo 'selected="selected"'; ?>><?php echo $aliran["ALIRAN_NAME"];?></option>
          <?php endwhile; ?>
          </select>
        </div><!-- form group -->
    </div><!-- col -->
    </div><!-- row -->
    <div class="row row-sm">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label class="form-control-label">Type of School: <span class="tx-danger">*</span></label>
        <select name="schooltype" class="form-control select2" required>
          <option value=" ">Select</option>
          <?php while ($school = mysqli_fetch_array($all_school,MYSQLI_ASSOC)):; ?>
          <option value="<?php echo $school["SCHOOL_TYPE_CODE"];?>"<?php if($school["SCHOOL_TYPE_CODE"]==$data3['school_type']) echo 'selected="selected"'; ?>><?php echo $school["SCHOOL_TYPE_NAME"];?></option>
          <?php endwhile; ?>
          </select>
        </div><!-- form group -->
    </div><!-- col -->
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
        <label class="form-control-label">School Name: <span class="tx-danger">*</span></label>
        <input id="" class="form-control" name="schoolname" placeholder="Enter School Name" value="<?php echo $data3['school_name']; ?>" type="text" style="text-transform:uppercase" required>
        </div><!-- form group -->
    </div><!-- col -->
    </div><!-- row -->
    <p class="mg-b-30"></p>
      <p class="mg-b-20">Core Subjects</p>
<p class="mg-b-20"></p>
<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-30p">Subjects</th>
                  <th class="wd-40p">Gred</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 <td>1</td>
                  <td width="200">BAHASA MELAYU</td>
                  <td>
                        
                  <select name="bb" class="form-control select2">
                        <option value=" ">Select</option>
                        <?php $all_grade9 = mysqli_query($dbconfig,$sql32); while ($gred9 = mysqli_fetch_array($all_grade9,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred9["spm_code"];?>"<?php if($gred9["spm_code"]==$data3['gredspm1']) echo 'selected="selected"'; ?>><?php echo $gred9["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>2</td>
                  <td>BAHASA INGGERIS</td>
                  <td>  
                        <select name="bi" class="form-control select2">
                        <option value=" ">Select</option>
                        <?php $all_grade2 = mysqli_query($dbconfig,$sql32); while ($gred2 = mysqli_fetch_array($all_grade2,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred2["spm_code"];?>"<?php if($gred2["spm_code"]==$data3['gredspm2']) echo 'selected="selected"'; ?>><?php echo $gred2["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>3</td>
                  <td>MATEMATIK</td>
                  <td>
                        <select name="mt" class="form-control select2">
                        <option value=" ">Select</option>
                        <?php $all_grade3 = mysqli_query($dbconfig,$sql32); while ($gred3 = mysqli_fetch_array($all_grade3,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred3["spm_code"];?>"<?php if($gred3["spm_code"]==$data3['gredspm3']) echo 'selected="selected"'; ?>><?php echo $gred3["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>4</td>
                  <td>SEJARAH</td>
                  <td>
                        <select name="sj" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade3 = mysqli_query($dbconfig,$sql32); while ($gred3 = mysqli_fetch_array($all_grade3,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred3["spm_code"];?>"<?php if($gred3["spm_code"]==$data3['gredspm4']) echo 'selected="selected"'; ?>><?php echo $gred3["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>5</td>
                  <td>PENDIDIKAN ISLAM</td>
                  <td><select name="sc" class="form-control select2">
                        <option value=" ">Select</option>
                        <?php $all_grade4 = mysqli_query($dbconfig,$sql32); while ($gred4 = mysqli_fetch_array($all_grade4,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred4["spm_code"];?>"<?php if($gred4["spm_code"]==$data3['gredspm5']) echo 'selected="selected"'; ?>><?php echo $gred4["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>5</td>
                  <td>PENDIDIKAN MORAL<span class="tx-danger">*if related</span></td>
                  <td><select name="sc2" class="form-control select2">
                        <option value=" ">Select</option>
                        <?php $all_grade5 = mysqli_query($dbconfig,$sql32); while ($gred5 = mysqli_fetch_array($all_grade5,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred5["spm_code"];?>"<?php if($gred5["spm_code"]==$data3['gredspm6']) echo 'selected="selected"'; ?>><?php echo $gred5["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
          <p class="mg-b-30"></p>
          <p class="mg-b-20">Elective Subjects</p>
          
              <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-25p">SUBJECTS</th>
                  <th class="wd-20p">GRADE</th>
                  <th class="wd-15p">ACTION</th>
                </tr>
              </thead>
              <tbody>
              <?php $result = mysqli_query($dbconfig,"SELECT id, spm_subject.subject_name, spm_grade.spm_grade FROM additional_qualification 
              INNER JOIN spm_subject ON additional_qualification.subject_code=spm_subject.subject_code_no
              INNER JOIN spm_grade ON additional_qualification.grade_code=spm_grade.spm_code where stud_ic='$ic'"); ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
              <?php $i=0; $j=1; while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                            <td><?php echo $j++;  ?></td>
                            <td><?php echo $row["subject_name"]; ?></td>
                            <td><?php echo $row["spm_grade"]; ?></td>
                            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>
            <?php $i++;  } ?>
              </tbody>
            
            <?php } else{  echo "No result found"; } ?>
              </div>
              </table>
              </div>
            <table class="table table-bordered" id="dynamic_field">  
    <tr><td class="wd-5p"></td>
        <td class="wd-25p">
            <select name="sub[]" class="form-control select2">
                <option value=" ">Select</option>
                <?php while ($sub = mysqli_fetch_array($all_sub,MYSQLI_ASSOC)):; ?><option value="<?php echo $sub["subject_code_no"];?>"><?php echo $sub["subject_name"];?></option><?php endwhile; ?>
            </select>
        </td>  
        <td class="wd-20p">
            <select name="gred[]" class="form-control select2">
                <option value=" ">Select</option>
                <?php $all_grade5 = mysqli_query($dbconfig,$sql32); while ($gred5 = mysqli_fetch_array($all_grade5,MYSQLI_ASSOC)):; ?><option value="<?php echo $gred5["spm_code"];?>"><?php echo $gred5["spm_grade"];?></option><?php endwhile; ?>
            </select>
        </td>
        <td class="wd-15p"><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>  
    </tr>  
</table>
<?php } ?>

<input type="submit" name="submit" value="Update" class="btn btn-az-primary btn-block">
            </form>
       
            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
    <div class="col-md-2 col-xl-2 mg-t-2 mg-md-t-2">
            <div class="card card-dashboard-seven">
            <div class="card-body">
            <?php 
              $sql_1 = "SELECT * FROM qualification_info WHERE stud_ic = '$ic'";
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
    $(document).ready(function(){  
          var i=1;  
          $('#add').click(function(){  
              i++;  
              $('#dynamic_field').append('<tr id="row'+i+'"><td class="wd-5p"></td><td><select name="sub[]" class="form-control select2"><option>Select</option><?php include 'talum.php'; $sql31 = "SELECT * FROM `spm_subject`"; $all_sub = mysqli_query($dbconfig,$sql31); while ($sub = mysqli_fetch_array($all_sub,MYSQLI_ASSOC)):; ?><option value="<?php echo $sub["subject_code_no"];?>"><?php echo $sub["subject_name"];?></option><?php endwhile; ?></select></td><td><select name="gred[]]" class="form-control select2"><option>Select</option><?php include 'talum.php'; $sql32 = "SELECT * FROM `spm_grade`"; $all_gred = mysqli_query($dbconfig,$sql32); while ($gred = mysqli_fetch_array($all_gred,MYSQLI_ASSOC)):; ?><option value="<?php echo $gred["spm_code"];?>"><?php echo $gred["spm_grade"];?></option><?php endwhile; ?></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
          });  
          $(document).on('click', '.btn_remove', function(){  
              var button_id = $(this).attr("id");   
              $('#row'+button_id+'').remove();  
          });  
        
    });  
    </script>

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
