<?php
//Определение переменных
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

//Шифрование
$pass = md5(pass."pizd");

//Подключение к БД
$mysql = new mysqli("localhost", "admin", "589634", "go");
$result =$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass` = '$pass' ");
$user = $result->fetch_assoc();
if (count($user)==0){
    echo "Нету в БД";
    exit();
}

//Жизнь куки файла
setcookie('user', $user['name'], time()+3600);

//Закрываем соединение с БД
$mysql->close();
header('location: ../Admin.html');

?>