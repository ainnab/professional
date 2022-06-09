<div class="tab-pane" id="program_selection">
   

		<div class="alert alert-warning" role="alert">
			Please read instruction carefully. All Information marked * must be filled
		</div>

            <div class="form-group row align-items">
                <div class="form-group col-md-6">
                    <label><b>Programme Category - First Choice*</b></label>
                    <select name="pgFirst" id="pgFirst" class="form-control">
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
                    </select>
                    <!-- Error -->
                    <span id="error_first" class="text-danger"></span>
                </div>
                <?php include 'pg_first_choice.php'; ?>
            </div>
            <hr/>
            <div class="form-group row align-items">
                <div class="form-group col-md-6">
                    <label><b>Programme Category - Second Choice</b></label>
                    <select name="pgSecond" id="pgSecond" class="form-control">
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
                    </select>
                    <!-- Error -->
                    <span id="error_second" class="text-danger"></span>
                </div>
                <?php include 'pg_second_choice.php'; ?>
            </div>
            <hr/>
            <div class="form-group row align-items">
                <div class="form-group col-md-6">
                    <label><b>Programme Category - Third Choice</b></label>
                    <select name="pgThird" id="pgThird" class="form-control">
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
                    </select>
                    <!-- Error -->
                    <span id="error_third" class="text-danger"></span>
                </div>
                <?php include 'pg_third_choice.php'; ?>
            </div>
            <p style="font-size:12px;color:red"><i>*Choose at least one programme</i></p>
          
  
</div>