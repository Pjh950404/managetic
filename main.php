<?php
	session_start();
	include("php/dbcon.php");	
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>매너제틱</title>
		<link rel="stylesheet" type="text/css" href="css/font.css"> <!--폰트정의 css-->
		<link rel="stylesheet" type="text/css" href="css/header.css"> <!--header부분, body속성 설정-->
		<link rel="stylesheet" type="text/css" href="css/login_form.css"> <!--login폼 css-->
	</head>
	<body>
		<header>
			<div>
				<a href="login.html"><img src="img/logo.png" class="header_logo_img"><a/>
				<ul>
					<li><a href="php/logout.php">로그아웃</a></li>
					<li><a href="mypage.php">마이페이지</a></li>
					<li><a href="mypage.php"><?php echo(iconv('EUCKR', 'UTF8', $_SESSION['user_name']));?>님</a></li>
				</ul><br>
			</div>
		</header>
		<div id="footer">
        <br/> Copyright ©  Corp. All rights reserved.<font color="blue">김윤엽</font>
        </div>
	</body>
</html>
