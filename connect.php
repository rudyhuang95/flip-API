<?php 
$db = '127.0.0.1';
$dbUser = "root";
$dbPass = "";
$dbName = "test";

$dbHandle = mysqli_connect($db, $dbUser, $dbPass) or die("Cant connect $server");

$dbSelected = mysqli_select_db($dbHandle, $dbName) or die("Can't open $dbName");
?>

