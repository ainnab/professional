
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.png"/>

    

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
      <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/morris.js/morris.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link href="lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">
   
      <?php 
    include 'talum.php';
   
   session_start();
//include_once 'config.php';

if(isset($_SESSION['ic']))
{
 $ic=$_SESSION['ic'];   
  
   $recordA = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    while($dataA = mysqli_fetch_array($recordA)) { 
        $role = $dataA['role'];
   $agent=$dataA['stud_name']; 
        
      include 'main_menu.php';
       }     
   
   
   $stud_id = $_REQUEST['id'];

    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$stud_id'"); 
    while($data = mysqli_fetch_array($records)) { 







      $now_year = date('Y');
  $card_year  = substr($ic,0,2);
  if ($card_year<50){
  $age = $now_year - intval("20".$card_year);
  }else{
  $age = $now_year - intval("19".$card_year);
  }

           
   

       
     
       
       $sql1 = "SELECT * FROM `nationality`";
  $all_nation = mysqli_query($dbconfig,$sql1);
  $sql2 = "SELECT * FROM `state_my` group by state_name";
  $all_state = mysqli_query($dbconfig,$sql2);
  $sql3 = "SELECT * FROM `gender` ";
  $all_gender = mysqli_query($dbconfig,$sql3);
  $sql4 = "SELECT * FROM `marital` ";
  $all_marital = mysqli_query($dbconfig,$sql4);
  $sql5 = "SELECT * FROM `race` ";
  $all_race = mysqli_query($dbconfig,$sql5);
  $sql6 = "SELECT * FROM `religion` ";
  $all_religion = mysqli_query($dbconfig,$sql6);
  $sql7 = "SELECT * FROM `state_my` group by state_name";
  $all_state2 = mysqli_query($dbconfig,$sql7);
  $sql8 = "SELECT * FROM `oku_type`";
  $all_oku = mysqli_query($dbconfig,$sql8);
$sql25 = "SELECT * FROM `guardian_relations` ";
    $all_relation = mysqli_query($dbconfig,$sql25);
    $all_relation2 = mysqli_query($dbconfig,$sql25);
    $sql26 = "SELECT * FROM `household` ";
    $all_household = mysqli_query($dbconfig,$sql26);
    $sql27 = "SELECT * FROM `household_income` ";
    $all_income = mysqli_query($dbconfig,$sql27);
    
   $records2 = mysqli_query($dbconfig,"select * from parent where stud_ic='$stud_id'");

   $records3 = mysqli_query($dbconfig,"select * from academic where stud_ic='$stud_id'"); 
   $records4 = mysqli_query($dbconfig,"select * from document where stud_ic='$stud_id'"); 
    ?>
      </head>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
  
    
  <body class="az-body az-body-sidebar">
  

    <div class="az-content az-content-dashboard-two">
           <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">List of Student.</h2>
        </div>
        <div class="az-dashboard-header-right">
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
        <div class="row row-sm">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card card-dashboard-seven">
            
    

   

    </div><!-- card-header -->
   
     
                                 


                                  <div class="tab">
      
      <button class="tablinks" onclick="openCity(event, 'Personal')" id="defaultOpen">Personal</button>
      <button class="tablinks" onclick="openCity(event, 'Parent')">Parent</button>
      <button class="tablinks" onclick="openCity(event, 'Academic')">Academic</button>
      <button class="tablinks" onclick="openCity(event, 'Work')">Work Experience</button>
      <button class="tablinks" onclick="openCity(event, 'Upload')">Upload Document</button>
      <button class="tablinks" onclick="openCity(event, 'Declaration')">Declaration</button>

</div>

<div id="Personal" class="tabcontent">
</br>
  <h3>Personal Info</h3>
  </br>
 
    <form action="save_personal.php" method="post">
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" value="<?php echo $data['stud_name']; ?>" type="text" style="text-transform:uppercase" required>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">IC / Passport Number: <span class="tx-danger">*</span></label>
                <input id="ic" class="form-control" name="ic" type="text" value="<?php echo  $stud_id; ?>" readonly>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                <select name="gender" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($gen = mysqli_fetch_array($all_gender,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $gen["gender_code"];?>"<?php if($gen["gender_code"]==$data['gender']) echo 'selected="selected"'; ?>><?php echo $gen["gender_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-3">
                <div class="form-group">
                <label class="form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        Date:
                        </div>
                    </div>
                    <input id="dob" type="date" name="dob" class="form-control" value="<?php echo $data['dob']; ?>" placeholder="MM/DD/YYYY" required>
                    </div><!-- input-group -->
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">State Of Birth: <span class="tx-danger">*</span></label>
                <select name="pob" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($state = mysqli_fetch_array($all_state,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $state["state_code"];?>"<?php if($state["state_code"]==$data['pob']) echo 'selected="selected"'; ?>><?php echo $state["state_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">Citizenship: <span class="tx-danger">*</span></label>
                <select name="nation" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($nation = mysqli_fetch_array($all_nation,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $nation["taraf_code"];?>"<?php if($nation["taraf_code"]==$data['stud_nation']) echo 'selected="selected"'; ?>><?php echo $nation["taraf_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Marital Status: <span class="tx-danger">*</span></label>
                <select name="marital" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($mar = mysqli_fetch_array($all_marital,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $mar["status_code"];?>"<?php if($mar["status_code"]==$data['marital']) echo 'selected="selected"'; ?>><?php echo $mar["status_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
                <select name="religion" class="form-control select2">
                <option value="NULL">Select</option>
                <?php while ($rel = mysqli_fetch_array($all_religion,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $rel["religion_code"];?>"<?php if($rel["religion_code"]==$data['stud_religion']) echo 'selected="selected"'; ?>><?php echo $rel["religion_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Ethnic: <span class="tx-danger">*</span></label>
                <select name="race" class="form-control select2">
                <option value="NULL">Select</option>
                <?php while ($race = mysqli_fetch_array($all_race,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $race["ptmk_race_code"];?>"<?php if($race["ptmk_race_code"]==$data['stud_race']) echo 'selected="selected"'; ?>><?php echo $race["race_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">About Me <span class="tx-danger"></span></label>
                <input type="text" id="about" class="form-control" name="about" placeholder="About yourself" value="<?php echo $data['about']; ?>" >
                </div><!-- form group -->
            </div>
              
            </div><!-- row -->
            <div class="row row-sm">
            
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Height (cm): <span class="tx-danger">*</span></label>
                <input id="height" class="form-control" name="height" type="text" value="<?php echo $data['height']; ?>" required>
                </div><!-- form group -->
            </div><!-- col -->  
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Weight (kg): <span class="tx-danger">*</span></label>
                <input id="weight" class="form-control" name="weight" type="text" value="<?php echo $data['weight']; ?>" required>
                </div><!-- form group -->
            </div><!-- col -->  
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">No OKU: <span class="tx-danger">if applicable</span></label>
                <input id="nooku" class="form-control" name="nooku" type="text" value="<?php echo $data['nooku']; ?>" >
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">OKU Type: <span class="tx-danger">if applicable</span></label>
                <select name="okutype" class="form-control select2" required>
                <option value="NULL">Select</option>
                <?php while ($oku = mysqli_fetch_array($all_oku,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $oku["oku_code"];?>"<?php if($oku["oku_code"]==$data['okutype']) echo 'selected="selected"'; ?>><?php echo $oku["oku_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
 <input type='hidden' name='id' value=<?php echo  $stud_id?>>

          
            </div><!-- row -->
            <?php  ?>
            
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_personal"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                   
                </div>
             
            </form>
      </br>
</div>

<div id="Parent" class="tabcontent">
</br>
  <h3>Parent's Info</h3>
  </br>
  <form action="save_personal.php" method="post">     
<?php while($data2 = mysqli_fetch_array($records2)) { 
     $occupationStatus = $data2['p1_occupation'];
     $occupationStatus1 = $data2['p2_occupation'];
     ?>
<p class="mg-b-20"></p>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name of Parent/Guardian: <span class="tx-danger">*</span></label>
      <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep1" placeholder="Full Name" value="<?php echo $data2['p1_name']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp1" class="form-control" name="icp1" placeholder="IC Number" type="text" value="<?php echo $data2['p1_ic']; ?>" >
    </div><!-- form group -->
  </div><!--col-->
</div><!-- row -->
  <div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Occupation Status: <span class="tx-danger">*</span></label>
        <select name="occupationStatus" id="occupationStatus" class="form-control select" required>
           <option selected disabled="" style="font-size:14px;">Please Select</option>
             <option <?php if ($occupationStatus == "Working") {
                       echo 'selected';
             } ?> value="Working">Working</option>
             <option <?php if ($occupationStatus == "Not Working") {
                        echo 'selected';
             } ?> value="Not Working">Not Working</option>
       </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->

<p class="mg-b-20"></p>
<hr/>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name of Parent/Guardian 2: <span class="tx-danger">*</span></label>
      <input id="namep2" class="form-control" style="text-transform:uppercase" name="namep2" placeholder="Full Name" value="<?php echo $data2['p2_name']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp2" class="form-control" name="icp2" placeholder="IC Number" type="text" value="<?php echo $data2['p2_ic']; ?>" >
    </div><!-- form group -->
  </div><!--col-->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
  <div class="form-group">
      <label class="form-control-label">Occupation Status: <span class="tx-danger">*</span></label>
      <select name="occupationStatus1" id="occupationStatus1" class="form-control select" required>
           <option selected disabled="" style="font-size:14px;">Please Select</option>
             <option <?php if ($occupationStatus1 == "Working") {
                       echo 'selected';
             } ?> value="Working">Working</option>
             <option <?php if ($occupationStatus1 == "Not Working") {
                        echo 'selected';
             } ?> value="Not Working">Not Working</option>
       </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->  
<p class="mg-b-20"></p>
<hr/>
<div class="row row-sm">
<div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Income: <span class="tx-danger">*</span></label>
    <input id="income" class="form-control" name="income" placeholder="Eg: RM 5500" type="text" value=" <?php echo $data2['income']; ?>" >
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Number: <span class="tx-danger">*</span></label>
      <select name="household" class="form-control select2">
      <option value="NULL">Select</option>
      <?php while ($hhold = mysqli_fetch_array($all_household,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $hhold["household_code"];?>"<?php if($hhold["household_code"]==$data2['household']) echo 'selected="selected"'; ?>><?php echo $hhold["household_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
<?php } ?>
<input type='hidden' name='id' value=<?php echo  $stud_id?>>

            <div class="form-group m-b-0">
                    <button type="submit" name="submit_parent"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                    
                </div>
</form>


</br>
</div>

<div id="Academic" class="tabcontent">

</br>
  <h3>Academic Info</h3>
  </br>
  
   <div class="card card-dashboard-seven">
    <div class="card-body">
    <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#addEdu">
      <i class="fa fa-plus"></i> 
      Add
    </button>
    <div class="modal fade" id="addEdu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">New</h4>
                      </div>
                      <form action="save_personal.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                          <div class="form-group">
                        <label for="edu_type">Type</label>
                        <select name="edu_type" class="form-control" required="">
                          <option value="">Select Type</option>
                          <option>Academic Qualification</option>
                          <option>Award</option>
                          <option>Course</option>
                          <option>IT Skill</option>
                          <option>Language Proficiency</option>
                          <option>Recognition</option>
                          <option>Seminar</option>
                          <option>Social Activity</option>
                          <option>Sport</option>
                        </select>
                      </div>

                          <div class="form-group">
                            <label>University/Institution/Event/Skill/Provider Name</label>
                            <input type="text" class="form-control" id="edu_school" name="edu_school" required="">
                          </div>

                          <div class="row p-b-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Start Year</label>
                                <input type="date" class="form-control" name="startYear" id="startYear" placeholder="YYYY" required="">
                              </div>
                            </div>

                            <div class="col-md-6">
                          <div class="form-group">
                                <label>Gain Year</label>
                                <input type="date" class="form-control" name="gainYear" id="gainYear" placeholder="YYYY" required="">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label>Gred/Outcome/Level</label>
                            <input type="text" class="form-control" id="level" name="level" required="">
                          </div>

                          <div class="form-group">
                            <label>Majoring/Scopes</label>
                            <input type="text" class="form-control" id="major" name="major">
                          </div>

                          <div class="form-group">
                            <label for="">Attachment</label>
                            <input type="file"  name="fileA" class="form-control">
                            <span class="help-block">*The maximum file size you can upload is 20MB</span>
                          </div>

                        </div>
                        <input type='hidden' name='id' value=<?php echo  $stud_id?>>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit_new_acd" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
     <form action="save_personal.php" method="post" enctype="multipart/form-data">
   
<?php  ?>
            </form><br>
            <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>University/Institution/Event/Skill/Provider Name</th>
                                    <th>Gred/Outcome/Level</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM academic WHERE stud_ic = '$stud_id'");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql3)){
                            $id=$row['id'];
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_type']));?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_school']));?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_gred']));?></td>
                      <td>
                       

                     <a href="edit_academic.php?id=<?php echo $row['id']?>&stud_id=<?php echo $stud_id;?>" ><button name="update" class="btn btn-primary btn-md">Edit</button></a>
                      <a href="save_personal.php?id=<?php echo $row['id']?>&deleteacd=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="submit" name="deleteacd" id="btn-submit" class="btn btn-primary btn-md">Delete</button></a></td>

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>

                </table>
              </div>
            </div>


        <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_new_edu"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                    
                </div>
            </div><!-- card-body -->
            </form>
      </br>


</div>
</div>
</div>

<div id="Work" class="tabcontent">

</br>
  <h3>Work Experience</h3>
  </br>

  
   <div class="card card-dashboard-seven">
    <div class="card-body">
    <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#addWork">
      <i class="fa fa-plus"></i> 
      Add
    </button>
    <div class="modal fade" id="addWork" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">New</h4>
                      </div>
                      <form action="save_personal.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                        <div class="form-group">
                          <label>Type</label>
                          <select name="type" id="type" class="form-control" required="">
                          <option selected disabled="" style="font-size:14px;">Select Type</option>
                          <option>Employment</option>
                          <option>Other</option>
                          <option>Own Business</option>
                        </select>
                      </div>
                          <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" id="wrkPostion" name="wrkPostion" required="">
                          </div>

                          <div class="row p-b-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Year Start/Service Year</label>
                                <input type="date" class="form-control" name="edu_start" id="edu_start" placeholder="MM-YYYY" required="">
                              </div>
                            </div>

                            <div class="col-md-6">
                          <div class="form-group">
                                <label>Year End</label>
                                <input type="date" class="form-control" name="edu_end" id="edu_end" placeholder="MM-YYYY" required="">
                              </div>
                            </div>
                          </div>
                          <div class="row p-b-2">
                          <div class="col-md-6">
                          <div class="form-group">
                            <label>Category/Grade</label>
                            <input type="text" class="form-control" id="edu_gred" name="edu_gred" required="">
                          </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                            <label>Organization Size</label>
                            <input type="text" class="form-control" id="edu_major" name="edu_major">
                          </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Employer/Company Name</label>
                            <input type="text" class="form-control" id="wrkPostion1" name="wrkPostion1" required="">
                          </div>
                          <div class="form-group">
                            <label>Employer/Company Address</label>
                            <textarea name="wrkPostion2" id="wrkPostion2" cols="30" rows="3" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Job Scope/Project Value/Qualification</label>
                            <textarea name="wrkPostion3" id="wrkPostion3" cols="30" rows="3" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="wrkPostion4">Significant Contribution</label>
                            <textarea name="wrkPostion4" id="wrkPostion4" cols="30" rows="3" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Attachment</label>
                            <input type="file" class="form-control" id="fileWork" name="fileWork" required>
                            <span class="help-block">*The maximum file size you can upload is 30MB</span>
                          </div>

                        </div>
                         <input type='text' name='id' value=<?php echo  $stud_id?>>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit_new_work" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
   <form action="save_personal.php" method="post" enctype="multipart/form-data">
  
            
         
<?php  ?>
            </form><br>
            <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Position</th>
                                    <th>Employer/Company Name</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM working_experience WHERE stud_ic = '$stud_id'");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql3)){
                            $id=$row['id'];
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['type']));?></td>
                      <td><?php echo htmlentities (ucwords($row['position']));?></td>
                      <td><?php echo htmlentities (ucwords($row['employer_name']));?></td>
                      <td>
                       
<a href="edit_workexp.php?id=<?php echo $row['id']?>&stud_id=<?php echo $stud_id;?>" ><button name="update_new_work" class="btn btn-primary btn-md">Edit</button></a>
                      <a href="save_personal.php?id=<?php echo $row['id']?>&deletewrk=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="submit" name="deletewrk" id="btn-submit" class="btn btn-primary btn-md">Delete</button></a>

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>

                </table>
              </div>
            </div>

        <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_workexp"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
                   
                    
                </div>
            </div><!-- card-body -->
            </form>
      </br>

</div>
</div>
</div>

<div id="Upload" class="tabcontent">
</br>
  <h3>Upload Document</h3>
      <center>
         
              <div class="card card-dashboard-seven">
    <div class="card-body">
           <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#addDoc">
      <i class="fa fa-plus"></i> 
      Add
    </button>
    <div class="modal fade" id="addDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">New</h4>
                      </div>
                      <form action="save_personal.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                        <div class="form-group">
                          <label>Filename:</label>
                            <select name="filename" class="form-control">
                            <option value=" " selected disabled="" style="font-size:14px;">Please select</option>
                            <?php $sql11 = "SELECT * FROM document_type";
                            $result11 = mysqli_query($dbconfig, $sql11) or die("database error:". mysqli_error($dbconfig));
                            while( $row11 = mysqli_fetch_assoc($result11) ) {
                                $docname=$row11['document_name'];
                                ?>
                                <option value="<?php echo $docname; ?>" ><?php echo ucwords($docname); ?></option>
                            <?php } ?>
                            </select>
                      </div>
                          <div class="form-group">
                            <input type="file" class="form-control" id="fileDoc" name="fileDoc" required>
                            <span class="help-block">*The maximum file size you can upload is 30MB</span>
                          </div>

                        </div>
                         <input type='hidden' name='id' value=<?php echo  $stud_id?>>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit_new_doc" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
   <form action="save_personal.php" method="post">
  
            
         
<?php  ?>
            </form><br>
            <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>File Name</th>
                                    <th>Document Upload</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM document WHERE stud_ic = '$stud_id'");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql3)){
                            $id=$row['id'];
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['file_name']));?></td>
                      <td><a href="folder/workExp/<?php echo $row["fileDoc"]; ?>" target="_blank"><?php echo $row["fileDoc"]; ?></td>
                      <td>
                       

                     <a href="edit_upload.php?id=<?php echo $row['id']?>&stud_id=<?php echo $stud_id;?>" ><button name="update" class="btn btn-primary btn-md">Edit</button></a>
                      <a href="save_personal.php?id=<?php echo $row['id']?>&deletedoc=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="submit" name="deletedoc" id="btn-submit" class="btn btn-primary btn-md">Delete</button></a></td>

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>

                </table>
              </div>
            </div>
        <div class="col-lg-12 text-right">
            <div class="form-group m-b-0">
                    <button type="submit" name="submit_workexp"  class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="far fa-save"></i>&nbsp;&nbsp;Simpan
                    </button>
            
            </form>
            </center>
                        <br>
           
</div>
      </div>

<div id="Declaration" class="tabcontent">
</br>
  <div class="card card-dashboard-seven">
          <div class="card-body">
      
          <p><strong>Declaration</strong></p>
                <p>Please ensure that information provided is <strong>true and correct</strong>. No changes is allowed once the application is submitted.</p>
                <p>The university reserves the right to withdraw or amend any offer that has been made, or the student's enrolment will be terminated by the university according to the circumstances should the information provided inaccurate, false or misleading.</p>
               
            
                <hr/>
               

                        <form action="save_personal.php" method="post">
                        <div class="col-md mg-t-10 mg-md-t-0">
                        <label class="ckbox"><input type="checkbox" name="app" value="Submitted" required><span>I hereby certify that all information given are true.  </span></label></br></div>
                        <div class="col-md mg-t-10 mg-md-t-0">
                           <input type='hidden' name='id' value=<?php echo  $stud_id?>>
                        <button class="btn btn-az-primary btn-block" name="submit_final">Submit</button>
                        </div>
                        </form>

           

         
         </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col -->
  </div>
</div> <?php } ?>
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
  <?php 
}
else {
  echo '<script>';  
  echo 'alert("Session expired. Please login again.")';
  //echo 'window.href("index.php")';
  echo 'window.location = "../apela.php"';
  echo '</script>';
}
?>
</html>
