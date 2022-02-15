<?php

$username = filter_var(trim($_POST["username"]), FILTER_SANITIZE_STRING);
$userpass = filter_var(trim($_POST["userpass"]), FILTER_SANITIZE_STRING);

$userpass = md5($userpass."pinus");

$mysql = new mysqli("localhost", "admin", "12345", "kobin");
$result = $mysql->query("SELECT * FROM `users` WHERE `username` = '$username' AND `userpass` = '$userpass'");
$user = $result->fetch_assoc(); 

if (count($user)==0) {
    echo "Нет в базе данных";
    exit();
}
setcookie('user', $user['name'], time()+3600);

$mysql->close();
header('location: ../index.html');

?>
