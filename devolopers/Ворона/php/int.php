<?php
// Определение переменных 
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

// Штфрование пароля 
$pass = md5($pass."ratatu");

// Подключение к БД
$mysql = new mysqli("localhost", "admin", "589634", "go");
$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0){
    echo "Нет в базе данных";
    exit();
}
//Жизнь куки файла
setcookie('user', $user['name'], time() + 3600, "/");
//Закрытие соединение с БД
$mysql->close();
header('location: ../index.php')
?>