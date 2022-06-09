
<?php
include('talum.php');

$rrr=$_GET['id'];
// $sss=$_SESSION['SESS_PRO_PIC'];
$filename=$rrr;
// $date = date('m/d/Y h:i:s a', time());
header('Content-type: Uploaded_Files');
header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
readfile($filename);
// $update=mysql_query("INSERT INTO log (downloaby, filename, date)
// VALUES
// ('$sss','$filename','$date')");
?>