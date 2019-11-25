<?php



$email= filter_var(trim($_POST["email"]));
$password = filter_var(trim($_POST["password"]));


$password=md5($password."pass");//хеширование пароля

$mysql = new mysqli("HM13", "root", "", "regis");



$result = $mysql->query("select * from users where `email` = '$email' and `password` = '$password'");

$user = $result->fetch_assoc();
if(count($user)==0){
	echo "NOT FOUND";
	exit();
}
// print_r($user);
// exit();

setcookie('user', $user['login'], time() + 3600, "/");
//print_r($_COOKIE);


$mysql->close();

header('Location: /');

?>