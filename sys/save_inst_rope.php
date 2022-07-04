<?php 
include 'talum.php';
session_start();
$ic=$_SESSION['ic'];

if (isset($_POST['submit_inst'])) {

$inst_name = $_POST['inst_name'];
$address = $_POST['address'];
//$age = $_POST['age'];
$website = $_POST['website'];
$status ='applied';




     $query = "INSERT INTO inst (inst_name,address,website,status) VALUES ('$inst_name','$address','$website','$status')";


   if(mysqli_query($dbconfig, $query) == TRUE){
    //move_uploaded_file($_FILES['fileWork']['tmp_name'], $target2);
    echo "<script>alert('Application successfully saved.')</script>";
                   echo '<META http-equiv="refresh" content="0;URL=tab_inst.php">';

    } else{
        echo "ERROR: Hush! Sorry $result. " 
            . mysqli_error($dbconfig);
    }
}


?>
<?php


    mysqli_close($dbconfig);
      
   
?>