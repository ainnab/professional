<?php 
include 'talum.php';
session_start();
$ic=$_SESSION['ic'];


$bm = $_POST['bm'];
$bi = $_POST['bi'];
$mt = $_POST['mt'];
$sj = $_POST['sj'];
$pai = $_POST['pai'];
$mo = $_POST['mo'];
$sub7 = $_POST['sub7'];
$sub8 = $_POST['sub8'];
$sub9 = $_POST['sub9'];
$sub10 = $_POST['sub10'];
$sub11 = $_POST['sub11'];
$sub12 = $_POST['sub12'];
$sub13 = $_POST['sub13'];
$sub14 = $_POST['sub14'];
$sub15 = $_POST['sub15'];
$gred7 = $_POST['gred7'];
$gred8 = $_POST['gred8'];
$gred9 = $_POST['gred9'];
$gred10 = $_POST['gred10'];
$gred11 = $_POST['gred11'];
$gred12 = $_POST['gred12'];
$gred13 = $_POST['gred13'];
$gred14 = $_POST['gred14'];
$gred15 = $_POST['gred15'];

$schooltype = $_POST['schooltype'];
$spmyear = $_POST['spmyear'];
$spmnumber = $_POST['spmnumber'];
$schoolname = strtoupper($_POST['schoolname']);
$aliran = $_POST['aliran'];

$sql1 = mysqli_query($dbconfig,"SELECT value_grade FROM spm_grade WHERE spm_code='$bm'");
$res = mysqli_fetch_assoc($sql1);
$val = $res['value_grade'];

$sql2 = mysqli_query($dbconfig,"SELECT value_grade FROM spm_grade WHERE spm_code='$bi'");
$res2 = mysqli_fetch_assoc($sql2);
$val2 = $res2['value_grade'];

$sql3 = mysqli_query($dbconfig,"SELECT value_grade FROM spm_grade WHERE spm_code='$mt'");
$res3 = mysqli_fetch_assoc($sql3);
$va3 = $res3['value_grade'];

$sql4 = mysqli_query($dbconfig,"SELECT value_grade FROM spm_grade WHERE spm_code='$sj'");
$res4 = mysqli_fetch_assoc($sql4);
$val4 = $res['value_grade'];

$result3="UPDATE qualification_info SET";
$result3.= " `spm_number`='$spmnumber', `spm_year`='$spmyear', `spm_aliran`='$aliran', `school_type`='$schooltype', `school_name`='$schoolname', `kodspm1`='1103', `gredspm1`='$bm', `valuespm1`='$val', kodspm2 = '1119', gredspm2='$bi', `valuespm2`='$val2', kodspm3 = '1149', gredspm3='$mt', kodspm4 = '1249', gredspm4='$sj', kodspm5 = '1511', gredspm5='$pai', kodspm6 = '1225', gredspm6='$mo', kodspm7 = '$sub7', gredspm7='$gred7', kodspm8 = '$sub8', gredspm8='$gred8', kodspm9 = '$sub9', gredspm9='$gred9', kodspm10 = '$sub10', gredspm10='$gred10', kodspm11 = '$sub11', gredspm11='$gred11', kodspm12 = '$sub12', gredspm12='$gred12', kodspm13 = '$sub13', gredspm13='$gred13', kodspm14 = '$sub14', gredspm14='$gred14', kodspm15 = '$sub15', gredspm15='$gred15'";
$result3.= " WHERE stud_ic='$ic'";

$result2="UPDATE data_ptmk SET";
$result2.= " `AGILIRSPM` ='$spmnumber', `THNSPM`='$spmyear', `ALIRAN`='$aliran', `KODSPM1`='1103', `GRDSPM1`='$bm', `KODSPM2`='1119', `GRDSPM2`='$bi', `KODSPM3`='1149', `GRDSPM3`='$mt', `KODSPM4`='1149', `GRDSPM4`='$sj', `KODSPM5`='1511', `GRDSPM5`='$pai', `KODSPM6`='1225', `GRDSPM6`='$mo', `KODSPM7`='$sub7', `GRDSPM7`='$gred7', `KODSPM8`='$sub8', `GRDSPM8`='$gred8', `KODSPM9`='$sub9', `GRDSPM9`='$gred9', `KODSPM10`='$sub10', `GRDSPM10`='$gred10', `KODSPM11`='$sub11', `GRDSPM11`='$gred11', `KODSPM12`='$sub12', `GRDSPM12`='$gred12', `KODSPM13`='$sub13', `GRDSPM13`='$gred13', `KODSPM14`='$sub14', `GRDSPM14`='$gred14', `KODSPM15`='$sub15', `GRDSPM15`='$gred15'" ;
$result2.= " WHERE NOKP='$ic'";

	if(mysqli_query($dbconfig, $result3) == TRUE){
        $results2 = mysqli_query($dbconfig, $result2);
        if($results2 == TRUE){
  
        // echo $sql;
         echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_academic.php';</script>";
    }

     else{
        echo "ERROR: Hush! Sorry $result3. " 
            . mysqli_error($dbconfig);
    }
        
    mysqli_close($dbconfig);
    }
?>