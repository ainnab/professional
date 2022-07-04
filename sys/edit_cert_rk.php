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
    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Upload Certificate</h2>
  </div>
  <div class="az-dashboard-header-right">
  </div><!-- az-dashboard-header-right -->
</div><!-- az-content-header -->
<div class="az-content-body">
<div class="row row-sm">
<div class="col-md-12 col-lg-12 col-xl-12">
  <div class="card card-dashboard-seven">
    <div class="card-body">
    
                      <form action="save_personal.php" method="POST" enctype="multipart/form-data">
                         <?php
                      if (isset($_GET['id'])) {

                          $id = $_GET['id'];
                      }
                      //$id = isset($_GET['id']) ? $_GET['id'] : '';
                        $sql4=mysqli_query($dbconfig,"select * from certificate where id='$id'");
                        while($row=mysqli_fetch_array($sql4))
                        {
                        ?>
                        <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
                        <div class="modal-body">
                          <div class="form-group">
                            <input type="file" class="form-control" id="certDoc" name="certDoc">
                            <a href="folder/workExp/<?php echo $row['certDoc']; ?>" target="_blank"><?php echo $row['certDoc']; ?></a>
                            <span class="help-block">*The maximum file size you can upload is 30MB</span>
                          </div>
                        <div class="modal-footer">
                          <a href="tab_test_rk.php?id=<?php echo $row['stud_ic']; ?>"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="update_cert_rk" class="btn btn-primary">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
   <form action="save_personal.php" method="post">
  
            
         
<?php } ?>
            </form><br>