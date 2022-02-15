<?php
//определение переменных с данными
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

//Проверка на длинну логина
if (mb_strlen($login) < 5 || mb_strlen($login) > 50) {
    echo "Не правильный логин";
    exit();
}

//Шифрование пароля
$pass = md5($pass."trataty");

//Подключение к БД
$mysql=new mysqli("localhost", "Ivan", "589634", "reg");
$mysql->query("INSERT INTO `users` (`login`, `pass`, `email`) VALUES('$login', '$pass', '$email')");

//закрываем подключение к БД
$mysql->close();

header('location: ../index.html');
?>