<?php
	
//DB connect
$host = '127.0.0.1';
$user = 'root';
$pw = '!As092212';
$dbName = 'managetic';
$mysqli = new mysqli($host, $user, $pw, $dbName);

//login parameter
$name = $_POST['name'];
$id = $_POST['id'];
$pw = $_POST['password'];
$email_1 = $_POST['email_1'];
$email_2 = $_POST['email_2'];
$phone_1 = $_POST['phone_number_1'];
$phone_2 = $_POST['phone_number_2'];
$phone_3 = $_POST['phone_number_3'];
$person_1 = $_POST['person_number1'];
$person_2 = $_POST['person_number2'];

//table row 생성
$sql = "insert into `user` (`name`, `id`, `pw`, `eamil`, `phoneNumber`, `adrassNumber`)";
$sql = $sql. "values ('$name', '$id', '$pw', '$email_1@$email_2', '$phone_1-$phone_2-$phone_3', '$person_1-$person_2);";
if($mysqli->query($sql)){
	echo("<script language = javascript>location.href='../index.html';</script>");	
}else{
	echo "로그인 실패";
	mysql_error($sql);
}

?>
