<?php 	
	session_start();
	include("php/dbcon.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>매너제틱</title>
		<script>
			function mppw(){
			var pw = '<?php echo($_SESSION['user_pw']); ?>'
			if((document.getElementById("pw").value=="") || (document.getElementById("pw_check").value=="")){
				alert("개인정보를 수정하시려면 비밀번호를 입력해주세요.");
			}
			else if(document.getElementById("pw").value != document.getElementById("pw_check").value){
					alert("비밀번호와 비밀번호확인이 일치하지않습니다.");
				}
			else{
				alert("저장되었습니다. ");
				document.getElementById("save_btn").submit();
			}
			}

			
		</script>
		<link rel="stylesheet" type="text/css" href="css/font.css"> <!--폰트정의 css-->
		<link rel="stylesheet" type="text/css" href="css/header.css"> <!--header부분, body속성 설정-->
		<link rel="stylesheet" type="text/css" href="css/mypage.css"> <!--login폼 css-->
	</head>
	<body>
		<header>
			<div>
				<a href="index.php"><img src="img/logo.png" class="header_logo_img"><a/>
				<ul>
					<li><a href="php/logout.php">로그아웃</a></li>
					<li><a href="register.html">포트폴리오</a></li>
					<li><a href="mypage.php"><?php echo(iconv('EUCKR', 'UTF8', $_SESSION['user_name']));?>님</a></li>
				</ul><br>
			</div>
		</header>
		<main>
				<h2>마이페이지</h2>	
				<div class="user_profile_img">
					<form action="php/mypage_save.php" method="post" name="">
						<table border="0">
							<tr><td rowspan="4"><img src="" alt=""></td><td height="37.5">이름</td><td><input type="text" size="13px" name="" 
							value=<?php echo(iconv('EUCKR', 'UTF8', $_SESSION['user_name'])); ?>></td></tr><!--중복확인-->
							<tr><td height="37.5">아이디</td><td><input type="text" size="13px" name=""
							value=<?php echo($_SESSION['user_id']); ?>></td></td></tr>
							<tr><td height="37.5">비밀번호</td><td><input type="password" size="13px" name="" id="pw"
							value=""></td></tr>
							<tr><td height="37.5">비밀번호 확인</td><td><input type="password" size="13px" name="" id="pw_check"
							value=""></td>
							<tr><td><input type="file" class="input_file"></td><td></td><td></td><!--파일 올리기버튼-->
							<tr><td>이메일</td><td><input type="text"size="13px" name="" placeholder="e-mail">@</td><td><input type="text" size="13px" name="" 										placeholder="직접입력"></td>
							<tr><td>연락처</td><td colspan="2"><input type="text" size="4px" maxlength="3" name="" value=<?php echo(substr($_SESSION['user_phone'],0,3));?>>-
							<input type="text" size="4px" maxlength="4" name="" value=<?php echo(substr($_SESSION['user_phone'],4,7));?>>-<input type="text" size="4px" 							maxlength="4" name="" value=<?php echo(substr($_SESSION['user_phone'],9,13));?>>
							<tr><td>주민등록번호</td><td colspan="2"><input type="text" size="10" name="" value=<?php echo(substr($_SESSION['user_person'], 0, 6)); ?>>-
							<input type="password" size="10" name="" value=<?php echo(substr($_SESSION['user_person'], 8, 14)); ?>></td></tr>
						</table>
						<input type="button" value="저장" onclick="mppw()" id="save_btn">
					</form>
				</div>
				
		</main>
		<div id="footer">
        <br/> Copyright ©  Corp. All rights reserved.<font color="blue">김윤엽</font>
        </div>
	</body>
</html>
