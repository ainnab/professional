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
                        $sql4=mysqli_query($dbconfig,"select * from program where id='$id'");
                        while($row=mysqli_fetch_array($sql4))
                        {
                          $certificate = $row['certificate'];
                        ?>
                        <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
									      <div class="modal-body">

									      	<div class="form-group">
									      		<label>Program Name</label>
									      		<input type="text" class="form-control" id="progName" name="progName" value="<?php echo $row['programName']; ?>">
									      	</div>
                          <div class="form-group">
                            <label>Date Created </label>
                            <input type="date" class="form-control" name="date_start" id="date_start" placeholder="MM-YYYY" value="<?php echo $row['dateCreated']; ?>">
                          </div>
                          <div class="form-group">
									      		<label>Admission Name</label>
									      		<input type="text" class="form-control" id="adsName" name="adsName" value="<?php echo $row['adsName']; ?>">
									      	</div>
                          <div class="form-group">
									      		<label>Mode of Admission</label>
                            <input type="text" class="form-control" id="modeAds" name="modeAds" value="<?php echo $row['mode']; ?>">
									      	</div>
                          <div class="form-group">
                          <label>Certificate Category</label>
                          <select name="certificate" id="certificate" class="form-control" required="">
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
                                          </select>
                      </div>

									      </div>
									      <div class="modal-footer">
									        <a href="tab_listprogram.php"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
									        <button type="submit" name="update_program" class="btn btn-primary">Update</button>
									      </div>
								      </form>
								    </div>
								  </div>
								</div>
   <form action="save.php" method="post">
      <?php } ?>
