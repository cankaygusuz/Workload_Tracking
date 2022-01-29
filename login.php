<?php

$host = "localhost";
$database = "companydb";
$user = "root";
$passwort = "";

$link = mysqli_connect($host,$user,$passwort) or die ("could not connect");
$connect2 = mysqli_select_db($link,$database) or die ("could not select");

$infos  = $_POST['info'];

$mail_ = explode('_', $infos)[0];
$mail = explode('"', $mail_)[1];
$psw_ = explode('_', $infos)[1];
$psw = explode('"', $psw_)[0];


?>