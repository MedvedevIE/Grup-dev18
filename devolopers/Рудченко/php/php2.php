<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password."paketik");

$mysql =new mysqli("localhost", "Ruslan", "25-Zcneltyn", "goat");
$result =$mysql->query("SELECT * FROM 'users' WHERE 'login'='$login' AND 'password' ='$password' ");
$user = $result->fetch_assoc();
if (count($user)==0){
    echo "Такого пользователя не существует";
    exit();
}

setcookie('user', $user['name'], time()+3600);

$mysql->close();
header('location: ../admin.html')
?>