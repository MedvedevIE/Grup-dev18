<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 50) {
    echo "Логин не должен превышать 50 символов или быть короче 5 символов";
    exit();
}

$password = md5($password."paketik");

$mysql=new mysqli("localhost", "admin1", "589634", "goat");
$mysql->query("INSERT INTO 'users' ('login', 'password', 'email') VALUES('$login','$password','$email')");

$mysql->close();

header('location: ../index.html')
?>