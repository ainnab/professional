<?php 
include 'talum.php';
session_start();
$ic=$_SESSION['ic'];

$namep1 = strtoupper($_POST['namep1']);
$icp1 = $_POST['icp1'];
$nationp1 = $_POST['nationp1'];
$emailp1 = $_POST['emailp1'];
$phonep1 = $_POST['phonep1'];
$marp1 = $_POST['maritalp1'];
$racep1 = $_POST['racep1'];
$relp1 = $_POST['religionp1'];
$relatp1 = $_POST['relationp1'];
$nookup1 = $_POST['nookup1'];
$namep2 = strtoupper($_POST['namep2']);
$icp2 = $_POST['icp2'];
$nationp2 = $_POST['nationp2'];
$emailp2 = $_POST['emailp2'];
$phonep2 = $_POST['phonep2'];
$marp2 = $_POST['maritalp2'];
$racep2 = $_POST['racep2'];
$relp2 = $_POST['religionp2'];
$relatp2 = $_POST['relationp2'];
$nookup2 = $_POST['nookup2'];
$hhold = $_POST['household'];
$inc = $_POST['income'];


	$result2="UPDATE parent SET";
    $result2.= " p1_name ='$namep1', p1_ic='$icp1', p1_nation='$nationp1', p1_email='$emailp1', p1_phone='$phonep1', p1_marital='$marp1', p1_race='$racep1', p1_religion='$relp1', p1_relation='$relatp1', p1_nooku='$nookup1', p2_name ='$namep2', p2_ic='$icp2', p2_nation='$nationp2', p2_email='$emailp2', p2_phone='$phonep2', p2_marital='$marp2', p2_race='$racep2', p2_religion='$relp2', p2_relation='$relatp2', p2_nooku='$nookup2', household='$hhold', income='$inc'";
	$result2.= " WHERE stud_ic='$ic'";

    $result3="UPDATE data_ptmk SET";
    $result3.= " NAMAKPBP_JPN ='$namep1', NOKPBP='$icp1', WARGABP_JPN='$nationp1', TELBIMBITIBP='$phonep1', KAUMBP_JPN='$racep1', AGAMABP_LAHIR='$relp1', PERTALIANBP='$relatp1', NOOKUBP='$nookup1', NAMAKPIB_JPN ='$namep2', NOKPIB='$icp2', WARGAIB_JPN='$nationp2', KAUMIB_JPN='$racep2', AGAMAIB_LAHIR='$relp2', PERTALIANIB='$relatp2', NOOKUIB='$nookup2', TANGGUNG='$hhold', PDAPATK='$inc', NOKPBP_LAHIR='$icp1', NAMABP_LAHIR='$namep1', WARGABP_LAHIR='$nationp1', KAUMBP_LAHIR='$racep1', NOKPIB_LAHIR='$icp2', NAMAIB_LAHIR='$namep2', WARGAIB_LAHIR='$nationp2', KAUMIB_LAHIR='$racep2'";
	$result3.= " WHERE NOKP='$ic'";
    ///////ERRORR SQL

	//$res2=mysqli_query($dbconfig, $result);
    if(mysqli_query($dbconfig, $result2) == TRUE){
        $results3 = mysqli_query($dbconfig, $result3);
        echo "<script type='text/javascript'>alert('Data Update Successfully!'); window.location.href = 'tab_parent.php';</script>";

    } else{
        echo "ERROR: Hush! Sorry $result2. " 
            . mysqli_error($dbconfig);
    }

    mysqli_close($dbconfig);
   
?>