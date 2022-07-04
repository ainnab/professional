<?php 


include 'talum.php';
session_start();
$ic=$_SESSION['ic'];

 $records = mysqli_query($dbconfig,"select * from student where stud_ic='$ic'");

 $sql_query="select * from student where stud_ic='$ic' ";

  $res=mysqli_query($dbconfig,$sql_query);
  //echo $sql_query;
  $userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $role = $userRow['role'];
     //$agent=$data2['stud_name'];  



if (isset($_POST['submit_rk'])) {

$firstname = $_POST['name'];
$ic = $_POST['ic'];
//$phone = $_POST['phone'];
$email = $_POST['email'];
$intake = ' ';
$roles = 'inst';
$statusrk ='Deactive';
$status ='Dalam Proses';

 date_default_timezone_set("asia/kuala_lumpur");
  $dte = date('Y-m-d');
 

$hashPassword = password_hash($ic,PASSWORD_BCRYPT);
 $sql_u = "SELECT * FROM student WHERE stud_ic='$ic'";
    $res_u = mysqli_query($dbconfig, $sql_u);


if (mysqli_num_rows($res_u) > 0) {
      echo "<script type='text/javascript'>alert('Sorry.. you already signup.Please sigin!'); window.location.href = 'tab_adminrk.php';</script>";
    
    }else{

        $sql="INSERT INTO student (stud_name,stud_ic,stud_email,password,intake,date,role,app_status,rk_status) VALUES ('$firstname','$ic','$email','$hashPassword','$intake','$dte','$roles','$status','$statusrk')";
        $result = mysqli_query($dbconfig, $sql);

if($result)
    {

echo "<script type='text/javascript'>alert('Registration Successfully!'); window.location.href = 'tab_adminrk.php';</script>";
      }
      else{
        echo "opps! something was wrong.". mysqli_error($dbconfig);;
      }
      
    }

  }
?>
<?php
if (isset($_POST['update_status'])) {


    $status = $_POST['status'];
    $id = $_POST['id'];

    $sql ="UPDATE student SET app_status='$status' WHERE id='$id'";

    if(mysqli_query($dbconfig,$sql) == TRUE ){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'list_rakankerjasama.php';</script>";
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($dbconfig);
    }
}

if (isset($_POST['update_account'])) {


    $account = $_POST['account'];
    $id = $_POST['id'];

    $sql ="UPDATE student SET rk_status='$account' WHERE id='$id'";

    if(mysqli_query($dbconfig,$sql) == TRUE ){
        //$result2 = mysqli_query($dbconfig, $result2);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'list_approved_rk.php';</script>";
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($dbconfig);
    }
}
mysqli_close($dbconfig);

  ?>