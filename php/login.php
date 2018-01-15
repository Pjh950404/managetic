<html>
	<head>
		<meta charset="utf-8">
	</head>
<body>
<?php
	session_start();
	
	include("dbcon.php");
	
	if(isset($_SESSION['user_name'])){
		echo("<script>location.href='../mypage.php';</script>");
	}	
	
	$id = $_POST['id'];
	$pw = $_POST['pw'];

	$sql = "SELECT * FROM user WHERE id= '$id' AND pw= '$pw'";
	$res = $mysqli->query($sql); 
	$row = $res->fetch_array(MYSQLI_ASSOC);
	
	if($row != null){
		$_SESSION['user_name'] = $row['name'];
		echo ("<script>alert('".$_SESSION['user_name']."님 어서오세요.');</script>");
		echo("<script>location.href='../mypage.php';</script>");
	}
	if($row == null){
		echo "<script>alert('아이디 혹은 비밀번호가 옳바르지 않습니다.');</script>";	
		echo("<script>location.href='../login.html';</script>");
	}
	?>
</body>