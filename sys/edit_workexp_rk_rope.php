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
       	$stud_id = $_REQUEST['stud_id'];
        $role = $data2['role'];
   		$agent=$data2['stud_name']; 
        include 'main_menu.php';
      
       }     
    ?>
<?php 
$records3 = mysqli_query($dbconfig,"select * from working_experience where stud_ic='$ic'"); 
?>


<div class="az-content-header d-block d-md-flex">
  <div>
    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Working Experience</h2>
    <p class="mg-b-0">Press button below to add experience.</p>
  </div>
  <div class="az-dashboard-header-right">
  </div><!-- az-dashboard-header-right -->
</div><!-- az-content-header -->
<div class="az-content-body">
<div class="row row-sm">
<div class="col-md-12 col-lg-12 col-xl-10">
  <div class="card card-dashboard-seven">
    <div class="card-body">
  
								
			<form action="save_rk_rope.php" method="POST" enctype="multipart/form-data">
				 <?php
                      if (isset($_GET['id'])) {

                          $id = $_GET['id'];
                      }
                      //$id = isset($_GET['id']) ? $_GET['id'] : '';
                        $sql4=mysqli_query($dbconfig,"select * from working_experience where id='$id'");
                        while($row=mysqli_fetch_array($sql4))
                        {
                          $type = $row['type'];
                        ?>
                        <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
                        <input type="text" name="stud_ic" value="<?php echo $row['stud_ic']; ?>" hidden>
				<div class="modal-body">
					<div class="form-group">
						<label>Type</label>
						 <select name="type" id="type" class="form-control" required="">
						<option selected disabled="" style="font-size:14px;">Select Type</option>
						<option <?php if ($type == "Employment") {
                                              echo 'selected';
                                            } ?> value="Employment">Employment</option>
                                            <option <?php if ($type == "Other") {
                                              echo 'selected';
                                            } ?> value="Other">Other</option>
                                            <option <?php if ($type == "Own Business") {
                                              echo 'selected';
                                            } ?> value=">Own Business">Own Business</option>
                                          </select>
					</div>
					<div class="form-group">
					  <label>Position</label>
						<input type="text" class="form-control" id="wrkPostion" name="wrkPostion" value="<?php echo $row['position']; ?>">
					</div>
					<div class="row p-b-2">
						<div class="col-md-6">
						<div class="form-group">
							<label>Year Start/Service Year</label>
								<input type="text" class="form-control" name="edu_start" id="edu_start" value="<?php echo $row['year_start']; ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<label>Year End</label>
							<input type="text" class="form-control" name="edu_end" id="edu_end" value="<?php echo $row['year_end']; ?>">
						</div>
					</div>
					</div>
                    <div class="row p-b-2">
                        <div class="col-md-6">
						<div class="form-group">
							<label>Category/Grade</label>
							<input type="text" class="form-control" id="edu_gred" name="edu_gred" value="<?php echo $row['category']; ?>">
						</div>
                    </div>
                    <div class="col-md-6">
						<div class="form-group">
							<label>Organization Size</label>
							<input type="text" class="form-control" id="edu_major" name="edu_major" value="<?php echo $row['organization']; ?>">
						</div>
                    </div>
                    </div>
                    <div class="form-group">
						<label>Employer/Company Name</label>
						<input type="text" class="form-control" id="wrkPostion1" name="wrkPostion1" value="<?php echo $row['employer_name']; ?>">
					</div>
                    <div class="form-group">
						<label>Employer/Company Address</label>
						<textarea name="wrkPostion2" id="wrkPostion2" cols="30" rows="3" class="form-control"><?php echo $row['employer_address']; ?></textarea>
					</div>
                    <div class="form-group">
						<label>Job Scope/Project Value/Qualification</label>
						<textarea name="wrkPostion3" id="wrkPostion3" cols="30" rows="3" class="form-control"><?php echo $row['job_scope']; ?></textarea>
									      	</div>
                    <div class="form-group">
						<label for="wrkPostion4">Significant Contribution</label>
						<textarea name="wrkPostion4" id="wrkPostion4" cols="30" rows="3" class="form-control"><?php echo $row['significant']; ?></textarea>
					</div>
					<div class="form-group">
						<label>Attachment</label>
						<input type="file" class="form-control" id="fileWork" name="fileWork">
						<a href="folder/permohonan/<?php echo $row['fileWork']; ?>" target="_blank"><?php echo $row['fileWork']; ?></a>
						<span class="help-block">*The maximum file size you can upload is 30MB</span>
					</div>
					</div>
					<div class="modal-footer">
					<a href="tab_test_rk.php?id=<?php echo $row ['stud_ic']?>"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
						<button type="submit" name="update_new_work" class="btn btn-primary">Update</button>
					</div>
			 </form>
				
  
   	<?php } ?>
  