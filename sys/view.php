<?php 
    include 'talum.php';
   
    ?>

<?php
    include 'header_admin.php';

   $ic=$_GET['id'];       
    $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'"); 
    while($data2 = mysqli_fetch_array($records)) { 
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
                            <label class="form-control-label">Name: </label>
                            <input id="firstname" class="form-control" name="name" placeholder="Enter firstname"
                                value="<?php echo $data['stud_name']; ?>" type="text" style="text-transform:uppercase"
                                readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">IC number/passport: </label>
                            <input id="firstname" class="form-control" name="ic" type="text" value="<?php echo $ic; ?>"
                                readonly>
                        </div><!-- form group -->
                    </div>
                    <!--col-->
                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                        <div class="form-group">
                            <label class="form-control-label">Nationality: </label>
                            <select name="nation" class="form-control select2" disabled>
                                <?php while ($nation = mysqli_fetch_array($all_nation,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $nation["taraf_code"];?>"
                                    <?php if($nation["taraf_code"]==$data['stud_nation']) echo 'selected="selected"'; ?>>
                                    <?php echo $nation["taraf_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col-4 -->
                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                        <div class="form-group">
                            <label class="form-control-label">Place Of Birth: </label>
                            <select name="pob" class="form-control select2" disabled>
                                <?php while ($state = mysqli_fetch_array($all_state,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $state["state_code"];?>"
                                    <?php if($state["state_code"]==$data['pob']) echo 'selected="selected"'; ?>>
                                    <?php echo $state["state_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col-4 -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Email: </label>
                            <input id="email" class="form-control" name="email" type="text"
                                value="<?php echo $data['stud_email']; ?>" readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Gender: </label>
                            <select name="gender" class="form-control select2" disabled>
                                <?php while ($gen = mysqli_fetch_array($all_gender,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $gen["gender_code"];?>"
                                    <?php if($gen["gender_code"]==$data['gender']) echo 'selected="selected"'; ?>>
                                    <?php echo $gen["gender_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Age: </label>
                            <input id="age" class="form-control" name="age" type="text" value="<?php echo $age; ?>"
                                readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Date of Birth: </label>
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        Date:
                                    </div>
                                </div>
                                <input id="dateMask" type="text" name="dob" class="form-control"
                                    value="<?php echo $data['dob']; ?>" placeholder="MM/DD/YYYY" readonly>
                            </div><!-- input-group -->
                        </div><!-- form group -->
                    </div><!-- col-4 -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Marital Status: </label>
                            <select name="marital" class="form-control select2" disabled>
                                <?php while ($mar = mysqli_fetch_array($all_marital,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $mar["status_code"];?>"
                                    <?php if($mar["status_code"]==$data['marital']) echo 'selected="selected"'; ?>>
                                    <?php echo $mar["status_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Race: </label>
                            <select name="race" class="form-control select2" disabled>
                                <?php while ($race = mysqli_fetch_array($all_race,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $race["ptmk_race_code"];?>"
                                    <?php if($race["ptmk_race_code"]==$data['stud_race']) echo 'selected="selected"'; ?>>
                                    <?php echo $race["race_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Religion: </label>
                            <select name="religion" class="form-control select2" disabled>
                                <?php while ($rel = mysqli_fetch_array($all_religion,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $rel["religion_code"];?>"
                                    <?php if($rel["religion_code"]==$data['stud_religion']) echo 'selected="selected"'; ?>>
                                    <?php echo $rel["religion_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">No OKU: <span class="tx-danger">if
                                    relatable</span></label>
                            <input id="nooku" class="form-control" name="nooku" type="text"
                                value="<?php echo $data['nooku']; ?>" readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                        <div class="form-group">
                            <label class="form-control-label">OKU Type: <span class="tx-danger">if
                                    relatable</span></label>
                            <select name="okutype" class="form-control select2" disabled>
                                <?php while ($oku = mysqli_fetch_array($all_oku,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $oku["oku_code"];?>"
                                    <?php if($oku["oku_code"]==$data['okutype']) echo 'selected="selected"'; ?>>
                                    <?php echo $oku["oku_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col-4 -->
                </div><!-- row -->
                <?php } ?>
                </br>
                <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Parent/Guardian Information</h2>


                <?php while($data2 = mysqli_fetch_array($records2)) { ?>
                <p class="mg-b-20"></p>
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Name Parent1/Guardian: </label>
                            <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep1"
                                placeholder="Enter firstname" value="<?php echo $data2['p1_name']; ?>" type="text"
                                readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">IC number/passport: </label>
                            <input id="icp1" class="form-control" name="icp1" placeholder="Enter IC parent1/guardian"
                                type="text" value="<?php echo $data2['p1_ic']; ?>" readonly>
                        </div><!-- form group -->
                    </div>
                    <!--col-->
                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                        <div class="form-group">
                            <label class="form-control-label">Nationality: </label>
                            <select name="nationp1" class="form-control select2" disabled>
                                <?php while ($nation = mysqli_fetch_array($all_nation,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $nation["taraf_code"];?>"
                                    <?php if($nation["taraf_code"]==$data2['p1_nation']) echo 'selected="selected"'; ?>>
                                    <?php echo $nation["taraf_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col-4 -->
                </div><!-- row -->
                <p class="mg-b-20"></p>
                <hr />
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Name Parent2: </label>
                            <input id="namep1" class="form-control" style="text-transform:uppercase" name="namep2"
                                placeholder="Enter firstname" value="<?php echo $data2['p2_name']; ?>" type="text"
                                readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">IC number/passport: </label>
                            <input id="icp1" class="form-control" name="icp2" placeholder="Enter IC parent2" type="text"
                                value="<?php echo $data2['p2_ic']; ?>" readonly>
                        </div><!-- form group -->
                    </div>
                    <!--col-->
                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                        <div class="form-group">
                            <label class="form-control-label">Nationality: </label>
                            <select name="nationp2" class="form-control select2" disabled>
                                <?php while ($nation2 = mysqli_fetch_array($all_nation2,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $nation2["taraf_code"];?>"
                                    <?php if($nation2["taraf_code"]==$data2['p2_nation']) echo 'selected="selected"'; ?>>
                                    <?php echo $nation2["taraf_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col-4 -->
                </div><!-- row -->
                <p class="mg-b-20"></p>
                <hr />
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Household: </label>
                            <select name="household" class="form-control select2" disabled>
                                <?php while ($hhold = mysqli_fetch_array($all_household,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $hhold["household_code"];?>"
                                    <?php if($hhold["household_code"]==$data2['household']) echo 'selected="selected"'; ?>>
                                    <?php echo $hhold["household_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-md-5 col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Household Income: </label>
                            <select name="income" class="form-control select2" disabled>
                                <?php while ($inc = mysqli_fetch_array($all_income,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $inc["income_code"];?>"
                                    <?php if($inc["income_code"]==$data2['income']) echo 'selected="selected"'; ?>>
                                    <?php echo $inc["income_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- card-body -->


                </div><!-- card -->

                <?php 
$records3 = mysqli_query($dbconfig,"select * from qualification_info where stud_ic='$ic'"); 
$sql31 = "SELECT * FROM `spm_subject`";
$all_sub = mysqli_query($dbconfig,$sql31);
$sql32 = "SELECT * FROM `spm_grade`";
$sql1 = "SELECT * FROM `school_type`";
$all_school = mysqli_query($dbconfig,$sql1);
$sql2 = "SELECT * FROM `pro_qualification_level`";
$all_level = mysqli_query($dbconfig,$sql2);
?>



                </br>
                <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Academic Information</h2>
                </br>
                <?php while($data3 = mysqli_fetch_array($records3)) { ?>
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Highest Level: </label>
                            <select name="level" class="form-control select2" disabled>
                                <option value=" ">Select</option>
                                <?php while ($level = mysqli_fetch_array($all_level,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $level["pql_code"];?>"
                                    <?php if($level["pql_code"]==$data3['level']) echo 'selected="selected"'; ?>>
                                    <?php echo $level["pql_name"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">INSTITUTION: </label>
                            <input id="" class="form-control" name="ipta" placeholder="Enter IPTA Name"
                                value="<?php echo $data3['ipta']; ?>" type="text" style="text-transform:uppercase"
                                readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">CGPA: </label>
                            <input id="" class="form-control" name="cgpa" placeholder="Enter CGPA"
                                value="<?php echo $data3['cgpa']; ?>" type="text" style="text-transform:uppercase"
                                readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">MUET: </label>
                            <input id="" class="form-control" name="muet" placeholder="Enter Band MUET"
                                value="<?php echo $data3['muet']; ?>" type="number" style="text-transform:uppercase"
                                readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                </div><!-- row -->
                <hr />
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">SPM Number: </label>
                            <input id="" class="form-control" name="spmnumber" placeholder="Enter SPM Number"
                                value="<?php echo $data3['spm_number']; ?>" type="text" style="text-transform:uppercase"
                                readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Year of SPM: </label>
                            <input id="" class="form-control" name="spmyear" placeholder="Enter Year of SPM"
                                value="<?php echo $data3['spm_year']; ?>" type="number"
                                onKeyPress="if(this.value.length==4) return false;" style="text-transform:uppercase"
                                readonly>
                        </div><!-- form group -->
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Type of School: </label>
                            <select name="schooltype" class="form-control select2" disabled>
                                <?php while ($school = mysqli_fetch_array($all_school,MYSQLI_ASSOC)):; ?>
                                <option value="<?php echo $school["SCHOOL_TYPE_CODE"];?>"
                                    <?php if($school["SCHOOL_TYPE_CODE"]==$data3['school_type']) echo 'selected="selected"'; ?>>
                                    <?php echo $school["SCHOOL_TYPE_NAME"];?></option>
                                <?php endwhile; ?>
                            </select>
                        </div><!-- form group -->
                    </div><!-- col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">School Name: </label>
                            <input id="" class="form-control" name="schoolname" placeholder="Enter School Name"
                                value="<?php echo $data3['school_name']; ?>" type="text"
                                style="text-transform:uppercase" readonly>
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

                                    <select name="bb" class="form-control select2" disabled>
                                        <?php $all_grade9 = mysqli_query($dbconfig,$sql32); while ($gred9 = mysqli_fetch_array($all_grade9,MYSQLI_ASSOC)):; ?>
                                        <option value="<?php echo $gred9["spm_code"];?>"
                                            <?php if($gred9["spm_code"]==$data3['gredspm1']) echo 'selected="selected"'; ?>>
                                            <?php echo $gred9["spm_grade"];?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>BAHASA INGGERIS</td>
                                <td>
                                    <select name="bi" class="form-control select2" disabled>
                                        <?php $all_grade2 = mysqli_query($dbconfig,$sql32); while ($gred2 = mysqli_fetch_array($all_grade2,MYSQLI_ASSOC)):; ?>
                                        <option value="<?php echo $gred2["spm_code"];?>"
                                            <?php if($gred2["spm_code"]==$data3['gredspm2']) echo 'selected="selected"'; ?>>
                                            <?php echo $gred2["spm_grade"];?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>MATEMATIK</td>
                                <td>
                                    <select name="mt" class="form-control select2" disabled>
                                        <?php $all_grade3 = mysqli_query($dbconfig,$sql32); while ($gred3 = mysqli_fetch_array($all_grade3,MYSQLI_ASSOC)):; ?>
                                        <option value="<?php echo $gred3["spm_code"];?>"
                                            <?php if($gred3["spm_code"]==$data3['gredspm3']) echo 'selected="selected"'; ?>>
                                            <?php echo $gred3["spm_grade"];?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>SEJARAH</td>
                                <td>
                                    <select name="sj" class="form-control select2" disabled>
                                        <?php $all_grade3 = mysqli_query($dbconfig,$sql32); while ($gred3 = mysqli_fetch_array($all_grade3,MYSQLI_ASSOC)):; ?>
                                        <option value="<?php echo $gred3["spm_code"];?>"
                                            <?php if($gred3["spm_code"]==$data3['gredspm4']) echo 'selected="selected"'; ?>>
                                            <?php echo $gred3["spm_grade"];?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>PENDIDIKAN ISLAM</td>
                                <td><select name="sc" class="form-control select2" disabled>
                                        <?php $all_grade4 = mysqli_query($dbconfig,$sql32); while ($gred4 = mysqli_fetch_array($all_grade4,MYSQLI_ASSOC)):; ?>
                                        <option value="<?php echo $gred4["spm_code"];?>"
                                            <?php if($gred4["spm_code"]==$data3['gredspm5']) echo 'selected="selected"'; ?>>
                                            <?php echo $gred4["spm_grade"];?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>PENDIDIKAN MORAL<span class="tx-danger">*if related</span></td>
                                <td><select name="sc2" class="form-control select2" disabled>
                                        <?php $all_grade5 = mysqli_query($dbconfig,$sql32); while ($gred5 = mysqli_fetch_array($all_grade5,MYSQLI_ASSOC)):; ?>
                                        <option value="<?php echo $gred5["spm_code"];?>"
                                            <?php if($gred5["spm_code"]==$data3['gredspm6']) echo 'selected="selected"'; ?>>
                                            <?php echo $gred5["spm_grade"];?></option>
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
                            </tr>
                            <?php $i++;  } ?>
                        </tbody>

                        <?php } else{  echo "No result found"; } ?>
                </div>
                </table>


                <?php } ?>
                <p class="mg-b-30"></p>
                <p class="mg-b-20">Dokumen Yang Diupload</p>
                <p class="mg-b-20"></p>
                <div class="table-responsive">
                    <div class="container">
                        <table id="demo" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>FileName</td>
                                    <td>Download</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
            // $sqli = "SELECT document_type.document_name, location from document INNER JOIN document_type ON document.file_name=document_type.document_code where stud_ic='$ic'";
            $sqli = "SELECT * from document where stud_ic='$ic'";
            $res = mysqli_query($dbconfig, $sqli); $j=1;
            while ($row = mysqli_fetch_array($res)) {?>
                                <tr>
                                    <td><?php echo $j++;  ?></td>
                                    <td><?php echo $row['file_name']?></td>
                                    <td><a href="Uploaded_Files/<?php echo $row['location']; ?>"><?php echo htmlentities($row['location']);?>
                                    </td>
                                </tr>
                                <?php
            }
            // mysqli_close($dbconfig);
            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <p class="mg-b-30"></p>
                <p class="mg-b-20">Pilihan Program</p>
                <p class="mg-b-20"></p>
                <div class="table-responsive">
                    <div class="container">
                        <table id="demo" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Kod Program</td>
                                    <td>Nama Program</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                $sql6 = "SELECT * from programselection where stud_ic='$ic'";
                $res = mysqli_query($dbconfig, $sql6); $j=1;
                while ($row6 = mysqli_fetch_array($res)) {?>
                                <tr>
                                    <td><?php echo $j++;  ?></td>
                                    <td><?php echo $row6['pg_code'];?></td>
                                    <td> <?php echo $row6['pg_name']; ?></td>
                                </tr>
                                <?php
            }
            // mysqli_close($dbconfig);
            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- row -->

    </div><!-- az-content -->
    <center><input type="button" class="btn btn-primary mb-4 " onclick="printInvoice();" value="Print"></center>
    <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
            <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
        </div><!-- container -->
    </div><!-- az-footer -->
    <?php } ?>

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
