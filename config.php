
<?php
$servername   = "localhost";
$database1 = "ilmu";
$database= 'ilmuplus';
$username = "test";

$password = "";

// Create connection
$dbconfig2 = new mysqli($servername, $username, $password, $database);
$dbconfig = new mysqli($servername, $username, $password,$database1);
?>