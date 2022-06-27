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
          $role = $data2['role'];
          $agent=$data2['stud_name']; 
          $app_status = $data2['app_status'];
        include 'main_menu.php';
      
       }     
    ?>
<?php 
$records3 = mysqli_query($dbconfig,"select * from academic where stud_ic='$ic'"); 
?>


<div class="az-content-header d-block d-md-flex">
  <div>
    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Academic Background</h2>
    <p class="mg-b-0">Press button below to add academic background.</p>
  </div>
  <div class="az-dashboard-header-right">
  </div><!-- az-dashboard-header-right -->
</div><!-- az-content-header -->
<div class="az-content-body">
<div class="row row-sm">
<div class="col-md-12 col-lg-12 col-xl-10">
  <div class="card card-dashboard-seven">
    <div class="card-body">
		<form action="save_personal.php" method="POST" enctype="multipart/form-data">
			<?php
                      if (isset($_GET['id'])) {

                          $id = $_GET['id'];
                      }
                      //$id = isset($_GET['id']) ? $_GET['id'] : '';
                        $sql4=mysqli_query($dbconfig,"select * from academic where id='$id'");
                        while($row=mysqli_fetch_array($sql4))
                        {
                          $edu_type = $row['edu_type'];
                        ?>
                        <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
			<div class="modal-body">
				<div class="form-group">
					<label for="edu_type">Type</label>
					<select name="edu_type" class="form-control" required="">
						<option value="">Select Type</option>
						 <option <?php if ($edu_type == "Academic Qualification") {
                                              echo 'selected';
                                            } ?> value="Academic Qualification">Academic Qualification</option>
                                            <option <?php if ($edu_type == "Award") {
                                              echo 'selected';
                                            } ?> value="Award">Award</option>
                                            <option <?php if ($edu_type == "Course") {
                                              echo 'selected';
                                            } ?> value="Course">Course</option>
                                            <option <?php if ($edu_type == "IT Skill") {
                                              echo 'selected';
                                            } ?> value="IT Skill">IT Skill</option>
                                            <option <?php if ($edu_type == "Language Proficiency") {
                                              echo 'selected';
                                            } ?> value="Language Proficiency">Language Proficiency</option>
                                            <option <?php if ($edu_type == "Recognition") {
                                              echo 'selected';
                                            } ?> value="Recognition">Recognition</option>
                                            <option <?php if ($edu_type == "Seminar") {
                                              echo 'selected';
                                            } ?> value="Seminar">Seminar</option>
                                               <option <?php if ($edu_type == "Social Activity") {
                                              echo 'selected';
                                            } ?> value="Social Activity">Social Activity</option>
                                            <option <?php if ($edu_type == "Sport") {
                                              echo 'selected';
                                            } ?> value="Sport">Sport</option>           
								</select>
				</div>
				<div class="form-group">
					<label>University/Institution/Event/Skill/Provider Name</label>
					<input type="text" class="form-control" id="edu_school" name="edu_school" value="<?php echo $row['edu_school']; ?>">
				</div>
				<div class="row p-b-2">
					<div class="col-md-6">
					<div class="form-group">
						<label>Start Year</label>
						<input type="text" class="form-control" name="startYear" id="startYear" value="<?php echo $row['edu_start']; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Gain Year</label>
						<input type="text" class="form-control" name="gainYear" id="gainYear" value="<?php echo $row['edu_end']; ?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Gred/Outcome/Level</label>
					<input type="text" class="form-control" id="level" name="level" value="<?php echo $row['edu_gred']; ?>">
				</div>
				<div class="form-group">
					<label>Majoring/Scopes</label>
					<input type="text" class="form-control" id="major" name="major" value="<?php echo $row['edu_major']; ?>">
				</div>
				<div class="form-group">
					<label for="edu_file">Attachment</label>
					<input type="file" id="fileA" name="fileA" class="form-control">
					<a href="folder/workExp/<?php echo $row['fileA']; ?>" target="_blank"><?php echo $row['fileA']; ?></a>
					<span class="help-block">*The maximum file size you can upload is 20MB</span>
				</div>
				</div>
				<div class="modal-footer">
					<a href="tab_academic.php"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" name="update_new_acd" class="btn btn-primary">Update</button>
				</div>
			</form>
			</div>
				 </div>
					</div>
     <form action="save_personal.php" method="post">
   
<?php } ?>