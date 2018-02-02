<html>
  <head>
    <meta charset="UTF-8">
  </head>

  <body>
    <?php
	session_start();
	include("dbcon.php");

    //login parameter
    $name = $_POST['name'];
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $email_1 = $_POST['email_1'];
    $email_2 = $_POST['email_2'];
    $phone_1 = $_POST['phone_1'];
    $phone_2 = $_POST['phone_2'];
    $phone_3 = $_POST['phone_3'];
    $person_1 = $_POST['person_1'];
    $person_2 = $_POST['person_2'];
    //table row
    	
    mysqli_query($mysqli, "set session character_set_connection=utf8;");
    mysqli_query($mysqli, "set session character_set_results=utf8;");
    mysqli_query($mysqli, "set session character_set_client=utf8;");

	$sql = "UPDATE `user` SET name='$name', id='$id', phoneNumber='$phone_1-$phone_2-$phone_3', personNumber='$person_1-$person_2' WHERE pw='$pw';";	
	//update `user` SET name='2yad', id='dbsduq9d655', email=dbsduq9655@naver.coms WHERE pw='as092212';
    if($mysqli->query($sql)){
    	echo("<script>location.href='../main.php';</script>");
    }else{
    	echo "저장실패";
    }
    mysqli_close($mysqli);
    ?>
  </body>
</html>

