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
        $stud_id = $_GET['id'];
        $role = $data2['role'];
        $agent=$data2['stud_name']; 
        $app_status = $data2['app_status'];
        include 'main_menu.php';
      
       }     
    ?>
<?php 
$records3 = mysqli_query($dbconfig,"select * from document where stud_ic='$ic'"); 

?>


<div class="az-content-header d-block d-md-flex">
  <div>
    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Upload Document</h2>
    
  </div>
  <div class="az-dashboard-header-right">
  </div><!-- az-dashboard-header-right -->
</div><!-- az-content-header -->
<div class="az-content-body">
<div class="row row-sm">
<div class="col-md-12 col-lg-12 col-xl-12">
  <div class="card card-dashboard-seven">
    <div class="card-body">
    
                      <form action="save_rk_rope.php" method="POST" enctype="multipart/form-data">
                         <?php
                      if (isset($_GET['id'])) {

                          $id = $_GET['id'];
                      }
                      //$id = isset($_GET['id']) ? $_GET['id'] : '';
                        $sql4=mysqli_query($dbconfig,"select * from document where id='$id'");
                        while($row=mysqli_fetch_array($sql4))
                        {
                          $filename = $row['namaFail'];

                        ?>
                        <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
                        <input type="text" name="stud_ic" value="<?php echo $row['stud_ic']; ?>" hidden>
                        <div class="modal-body">

                        <div class="form-group">
                          <label>Filename:</label>
                            <select name="namaFail" id="namaFail" class="form-control">
                            <option value="namaFail" selected disabled="" style="font-size:14px;">Please select</option>
                            <?php $sql1 = "SELECT * FROM document_type";
                            $result1 = mysqli_query($dbconfig, $sql1) or die("database error:". mysqli_error($dbconfig));
                            while( $row1 = mysqli_fetch_assoc($result1) ) {
                                $docname=$row1['document_name'];
                                ?>
                                <option value="<?php echo $row1["document_name"];?>"<?php if($row1["document_name"]==$row['namaFail']) echo 'selected="selected"'; ?>><?php echo $row1["document_name"];?></option> 
                                <?php } ?>
                            </select>
                      </div>
                          <div class="form-group">
                            <input type="file" class="form-control" id="fileDoc" name="fileDoc">
                            <a href="folder/workExp/<?php echo $row['fileDoc']; ?>" target="_blank"><?php echo $row['fileDoc']; ?></a>
                            <span class="help-block">*The maximum file size you can upload is 30MB</span>
                          </div>
                        <div class="modal-footer">
                          <a href="tab_test.php?id=<?php echo $row['stud_ic']; ?>"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                          <button type="submit" name="update_new_doc" class="btn btn-primary">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
   <form action="save_rk_rope.php" method="post">
  
            
         
<?php } ?>
            </form><br>