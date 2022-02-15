<?php

// Определение переменных с данными
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

// Шифрование пароля
$pass = md5($pass."dvarf");

// Подключение к БД и поск
$mysql = new mysqli("localhost", "yura", "130402", "go");
$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' and `pass`='$pass'");
$user = $result->fetch_assoc();

// Проверка 
if (count($user)==0) {
  echo "Пользователь не найден";
  exit();
}

// Жизнь куки файла
setcookie('user', $user['name'], time()+3600);

// Закрытия соединения c БД
$mysql->close();
header ('location: ../html/admin.html');

?>