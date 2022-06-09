<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<link href="hide-show-fields-form.css" rel="stylesheet"/>

<?php
    session_start();
    if(!isset($_SESSION["ic"])) {
        header("Location: signin.php");
        exit();
    }
    ?>
 

    <?php 
    include 'talum.php';
    $ic=$_SESSION['ic'];
    $records3 = mysqli_query($dbconfig,"select * from qualification_info where stud_ic='$ic'"); 
    $sql31 = "SELECT * FROM `spm_subject`";
    $all_sub = mysqli_query($dbconfig,$sql31);
    $sql32 = "SELECT * FROM `spm_grade`";
    
    ?>
<form class="p-3">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Joe Smith">
  </div>
  <div class="form-group">
    <label for="seeAnotherField">Do You Want To See Another Field?</label>
    <select class="form-control" id="seeAnotherField">
    <option value="" selected disabled="" style="font-size:14px;">Please select</option>
                        <?php
                            $sql4 = "SELECT * FROM program WHERE pg_code != 'A'";
                            $result4 = mysqli_query($dbconfig, $sql4) or die("database error:". mysqli_error($dbconfig3));
                            while( $row4 = mysqli_fetch_assoc($result4) ) {
                                $pgCode=$row4['pg_code'];
                                $pgName=strtolower($row4['pg_name']);
                            ?>
                            <option value="<?php echo $pgCode; ?>"><?php echo ucwords($pgName); ?></option>
                        <?php }	?>
          <option value="no">No Way.</option>
          <option value="yes">Absolutely!</option>
    </select>
  </div>
  <div class="form-group" id="otherFieldDiv">
    <label for="otherField">Here you go!</label>
    <select class="form-control" id="otherField">
      <option>Yay</option>
      <option>Woo</option>
      <option>Hazah</option>
      <option>Yipee</option>
      <option>Hoorah</option>
    </select>
  </div>
  <div class="form-group">
    <label for="seeAnotherFieldGroup">Do You Want To See Another Group of Fields?</label>
    <select class="form-control" id="seeAnotherFieldGroup">
          <option value="no">Not Particularly.</option>
          <option value="yes">I Guess!</option>
    </select>
  </div>
  <div class="form-group" id="otherFieldGroupDiv">
   <div class="row">
    <div class="col-6">
      <label for="otherField1">Group: Heres One!</label>
      <input type="text" class="form-control w-100" id="otherField1">
    </div>
    <div class="col-6">
      <label for="otherField2">Group: Another One!</label>
      <input type="text" class="form-control w-100" id="otherField2">
    </div>
   
   </div>
    

  </div>
  <div class="form-group">
    <label for="comments">Comments/Questions</label>
    <textarea class="form-control" id="comments" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script>
$("#seeAnotherField").change(function() {
			if ($(this).val() == "DIP") {
				$('#otherFieldDiv').show();
				$('#otherField').attr('required','');
				$('#otherField').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv').hide();
				$('#otherField').removeAttr('required');
				$('#otherField').removeAttr('data-error');				
			}
      
		});
		$("#seeAnotherField").trigger("change");
		
$("#seeAnotherFieldGroup").change(function() {
			if ($(this).val() == "yes") {
				$('#otherFieldGroupDiv').show();
				$('#otherField1').attr('required','');
				$('#otherField1').attr('data-error', 'This field is required.');
        $('#otherField2').attr('required','');
				$('#otherField2').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldGroupDiv').hide();
				$('#otherField1').removeAttr('required');
				$('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
				$('#otherField2').removeAttr('data-error');	
			}
		});
		$("#seeAnotherFieldGroup").trigger("change");
		</script>
