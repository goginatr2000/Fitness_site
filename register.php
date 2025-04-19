<?php
require_once('db.php');
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repeat = $_POST['repeatpass'];


$sql = "INSERT INTO `users` (login,email,pass) VALUES ('$login','$email', '$pass')"; 

$conn -> query($sql);
