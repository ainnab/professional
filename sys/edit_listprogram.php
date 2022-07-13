<?php 
    include 'talum.php';
    include 'header_admin.php';
   
    ?>
<div class="az-content-header d-block d-md-flex">
  <div>
    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Program</h2>
  </div>
  <div class="az-dashboard-header-right">
  </div><!-- az-dashboard-header-right -->
</div><!-- az-content-header -->
<div class="az-content-body">
<div class="row row-sm">
<div class="col-md-12 col-lg-12 col-xl-10">
  <div class="card card-dashboard-seven">
    <div class="card-body">
    
								      <form action="save.php" method="POST" enctype="multipart/form-data">
                         <?php
                      if (isset($_GET['id'])) {

                          $id = $_GET['id'];
                      }
                      //$id = isset($_GET['id']) ? $_GET['id'] : '';
                        $sql4=mysqli_query($dbconfig,"select * from program_diploma where pg_id='$id'");
                        while($row=mysqli_fetch_array($sql4))
                        {

                          $date = $row['keyin_date'];
                          $newDate = date("Y-m-d", strtotime($date));
                          $certificate = $row['certificate'];
                        ?>
                        <input type="text" name="id" value="<?php echo $row['pg_id']; ?>" hidden>
									      <div class="modal-body">

                        <input type="text" name="mode" value="<?php echo $row['mode']; ?>" hidden>
									      	<div class="form-group">
									      		<label>Program Name</label>
									      		<input type="text" class="form-control" id="progName" name="progName" value="<?php echo $row['pg_name']; ?>">
									      	</div>
                          <div class="form-group">
                            <label>Program Code</label>
                            <input type="text" class="form-control" id="progCode" name="progCode" value="<?php echo $row['pg_code']; ?>">
                          </div>
                          <div class="form-group">
                            <label>Duration (Year & Months)</label>
                            <input type="text" class="form-control" id="duration" name="duration" value="<?php echo $row['duration']; ?>">
                          </div>
                          <div class="form-group">
                            <label>Registration Date </label>
                            <input type="date" class="form-control" name="regDate" id="regDate" value="<?php echo $row['regDate'];?>">
                          </div>
                          <div class="form-group">
                            <label>Learning Centre</label>
                            <input type="text" class="form-control" id="learningCentre" name="learningCentre" value="<?php echo $row['learningCentre']; ?>">
                          </div>
                          <div class="form-group">
                            <label>Specialization</label>
                            <input type="text" class="form-control" id="Specialization" name="Specialization" value="<?php echo $row['Specialization']; ?>">
                          </div>
                          <div class="form-group">
                            <label>Institution Name</label>
                            <input type="text" class="form-control" id="instName" name="instName" value="<?php echo $row['inst_name']; ?>">
                          </div>
                          <div class="form-group">
                            <label>Date Created </label>
                            <input type="date" class="form-control" name="date_start" id="date_start" value="<?php echo $newDate?>">
                            
                          </div>
                          <div class="form-group">
									      		<label>Admission Name</label>
									      		<input type="text" class="form-control" id="adsName" name="adsName" value="<?php echo $row['adsName']; ?>">
									      	</div>

                          <div class="form-group">
                            <label>List Of Module (Common Module)</label>
                            <input type="text" class="form-control" id="commonModule" name="commonModule" placeholder="Module1,Module2" value="<?php echo $row['common_module']; ?>">
                           
                          </div>
                          <div class="form-group">
                            <label>List Of Module (Core Module)</label>
                            <input type="text" class="form-control" id="coreModule" name="coreModule" placeholder="Module1,Module2" value="<?php echo $row['core_module']; ?>">
                           
                          </div>
                          <div class="form-group">
                          <label>Certificate Category</label>
                          <select name="certificate" id="certificate" class="form-control" required="" readonly>
                          <option selected disabled="" style="font-size:14px;">Select Type</option>
                          <option <?php if ($certificate == "PROFESSIONAL DIPLOMA") {
                                              echo 'selected';
                                            } ?> value="PROFESSIONAL DIPLOMA">PROFESSIONAL DIPLOMA</option>
                                            <option <?php if ($certificate == "EXECUTIVE BACHELOR") {
                                              echo 'selected';
                                            } ?> value="EXECUTIVE BACHELOR">EXECUTIVE BACHELOR</option>
                                            <option <?php if ($certificate == "EXECUTIVE MASTER") {
                                              echo 'selected';
                                            } ?> value="EXECUTIVE MASTER">EXECUTIVE MASTER</option>
                                            <option <?php if ($certificate == "SHORT COURSES") {
                                              echo 'selected';
                                            } ?> value="SHORT COURSES">SHORT COURSES</option>
                                          </select>
                      </div>

<div class="form-group">
                            <label>Yuran Pendaftaran</label>
                            <input type="text" class="form-control" id="feeDaftar" name="feeDaftar" placeholder="605.00" value="<?php echo $row['feeDaftar']; ?>">
                           
                          </div>
                           <div class="form-group">
                            <label>Yuran Pengajian</label>
                            <input type="text" class="form-control" id="feeStudy" name="feeStudy" placeholder="605.00" value="<?php echo $row['feeStudy']; ?>">
                           
                          </div>
                        </div>
									      </div>
                        

									      <div class="modal-footer">
                          <?php 
                          $mode = $row['mode'];
                          if($mode == 'DIP'){ ?>
                            <a href="tab_listprogramDip.php"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                          <?php }elseif($mode == 'BACHELOR'){?>
									        <a href="tab_listprogramBch.php"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                          <?php }elseif($mode == 'SHORT COURSES'){?>
                          <a href="tab_listprogramSC.php"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button>  
                          <?php }else{?>
                            <a href="tab_listprogramMas.php"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                        <?php  } ?>
									        <button type="submit" name="update_program" class="btn btn-primary">Update</button>
									      </div>
								      </form>
								    </div>
								  </div>
								</div>
   <form action="save.php" method="post">
      <?php } ?>
