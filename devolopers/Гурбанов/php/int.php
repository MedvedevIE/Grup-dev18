<?php
//определение переменных
$login = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

//шифрование
$pass = md5($pass."ratatu");

//подключение к БД и поиск
$mysql = new mysqli("localhost", "admin", "589634", "go");
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "Нет в базе данных";
    exit();
}
//Жизнь куки файла
setcookie('user', $user['name'], time() + 3600);
//Закрытие соединения с БД
$mysql->close();
header('location: ../index.html')
?> 