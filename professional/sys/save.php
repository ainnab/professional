<?php 
include 'talum.php';
session_start();
$ic=$_SESSION['ic'];
$id = $_POST['name'];
$email = mysqli_real_escape_string(strtoupper($_POST['email']));
$phone = $_POST['phone'];
$home = $_POST['hometel'];
$nation = $_POST['nation'];
$pob = $_POST['pob'];
$gen = $_POST['gender'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$mar = $_POST['marital'];
$race = $_POST['race'];
$rel = $_POST['religion'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$city = $_POST['city'];
$postcode = $_POST['postcode'];
$state = $_POST['state'];
$nooku = $_POST['nooku'];
$okutype = $_POST['okutype'];

$namep1 = $_POST['namep1'];
$icp1 = $_POST['icp1'];
$nationp1 = $_POST['nationp1'];
$emailp1 = $_POST['emailp1'];
$phonep1 = $_POST['phonep1'];
$marp1 = $_POST['maritalp1'];
$racep1 = $_POST['racep1'];
$relp1 = $_POST['religionp1'];
$relatp1 = $_POST['relationp1'];
$nookup1 = $_POST['nookup1'];
$namep2 = $_POST['namep2'];
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

$bm = $_POST['grade'];

	$result="UPDATE student AS a, parent AS b, qualification_info AS c SET";
	$result.= " a.stud_name='$id', a.stud_email='$email', a.stud_phone='$phone', a.stud_home='$home', a.stud_nation='$nation', a.pob='$pob', a.gender='$gen', a.age='$age', a.dob='$dob', a.marital='$mar', a.stud_race='$race', a.stud_religion='$rel', a.add1='$add1', a.add2='$add2', a.city='$city', a.postcode='$postcode', a.state='$state', a.nooku='$nooku', a.okutype='$okutype',";
	$result.= " b.p1_name ='$namep1', b.p1_ic='$icp1', b.p1_nation='$nationp1', b.p1_email='$emailp1', b.p1_phone='$phonep1', b.p1_marital='$marp1', b.p1_race='$racep1', b.p1_religion='$relp1', b.p1_relation='$relatp1', b.p1_nooku='$nookup1',b.p2_name ='$namep2', b.p2_ic='$icp2', b.p2_nation='$nationp2', b.p2_email='$emailp2', b.p2_phone='$phonep2', b.p2_marital='$marp2', b.p2_race='$racep2', b.p2_religion='$relp2', b.p2_relation='$relatp2', b.p2_nooku='$nookup2', b.household='$hhold', b.income='$inc',";
	$result.= " c.kodspm1 = '$bm'";
	$result.= " WHERE a.stud_ic='$ic'";

	$res2=mysqli_query($dbconfig, $result);
   
?>