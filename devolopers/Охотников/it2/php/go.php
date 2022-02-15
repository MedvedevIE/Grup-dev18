<?php

// определение переменных с данными
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

// Шифрование пароля
$pass = md5($pass."piwpaw");

// Подключение к БД
$mysql=new mysqli("localhost", "roma", "qwer", "go");
$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
$user = $result->fetch_assoc();
if(count($user)==0){
    echo "Пользователь не найден";
    exit();
}

// Жизнь куки файлов
setcookie('user', $user['name'], time()+3600);
// закрываем соединение с БД
$mysql->close();

header('location: ../html/admin.html');
?>