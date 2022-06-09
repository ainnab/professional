<?php 
include 'talum.php';
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

while($data2 = mysqli_fetch_array($records2)) { ?>
<p class="mg-b-20"></p>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name Parent1/Guardian: <span class="tx-danger">*</span></label>
      <input id="namep1" class="form-control" name="namep1" placeholder="Enter firstname" value="<?php echo $data2['p1_name']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC number/passport: <span class="tx-danger">*</span></label>
      <input id="icp1" class="form-control" name="icp1" placeholder="Enter IC parent1/guardian" type="text" value="<?php echo $data2['p1_ic']; ?>" >
    </div><!-- form group -->
  </div><!--col-->
  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Nationality: <span class="tx-danger">*</span></label>
      <select name="nationp1" class="form-control select2">
      <option>Select</option>
      <?php while ($nation = mysqli_fetch_array($all_nation,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $nation["taraf_code"];?>"<?php if($nation["taraf_code"]==$data2['p1_nation']) echo 'selected="selected"'; ?>><?php echo $nation["taraf_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
      <input id="emailp1" class="form-control" name="emailp1" type="text" value="<?php echo $data2['p1_email']; ?>">
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
      <input id="phonep1" class="form-control" name="phonep1" type="text" value="<?php echo $data2['p1_phone']; ?>">
    </div><!-- form group -->
  </div><!-- col -->  
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Marital Status: <span class="tx-danger">*</span></label>
      <select name="maritalp1" class="form-control select2">
      <option>Select</option>
      <?php while ($mar = mysqli_fetch_array($all_marital,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $mar["status_code"];?>"<?php if($mar["status_code"]==$data2['p1_marital']) echo 'selected="selected"'; ?>><?php echo $mar["status_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Race: <span class="tx-danger">*</span></label>
      <select name="racep1" class="form-control select2">
      <option>Select</option>
      <?php while ($race = mysqli_fetch_array($all_race,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $race["ptmk_race_code"];?>"<?php if($race["ptmk_race_code"]==$data2['p1_race']) echo 'selected="selected"'; ?>><?php echo $race["race_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
      <select name="religionp1" class="form-control select2">
      <option>Select</option>
      <?php while ($rel = mysqli_fetch_array($all_religion,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $rel["religion_code"];?>"<?php if($rel["religion_code"]==$data2['p1_religion']) echo 'selected="selected"'; ?>><?php echo $rel["religion_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
  <div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Relation with applicant: <span class="tx-danger">*</span></label>
      <select name="relationp1" class="form-control select2">
      <option>Select</option>
      <?php while ($relat = mysqli_fetch_array($all_relation,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $relat["GUARD_CODE"];?>"<?php if($relat["GUARD_CODE"]==$data2['p1_relation']) echo 'selected="selected"'; ?>><?php echo $relat["GUARD_NAME"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">No OKU: <span class="tx-danger">if relatable</span></label>
      <input id="nookup1" class="form-control" name="nookup1" type="text" value="<?php echo $data2['p1_nooku']; ?>">
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<p class="mg-b-20"></p>
<div class="row row-sm">
  <div class="col-md-12 col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Name Parent2: <span class="tx-danger">*</span></label>
      <input id="namep1" class="form-control" name="namep2" placeholder="Enter firstname" value="<?php echo $data2['p2_name']; ?>" type="text" required>
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">IC number/passport: <span class="tx-danger">*</span></label>
      <input id="icp1" class="form-control" name="icp2" placeholder="Enter IC parent2" type="text" value="<?php echo $data2['p2_ic']; ?>" >
    </div><!-- form group -->
  </div><!--col-->
  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Nationality: <span class="tx-danger">*</span></label>
      <select name="nationp2" class="form-control select2">
      <option>Select</option>
      <?php while ($nation2 = mysqli_fetch_array($all_nation2,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $nation2["taraf_code"];?>"<?php if($nation2["taraf_code"]==$data2['p2_nation']) echo 'selected="selected"'; ?>><?php echo $nation2["taraf_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
      <input id="emailp2" class="form-control" name="emailp2" type="text" value="<?php echo $data2['p2_email']; ?>">
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
      <input id="phonep1" class="form-control" name="phonep2" type="text" value="<?php echo $data2['p2_phone']; ?>">
    </div><!-- form group -->
  </div><!-- col -->  
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Marital Status: <span class="tx-danger">*</span></label>
      <select name="maritalp2" class="form-control select2">
      <option>Select</option>
      <?php while ($mar = mysqli_fetch_array($all_marital2,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $mar["status_code"];?>"<?php if($mar["status_code"]==$data2['p2_marital']) echo 'selected="selected"'; ?>><?php echo $mar["status_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Race: <span class="tx-danger">*</span></label>
      <select name="racep2" class="form-control select2">
      <option>Select</option>
      <?php while ($race = mysqli_fetch_array($all_race2,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $race["ptmk_race_code"];?>"<?php if($race["ptmk_race_code"]==$data2['p2_race']) echo 'selected="selected"'; ?>><?php echo $race["race_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Religion: <span class="tx-danger">*</span></label>
      <select name="religionp2" class="form-control select2">
      <option>Select</option>
      <?php while ($rel = mysqli_fetch_array($all_religion2,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $rel["religion_code"];?>"<?php if($rel["religion_code"]==$data2['p2_religion']) echo 'selected="selected"'; ?>><?php echo $rel["religion_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
  <div class="row row-sm">
  <div class="col-lg-8 mg-t-20 mg-lg-t-0">
    <div class="form-group">
      <label class="form-control-label">Relation with applicant: <span class="tx-danger">*</span></label>
      <select name="relationp2" class="form-control select2">
      <option>Select</option>
      <?php while ($relat = mysqli_fetch_array($all_relation2,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $relat["GUARD_CODE"];?>"<?php if($relat["GUARD_CODE"]==$data2['p2_relation']) echo 'selected="selected"'; ?>><?php echo $relat["GUARD_NAME"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col-4 -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
      <label class="form-control-label">No OKU: <span class="tx-danger">if relatable</span></label>
      <input id="nookup2" class="form-control" name="nookup2" type="text" value="<?php echo $data2['p2_nooku']; ?>">
    </div><!-- form group -->
  </div><!-- col -->
</div><!-- row -->
<div class="row row-sm">
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household: <span class="tx-danger">*</span></label>
      <select name="household" class="form-control select2">
      <option>Select</option>
      <?php while ($hhold = mysqli_fetch_array($all_household,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $hhold["household_code"];?>"<?php if($hhold["household_code"]==$data2['household']) echo 'selected="selected"'; ?>><?php echo $hhold["household_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  <div class="col-md-5 col-lg-4">
    <div class="form-group">
    <label class="form-control-label">Household Income: <span class="tx-danger">*</span></label>
      <select name="income" class="form-control select2">
      <option>Select</option>
      <?php while ($inc = mysqli_fetch_array($all_income,MYSQLI_ASSOC)):; ?>
      <option value="<?php echo $inc["income_code"];?>"<?php if($inc["income_code"]==$data2['income']) echo 'selected="selected"'; ?>><?php echo $inc["income_name"];?></option>
      <?php endwhile; ?>
      </select>
    </div><!-- form group -->
  </div><!-- col -->
  </div><!-- row -->
<?php } ?>