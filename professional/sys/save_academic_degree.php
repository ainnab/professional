<?php 
include 'talum.php';
session_start();
$ic=$_SESSION['ic'];


$bm = $_POST['bb'];
$bi = $_POST['bi'];
$mt = $_POST['mt'];
$sj = $_POST['sj'];
$sc = $_POST['sc'];
$sc2 = $_POST['sc2'];
$schooltype = $_POST['schooltype'];
$spmyear = $_POST['spmyear'];
$spmnumber = $_POST['spmnumber'];
$schoolname = $_POST['schoolname'];
$level = $_POST['level'];
$ipta = $_POST['ipta'];
$cgpa = $_POST['cgpa'];
$muet = $_POST['muet'];
$aliran = $_POST['aliran'];

	$result3="UPDATE qualification_info SET";
	$result3.= " `level`='$level', `ipta`='$ipta', `cgpa`='$cgpa', `muet`='$muet', `spm_number`='$spmnumber', `spm_year`='$spmyear', `spm_aliran`='$aliran', `school_type`='$schooltype', `school_name`='$schoolname', `kodspm1`='1103', `gredspm1`='$bm', `valuespm1`='$val', kodspm2 = '1119', gredspm2='$bi', `valuespm2`='$val2', kodspm3 = '1149', gredspm3='$mt', kodspm4 = '1249', gredspm4='$sj', kodspm5 = '1511', gredspm5='$pai', kodspm6 = '1225', gredspm6='$mo', kodspm7 = '$sub7', gredspm7='$gred7', kodspm8 = '$sub8', gredspm8='$gred8', kodspm9 = '$sub9', gredspm9='$gred9', kodspm10 = '$sub10', gredspm10='$gred10', kodspm11 = '$sub11', gredspm11='$gred11', kodspm12 = '$sub12', gredspm12='$gred12', kodspm13 = '$sub13', gredspm13='$gred13', kodspm14 = '$sub14', gredspm14='$gred14', kodspm15 = '$sub15', gredspm15='$gred15'";
	$result3.= " WHERE stud_ic='$ic'";

    $result4="UPDATE data_ptmk SET";
	$result4.= " `AGILIRSPM`='$spmnumber', `THNSPM`='$spmyear', `IPTA`='$ipta', `ALIRAN`='$aliran', `KODSPM1`='1103', `GRDSPM1`='$bm', `KODSPM2`='1119', `GRDSPM2`='$bi', `KODSPM3`='1149', `GRDSPM3`='$mt', `KODSPM4`='1149', `GRDSPM4`='$sj', `KODSPM5`='1511', `GRDSPM5`='$pai', `KODSPM6`='1225', `GRDSPM6`='$mo', `KODSPM7`='$sub7', `GRDSPM7`='$gred7', `KODSPM8`='$sub8', `GRDSPM8`='$gred8', `KODSPM9`='$sub9', `GRDSPM9`='$gred9', `KODSPM10`='$sub10', `GRDSPM10`='$gred10', `KODSPM11`='$sub11', `GRDSPM11`='$gred11', `KODSPM12`='$sub12', `GRDSPM12`='$gred12', `KODSPM13`='$sub13', `GRDSPM13`='$gred13', `KODSPM14`='$sub14', `GRDSPM14`='$gred14', `KODSPM15`='$sub15', `GRDSPM15`='$gred15'";
	$result4.= " WHERE NOKP='$ic'";

	if(mysqli_query($dbconfig, $result3) == TRUE){
        $results4 = mysqli_query($dbconfig, $result4);
        if($results4 == TRUE){
    
        // echo $sql;
         echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_academic_degree.php';</script>";
    }

     else{
        echo "ERROR: Hush! Sorry $result3. " 
            . mysqli_error($dbconfig);
    }
    
    mysqli_close($dbconfig);
}
?>