<?php
$host = "localhost";
$database = "companydb";
$user = "root";
$passwort = "";

$link = mysqli_connect($host,$user,$passwort) or die ("could not connect");
$connect2 = mysqli_select_db($link,$database) or die ("could not select");
$del_id  = $_POST['del_id'];


$deletecode = "DELETE from employee WHERE empid='".$_GET['del_id']."'";
$deleteres = mysqli_query($link,$deletecode);
$deletevalues = mysqli_fetch_assoc($deleteres);
header ("Location: index.php");


?>