<?php
$host = "localhost";
$database = "companydb";
$user = "root";
$passwort = "";

$link = mysqli_connect($host,$user,$passwort) or die ("could not connect");
$connect2 = mysqli_select_db($link,$database) or die ("could not select");

//print_r($_POST['var_array']);
$splitting  = $_POST['var_array'];
$splitted = explode(':"', $splitting);
$split_firstval = explode('",', $splitted[1])[0];
$split_secval = explode('"',$splitted[2])[0];
$split_thirdval = explode('"',$splitted[3])[0];
print_r("departman:");
print_r($split_firstval);//dept
print_r("maaş:");
print_r($split_secval); //salary
print_r("isim:");
print_r($split_thirdval);


print_r("departman : ");
			/*	$namequery = "SELECT dptname FROM department";
				$nameres = mysqli_query($link,$namequery);
				$updatevalues = mysqli_fetch_assoc($nameres);*/
			//	print_r($nameres);
				$qdep = "SELECT * FROM department";
				$qres = mysqli_query($link,$qdep);
				//$values2 = mysqli_fetch_assoc($res2);
				while ($row = mysqli_fetch_assoc($qres)) {
				print_r($row['depname']);
				}
//if firstval = DEPARTMENT firstval = dptname    if firstval = SALARY firstval = salary;



/*if ($split_firstval == "DEPARTMENT") {
	$split_firstval = "dptname"; */
	$textbox_query = 'UPDATE `employee` SET `dptname` ="'.$split_firstval.'", `salary`="'.$split_secval.'" WHERE `employee`.`empname` = "'.$split_thirdval.'"';
//	$textbox_query = "UPDATE `employee` SET `salary` = '".$split_secval."' WHERE `employee`.`empname` = 'burak.yahsi'";//çalıştı
	$tb_res = mysqli_query($link,$textbox_query);
	
	//$updatevalues = mysqli_fetch_assoc($tb_res);
/*	$tb_values = mysqli_fetch_assoc($tb_res);
	$tb_values = $tb_values['dptname'];
	//$num_rows1 = $values['total1'];
	echo json_encode($tb_values['dptname']);*/
//} elseif ($split_firstval == "SALARY") {
/*	$textbox_query = "SELECT salary FROM employee WHERE empname = '".$split_secval."'";
	$split_firstval = "salary";
	$tb_res = mysqli_query($link,$textbox_query);
	$tb_values = mysqli_fetch_assoc($tb_res);
	$tb_values = $tb_values['salary'];
	//$num_rows1 = $values['total1'];
	echo json_encode($tb_values['salary']);*/
//}
//print_r($split_firstval);
//print_r($splitted);

//$textbox_query = "SELECT COUNT(empid) AS total1 FROM pro_emp WHERE empid = '1'";

//print_r($tb_values);
/*session_start();

$_SESSION['tb_text'] = $tb_values;*/
//$_SESSION['empname'] = $split_secval;



//$expectedname; bu where komutunda yazılacak olan isim	
//$firstdropval; bu değiştirilecek kolon adı
//header ("Location: index.php");
?>
