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



if (isset($_POST['submit_student'])) {

$firstname = $_POST['name'];
$agent = $_POST['agent'];
$ic = $_POST['ic'];
//$phone = $_POST['phone'];
$email = $_POST['email'];
$intake = 'batch julai 2022';
$roles = 'student';
$status ='Applied';

 date_default_timezone_set("asia/kuala_lumpur");
  $dte = date('Y-m-d');
 

$hashPassword = password_hash($ic,PASSWORD_BCRYPT);
 $sql_u = "SELECT * FROM student WHERE stud_ic='$ic'";
    $res_u = mysqli_query($dbconfig, $sql_u);


if (mysqli_num_rows($res_u) > 0) {
      echo "<script type='text/javascript'>alert('Sorry.. you already signup.Please sigin!'); window.location.href = 'signup.php';</script>";
    
    }else{

        $sql="INSERT INTO student (stud_name,stud_ic,stud_email,password,intake,agent,date,role,app_status) VALUES ('$firstname','$ic','$email','$hashPassword','$intake','$agent','$dte','$roles','$status')";
        $result = mysqli_query($dbconfig, $sql);

if($result)
    {
$sql2 = "insert into application (stud_ic,intake) value('".$ic."','".$intake."')";
      $result2 = mysqli_query($dbconfig, $sql2);
      if($result2){

        $sql3 = "insert into parent (stud_ic) value('".$ic."')";
      $result3 = mysqli_query($dbconfig, $sql3);}
      if($result3){

        $sql4 = "insert into working_experience (stud_ic) value('".$ic."')";
      $result4 = mysqli_query($dbconfig, $sql4);}
      if($result4){ 
 
   $sql5 = "insert into academic (stud_ic) value('".$ic."')";
      $result5 = mysqli_query($dbconfig, $sql5);}
      if($result5){ 
$sql6 = "insert into document (stud_ic) value('".$ic."')";
      $result6 = mysqli_query($dbconfig, $sql6);
      




echo "<script type='text/javascript'>alert('Registration Successfully!'); window.location.href = 'dashboard_agent.php';</script>";
      }
      else{
        echo "opps! something was wrong.". mysqli_error($dbconfig);;
      }
      
    }



  }
    }




///




mysqli_close($dbconfig);

  ?>