<?php

session start();

//DB connect
$host = '127.0.0.1';
$user = 'root';
$pw = '!As092212';
$dbName = 'managetic';
$mysqli = new mysqli($host, $user, $pw, $dbName);

//login parameter
$id = $_POST['id'];
$pw = $_POST['pw'];
?>
