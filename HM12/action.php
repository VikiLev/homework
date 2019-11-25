<?php


$username1 = filter_var(trim($_POST["username1"]));
$username2= filter_var(trim($_POST["username2"]));
$username3= filter_var(trim($_POST["username3"]));
$email= filter_var(trim($_POST["email"]));

if ($_POST["password"] == $_POST["password2"]) $password = filter_var(trim($_POST["password"]));
else echo "Passwords do not match";
$login = filter_var(trim($_POST["login"]));

$password=md5($password."pass");//хеширование пароля

$mysql = new mysqli("HM13", "root", "", "regis");
$mysql->query("insert into users (username1, username2, username3, email, password, password2, login) values
	('$username1', '$username2', '$username3', '$email', '$password', '$password2', '$login')");

$mysql->close();

header('Location:/');





?>





	