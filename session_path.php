<?php
include 'config.php';
$path = $_SESSION['path'];
$res = mysqli_query($dbconfig,  "SELECT * FROM mdl_course_categories cc INNER JOIN mdl_context cx ON cc.id = cx.instanceid INNER JOIN mdl_role_assignments ra ON cx.id = ra.contextid INNER JOIN mdl_role r ON ra.roleid = r.id INNER JOIN mdl_user usr ON ra.userid = usr.id where cc.path='$path'");
while( $row = mysqli_fetch_array($res))
{
$pathid = $row['path'];
//$status =$row['user_status'];
}
 ?>
