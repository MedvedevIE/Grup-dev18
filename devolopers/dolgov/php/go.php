<?php
//Определение переменных с данными
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

//Проверка на длину логина
if (mb_strlen($login) < 5 || mb_strlen($login) > 50) {
    echo "Не соответствует логин";
    exit();
}
//Шифрование пароля
$pass = md5(pass."pizd");
//Подключение к БД
$mysql = new mysqli("localhost", "admin", "589634", "go");
$mysql->query("INSERT INTO `users` (`login`, `pass`, `email`) VALUES ('$login', '$pass', '$email')");
//Закрываем подключение к БД
$mysql->close();

header('location: ../index.html');
?>