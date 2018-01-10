<html>
	<head>
		<meta charset="utf-8">
		<style>
			table{border: 1px solid gray;}
			td,th{border:1px solid gray; padding: 4px;}
		</style>
	</head>
	<body>
		<?php
                        //DB connect
			$host = '127.0.0.1';
			$user = 'root';
			$dbpw = '!As092212';
			$dbName = 'managetic';
			$mysqli = new mysqli($host, $user, $dbpw, $dbName);
			
			$result = mysqli_query($mysqli, "SELECT * FROM user");
			echo "<table><tr><th>이름</th><th>아이디</th><th>비밀번호</th><th>이메일</th><th>전화번호</th>";
			while($rows = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$rows['name']."</td>";
				echo "<td>".$rows['id']."</td>";
				echo "<td>".$rows['pw']."</td>";
				echo "<td>".$rows['email']."</td>";
				echo "<td>".$rows['phoneNumber']."</td>";
				echo "</tr>";
			}
			echo "</table>";
			mysqli_close($mysqli);
			?>
	</body>
