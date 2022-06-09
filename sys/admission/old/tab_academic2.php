<?php 
include 'talum.php';
$ic=$_SESSION['ic'];
$records3 = mysqli_query($dbconfig,"select * from qualification_info where stud_ic='$ic'"); 
$sql31 = "SELECT * FROM `spm_subject`";
$all_sub = mysqli_query($dbconfig,$sql31);
$sql32 = "SELECT * FROM `spm_grade`";



?>

<?php while($data3 = mysqli_fetch_array($records3)) { ?>
<p class="mg-b-20"></p>
<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Subjects</th>
                  <th>Gred</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 <td>1</td>
                  <td width="200">BAHASA MELAYU</td>
                  <td>
                        
                        <select name="grade" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade = mysqli_query($dbconfig,$sql32); while ($gred = mysqli_fetch_array($all_grade,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred["spm_code"];?>"<?php if($gred["spm_code"]==$data3['kodspm1']) echo 'selected="selected"'; ?>><?php echo $gred["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>2</td>
                  <td>BAHASA INGGERIS</td>
                  <td>  
                        <select name="grade2" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade2 = mysqli_query($dbconfig,$sql32); while ($gred2 = mysqli_fetch_array($all_grade2,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred2["spm_code"];?>"<?php if($gred2["spm_code"]==$data3['kodspm2']) echo 'selected="selected"'; ?>><?php echo $gred2["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>3</td>
                  <td>MATEMATIK</td>
                  <td>
                        <select name="grade3" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade3 = mysqli_query($dbconfig,$sql32); while ($gred3 = mysqli_fetch_array($all_grade3,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred3["spm_code"];?>"<?php if($gred3["spm_code"]==$data3['kodspm3']) echo 'selected="selected"'; ?>><?php echo $gred3["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>4</td>
                  <td>SEJARAH</td>
                  <td>
                        <select name="grade3" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade3 = mysqli_query($dbconfig,$sql32); while ($gred3 = mysqli_fetch_array($all_grade3,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred3["spm_code"];?>"<?php if($gred3["spm_code"]==$data3['kodspm4']) echo 'selected="selected"'; ?>><?php echo $gred3["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
                <tr>
                <td>5</td>
                  <td>SAINS</td>
                  <td><select name="grade4" class="form-control select2">
                        <option>Select</option>
                        <?php $all_grade4 = mysqli_query($dbconfig,$sql32); while ($gred4 = mysqli_fetch_array($all_grade4,MYSQLI_ASSOC)):; ?>
                        <option value="<?php echo $gred4["spm_code"];?>"<?php if($gred4["spm_code"]==$data3['kodspm5']) echo 'selected="selected"'; ?>><?php echo $gred4["spm_grade"];?></option>
                        <?php endwhile; ?>
                        </select>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
          <p class="mg-b-30"></p>
          <p class="mg-b-20">Additional Subjects</p>
 <table class="table table-bordered" id="dynamic_field">  
    <tr>  
        <td>
            <select name="sub" class="form-control select2">
                <option>Select</option>
                <?php while ($sub = mysqli_fetch_array($all_sub,MYSQLI_ASSOC)):; ?><option value="<?php echo $sub["subject_code"];?>"><?php echo $sub["subject_name"];?></option><?php endwhile; ?>
            </select>
        </td>  
        <td>
            <select name="gred" class="form-control select2">
                <option>Select</option>
                <?php $all_grade5 = mysqli_query($dbconfig,$sql32); while ($gred5 = mysqli_fetch_array($all_grade5,MYSQLI_ASSOC)):; ?><option value="<?php echo $gred5["spm_code"];?>"><?php echo $gred5["spm_grade"];?></option><?php endwhile; ?>
            </select>
        </td>
        <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>  
    </tr>  
</table>
<?php } ?>