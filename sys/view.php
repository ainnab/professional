<?php 
    include 'talum.php';
   
    ?>

<?php
    include 'header_admin.php';

   $ic=$_GET['id'];       
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    while($data2 = mysqli_fetch_array($records)) { 
        $app_status=$data2['app_status']; 
      // if($data2['app_option'] == '1'){
        
      // }
      // else{
      //   include 'header_degree.php';
      // }
       }     
  
  $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
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
  ?>

<?php while($data = mysqli_fetch_array($records)) { 
 
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

<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/css" src='print.css' media="print" />
    </script>
    <style>
        @media print {

            .no-print {
                display: none !important;
            }
        }

    </style>
</head>

<body>
    <div class="az-content-body">
      <div class="row row-sm">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card card-dashboard-seven">
          <div class="card-body">
            <div class="row row-sm mg-b-15 mg-sm-b-20">
            <div class="col-md-12 col-lg-12">

            <?php if($app_status=='Submitted'){?>
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Thank you!</strong> You have submitted your application. Now, you can choose program to enroll
          </div><!-- alert -->
          <?php }?>
        
        <p class="mg-b-20"></p>
            <?php } ?>
            <?php 
  $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
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
  ?>

<?php while($data = mysqli_fetch_array($records)) { 
 
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
    
<head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/css" src='print.css' media="print" /></script>
<style>
 @media print {

 .no-print{
    display : none !important;
          }
              }
</style>
</head>
<body>
      <div class="az-content-header d-block d-md-flex">
      </div><!-- az-content-header -->
      <div class="col-md-12 col-lg-12 col-xl-10">
        <div class="card card-dashboard-seven">
          <div class="card-body print">
            <p class="mg-b-20"></p>
            <div class="row row-sm">
             <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Personal Information</h2>
          </div>
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" value="<?php echo $data['stud_name']; ?>" type="text" style="text-transform:uppercase" readonly>
                </div><!-- form group -->
            </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">IC / Passport Number: <span class="tx-danger">*</span></label>
                <input id="ic" class="form-control" name="ic" type="text" value="<?php echo $_SESSION['ic']; ?>" readonly>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                <select name="gender" class="form-control select2" readonly>
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
                    <input id="dob" type="date" name="dob" class="form-control" value="<?php echo $data['dob']; ?>" placeholder="MM/DD/YYYY" readonly>
                    </div><!-- input-group -->
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">State Of Birth: <span class="tx-danger">*</span></label>
                <select name="pob" class="form-control select2" readonly>
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
                <select name="nation" class="form-control select2" readonly>
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
                <select name="marital" class="form-control select2" readonly>
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
                <select name="religion" class="form-control select" readonly>
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
                <select name="race" class="form-control select" readonly>
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
                <input type="text" id="about" class="form-control" name="about" placeholder="About yourself" value="<?php echo $data['about']; ?>" readonly>
                </div><!-- form group -->
            </div>
              
            </div><!-- row -->
            <div class="row row-sm">
            
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Height (cm): <span class="tx-danger">*</span></label>
                <input id="height" class="form-control" name="height" type="text" value="<?php echo $data['height']; ?>" readonly>
                </div><!-- form group -->
            </div><!-- col -->  
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Weight (kg): <span class="tx-danger">*</span></label>
                <input id="weight" class="form-control" name="weight" type="text" value="<?php echo $data['weight']; ?>" readonly>
                </div><!-- form group -->
            </div><!-- col -->  
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">No OKU: <span class="tx-danger">if applicable</span></label>
                <input id="nooku" class="form-control" name="nooku" type="text" value="<?php echo $data['nooku']; ?>" readonly>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">OKU Type: <span class="tx-danger">if applicable</span></label>
                <select name="okutype" class="form-control select2" readonly>
                <option value="NULL">Select</option>
                <?php while ($oku = mysqli_fetch_array($all_oku,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $oku["oku_code"];?>"<?php if($oku["oku_code"]==$data['okutype']) echo 'selected="selected"'; ?>><?php echo $oku["oku_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            </div><!-- row -->
            <?php } ?>
      </br>   
<h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Parent/Guardian Information</h2>
          
        
<?php while($data2 = mysqli_fetch_array($records2)) { 
   $occupationStatus = $data2['p1_occupation'];
     $occupationStatus1 = $data2['p2_occupation'];?>
<p class="mg-b-20"></p>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name of Parent/Guardian: <span class="tx-danger">*</span></label>
      <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep1" placeholder="Full Name" value="<?php echo $data2['p1_name']; ?>" type="text" readonly>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp1" class="form-control" name="icp1" placeholder="IC Number" type="text" value="<?php echo $data2['p1_ic']; ?>"readonly>
    </div><!-- form group -->
  </div><!--col-->
</div><!-- row -->
  <div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Occupation Status: <span class="tx-danger">*</span></label>
        <select name="occupationStatus" id="occupationStatus" class="form-control select" readonly>
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
      <input id="namep2" class="form-control" style="text-transform:uppercase" name="namep2" placeholder="Full Name" value="<?php echo $data2['p2_name']; ?>" type="text" readonly>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC/Passport Number: <span class="tx-danger">*</span></label>
      <input id="icp2" class="form-control" name="icp2" placeholder="IC Number" type="text" value="<?php echo $data2['p2_ic']; ?>" readonly>
    </div><!-- form group -->
  </div><!--col-->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
  <div class="form-group">
      <label class="form-control-label">Occupation Status: <span class="tx-danger">*</span></label>
      <select name="occupationStatus1" id="occupationStatus1" class="form-control select" readonly>
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
    <input id="income" class="form-control" name="income" placeholder="Eg: RM 5500" type="text" value=" <?php echo $data2['income']; ?>" readonly>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Number: <span class="tx-danger">*</span></label>
      <select name="household" class="form-control select2" readonly>
      <option value="NULL">Select</option>
      <?php while ($hhold = mysqli_fetch_array($all_household,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $hhold["household_code"];?>"<?php if($hhold["household_code"]==$data2['household']) echo 'selected="selected"'; ?>><?php echo $hhold["household_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- card -->
    
<?php 
$records3 = mysqli_query($dbconfig,"select * from contact where stud_ic='$ic'"); 
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
  ?>

</br>   
<h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Contact Information</h2>
</br>
    <?php while($data = mysqli_fetch_array($records3)) { ?>  
        <div class="row row-sm">
     <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input id="email" class="form-control" name="email" type="text" value="<?php echo $data['email']; ?>" readonly>
                </div><!-- form group -->
            </div><!-- col -->
            
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                <input id="phone" class="form-control" name="phone" type="text" value="<?php echo $data['phone']; ?>" readonly>
                </div><!-- form group -->
            </div><!-- col -->
            <div class="col-md-5 col-lg-4">
            <div class="form-group">
                <label class="form-control-label">Home Tel Number: <span class="tx-danger">*</span></label>
                <input id="home" class="form-control" name="home" value="<?php echo $data['home']; ?>" type="text" readonly>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Mailing Address<span class="tx-danger"></span></label>
                <textarea id="mailaddress" class="form-control" name="mailaddress" placeholder="Mailing Address" type="text" readonly><?php echo $data['mailaddress']; ?></textarea>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
                <div class="form-group">
                <label class="form-control-label">Postcode: <span class="tx-danger">*</span></label>
                <input id="" class="form-control" name="postcode" value="<?php echo $data['postcode']; ?>" type="text"  onKeyPress="if(this.value.length==5) return false;" readonly>
                </div><!-- form group -->
            </div><!--col-->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">City: <span class="tx-danger">*</span></label>
                <input id="city" class="form-control" style="text-transform:uppercase" name="city" type="text" value="<?php echo $data['city']; ?>" readonly>
                </div><!-- form group -->
            </div><!-- col -->        
            </div><!-- row -->
            <div class="row row-sm">
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group">
                <label class="form-control-label">State: <span class="tx-danger">*</span></label>
                <select name="state" class="form-control select2" readonly>
                <option value="NULL">Select</option>
                <?php while ($state2 = mysqli_fetch_array($all_state2,MYSQLI_ASSOC)):; ?>
                <option value="<?php echo $state2["state_code"];?>"<?php if($state2["state_code"]==$data['state']) echo 'selected="selected"'; ?>><?php echo $state2["state_name"];?></option>
                <?php endwhile; ?>
                </select>
                </div><!-- form group -->
            </div><!-- col-4 -->
            <div class="col-md-5 col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                <input id="country" class="form-control" style="text-transform:uppercase" name="country" type="text" value="<?php echo $data['country']; ?>" readonly>
                </div><!-- form group -->
            </div><!-- col -->  
            </div><!-- row -->

            <?php } ?>

          </br>   
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Working Experience</h2>
          </br>

            <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Position</th>
                                    <th>Employer/Company Name</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM working_experience WHERE stud_ic = '$ic'");
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

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>
                </table>
              </div>
            </div>
    <!--   <?php } ?> -->
  
      <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Academic Background</h2>
          </br>

           <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>University/Institution/Event/Skill/Provider Name</th>
                                    <th>Gred/Outcome/Level</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php
                            $sql3= "SELECT * FROM academic WHERE stud_ic = '$ic'";

                            $result = mysqli_query($dbconfig, $sql3);
                            $cnt=1;

                            if(mysqli_num_rows($result) > 0)

                              {
                                while($row = mysqli_fetch_array($result)){
                                  $id=$row['id'];
                                {
                        ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_type']));?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_school']));?></td>
                      <td><?php echo htmlentities (ucwords($row['edu_gred']));?></td>

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                
                   ?>

                </table>
             </div>
            </div>
      <?php } ?>
      <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Video CV/Attachment</h2>
          </br>

           <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>File Name</th>
                                    <th>Document Upload</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sqll4=mysqli_query($dbconfig,"SELECT * FROM document WHERE stud_ic = '$ic'");
                          $cnt=1;
                          while($row4=mysqli_fetch_array($sqll4)){
                            $id=$row4['id'];
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row4['namaFail']));?></td>
                      <td><a href="folder/workExp/<?php echo $row4["fileDoc"]; ?>" target="_blank"><?php echo $row4["fileDoc"]; ?></td>

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>

                </table>
              </div>
            </div>
       <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Program Applied</h2>
          </br>

           <div class="module">
                            <div class="module-body table">
                               <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <thead>
                                   <tr>
                                    <th>#</th>
                                    <th>Program Name</th>
                                    <th>Batch</th>
                                  </tr>
                                </thead>
                            <tbody>

                          <?php $sql3=mysqli_query($dbconfig,"SELECT * FROM programselection WHERE stud_ic = '$ic'");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql3)){
                           
                          
                          {
                          ?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities (ucwords($row['pg_name']));?></td>
                      <td><?php echo htmlentities(ucwords($row['batch']));?></td>

                       <!--  <i class="icon-remove-sign"></i> -->
                    </tr>
                    <?php $cnt=$cnt+1; 
                    }
                  }
                   ?>

                </table>
              </div>
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
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>

    <script src="../js/azia.js"></script>
    <script>
        function printInvoice() {
            printDiv = ".print"; // id of the div you want to print
            $("*").addClass("no-print");
            $(printDiv + " *").removeClass("no-print");
            $(printDiv).removeClass("no-print");

            parent = $(printDiv).parent();
            while ($(parent).length) {
                $(parent).removeClass("no-print");
                parent = $(parent).parent();
            }
            window.print();

        }

    </script>
    <script>
        $(function () {
            'use strict'

            // Toggle Switches
            $('.az-toggle').on('click', function () {
                $(this).toggleClass('on');
            })

            // Input Masks
            $('#dateMask').mask('99/99/9999');
            $('#phoneMask').mask('(999) 999-9999');
            $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
            $('#ssnMask').mask('999-99-9999');

            // Color picker
            $('#colorpicker').spectrum({
                color: '#17A2B8'
            });

            $('#showAlpha').spectrum({
                color: 'rgba(23,162,184,0.5)',
                showAlpha: true
            });

            $('#showPaletteOnly').spectrum({
                showPaletteOnly: true,
                showPalette: true,
                color: '#DC3545',
                palette: [
                    ['#1D2939', '#fff', '#0866C6', '#23BF08', '#F49917'],
                    ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
                ]
            });

            // Datepicker
            $('.fc-datepicker').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });

            $('#datepickerNoOfMonths').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                numberOfMonths: 2
            });

            // AmazeUI Datetimepicker
            $('#datetimepicker').datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                autoclose: true
            });

            // jQuery Simple DateTimePicker
            $('#datetimepicker2').appendDtpicker({
                closeOnSelected: true,
                onInit: function (handler) {
                    var picker = handler.getPicker();
                    $(picker).addClass('az-datetimepicker');
                }
            });

            new Picker(document.querySelector('#datetimepicker3'), {
                headers: true,
                format: 'MMMM DD, YYYY HH:mm',
                text: {
                    title: 'Pick a Date and Time',
                    year: 'Year',
                    month: 'Month',
                    day: 'Day',
                    hour: 'Hour',
                    minute: 'Minute'
                },
            });


            $(document).ready(function () {
                $('.select2').select2({
                    placeholder: 'Choose one',
                    searchInputPlaceholder: 'Search'
                });

                $('.select2-no-search').select2({
                    minimumResultsForSearch: Infinity,
                    placeholder: 'Choose one'
                });
            });

            $('.rangeslider1').ionRangeSlider();

            $('.rangeslider2').ionRangeSlider({
                min: 100,
                max: 1000,
                from: 550
            });

            $('.rangeslider3').ionRangeSlider({
                type: 'double',
                grid: true,
                min: 0,
                max: 1000,
                from: 200,
                to: 800,
                prefix: '$'
            });

            $('.rangeslider4').ionRangeSlider({
                type: 'double',
                grid: true,
                min: -1000,
                max: 1000,
                from: -500,
                to: 500,
                step: 250
            });

        });

    </script>
    <script>
        $(function () {
            'use strict'

            $('.az-sidebar .with-sub').on('click', function (e) {
                e.preventDefault();
                $(this).parent().toggleClass('show');
                $(this).parent().siblings().removeClass('show');
            })

            $(document).on('click touchstart', function (e) {
                e.stopPropagation();

                // closing of sidebar menu when clicking outside of it
                if (!$(e.target).closest('.az-header-menu-icon').length) {
                    var sidebarTarg = $(e.target).closest('.az-sidebar').length;
                    if (!sidebarTarg) {
                        $('body').removeClass('az-sidebar-show');
                    }
                }
            });


            $('#azSidebarToggle').on('click', function (e) {
                e.preventDefault();

                if (window.matchMedia('(min-width: 992px)').matches) {
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


            var morrisData = [{
                    y: 'Oct 01',
                    a: 95000,
                    b: 70000
                },
                {
                    y: 'Oct 05',
                    a: 75000,
                    b: 55000
                },
                {
                    y: 'Oct 10',
                    a: 50000,
                    b: 40000
                },
                {
                    y: 'Oct 15',
                    a: 75000,
                    b: 65000
                },
                {
                    y: 'Oct 20',
                    a: 50000,
                    b: 40000
                },
                {
                    y: 'Oct 25',
                    a: 80000,
                    b: 90000
                },
                {
                    y: 'Oct 30',
                    a: 75000,
                    b: 65000
                }
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
