<?php 
include 'talum.php';
$ic=$_SESSION['ic'];
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

<?php while($data = mysqli_fetch_array($records)) { ?>
<p class="mg-b-20"></p>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
      <input id="firstname" class="form-control" name="name" placeholder="Enter firstname" value="<?php echo $data['stud_name']; ?>" type="text" style="text-transform:uppercase" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC number/passport: <span class="tx-danger">*</span></label>
      <input id="firstname" class="form-control" name="ic" type="text" value="<?php echo $_SESSION['ic']; ?>" readonly>
    </div><!-- form group -->
  </div><!--col-->
  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Nationality: <span class="tx-danger">*</span></label>
      <select name="nation" class="form-control select2">
      <option>Select</option>
      <?php while ($nation = mysqli_fetch_array($all_nation,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $nation["taraf_code"];?>"<?php if($nation["taraf_code"]==$data['stud_nation']) echo 'selected="selected"'; ?>><?php echo $nation["taraf_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Place Of Birth: <span class="tx-danger">*</span></label>
      <select name="pob" class="form-control select2">
      <option>Select</option>
      <?php while ($state = mysqli_fetch_array($all_state,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $state["state_code"];?>"<?php if($state["state_code"]==$data['pob']) echo 'selected="selected"'; ?>><?php echo $state["state_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
      <input id="email" class="form-control" name="email" type="text" value="<?php echo $data['stud_email']; ?>">
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
    <div class="form-group">
      <label class="form-control-label">Home Tel Number: <span class="tx-danger">*</span></label>
      <input id="hometel" class="form-control" name="hometel" value="<?php echo $data['stud_home']; ?>" type="text">
    </div><!-- form group -->
  </div><!--col-->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
      <input id="phone" class="form-control" name="phone" type="text" value="<?php echo $data['stud_phone']; ?>">
    </div><!-- form group -->
  </div><!-- col -->  
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
      <select name="gender" class="form-control select2">
      <option>Select</option>
      <?php while ($gen = mysqli_fetch_array($all_gender,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $gen["gender_code"];?>"<?php if($gen["gender_code"]==$data['gender']) echo 'selected="selected"'; ?>><?php echo $gen["gender_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Age: <span class="tx-danger">*</span></label>
      <input id="age" class="form-control" name="age" type="text" value="<?php echo $age; ?>" readonly>
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
          <input id="dateMask" type="text" name="dob" class="form-control" value="<?php echo $data['dob']; ?>" placeholder="MM/DD/YYYY">
        </div><!-- input-group -->
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Marital Status: <span class="tx-danger">*</span></label>
      <select name="marital" class="form-control select2">
      <option>Select</option>
      <?php while ($mar = mysqli_fetch_array($all_marital,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $mar["status_code"];?>"<?php if($mar["status_code"]==$data['marital']) echo 'selected="selected"'; ?>><?php echo $mar["status_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Race: <span class="tx-danger">*</span></label>
      <select name="race" class="form-control select2">
      <option>Select</option>
      <?php while ($race = mysqli_fetch_array($all_race,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $race["ptmk_race_code"];?>"<?php if($race["ptmk_race_code"]==$data['stud_race']) echo 'selected="selected"'; ?>><?php echo $race["race_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
      <select name="religion" class="form-control select2">
      <option>Select</option>
      <?php while ($rel = mysqli_fetch_array($all_religion,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $rel["religion_code"];?>"<?php if($rel["religion_code"]==$data['stud_religion']) echo 'selected="selected"'; ?>><?php echo $rel["religion_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
  <div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Address1: <span class="tx-danger">*</span></label>
      <input id="" class="form-control" name="add1" placeholder="Enter Address1" value="<?php echo $data['add1']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Address2: <span class="tx-danger">*</span></label>
      <input id="" class="form-control" name="add2" placeholder="Enter Address2" value="<?php echo $data['add2']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">City: <span class="tx-danger">*</span></label>
      <input id="city" class="form-control" name="city" type="text" value="<?php echo $data['city']; ?>">
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
    <div class="form-group">
      <label class="form-control-label">Postcode: <span class="tx-danger">*</span></label>
      <input id="" class="form-control" name="postcode" value="<?php echo $data['postcode']; ?>" type="text">
    </div><!-- form group -->
  </div><!--col-->
  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">State: <span class="tx-danger">*</span></label>
      <select name="state" class="form-control select2">
      <option>Select</option>
      <?php while ($state2 = mysqli_fetch_array($all_state2,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $state2["state_code"];?>"<?php if($state2["state_code"]==$data['state']) echo 'selected="selected"'; ?>><?php echo $state2["state_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">No OKU: <span class="tx-danger">if relatable</span></label>
      <input id="nooku" class="form-control" name="nooku" type="text" value="<?php echo $data['nooku']; ?>">
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">OKU Type: <span class="tx-danger">if relatable</span></label>
      <select name="okutype" class="form-control select2">
      <option>Select</option>
      <?php while ($oku = mysqli_fetch_array($all_oku,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $oku["oku_code"];?>"<?php if($oku["oku_code"]==$data['okutype']) echo 'selected="selected"'; ?>><?php echo $oku["oku_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->
<?php } ?>