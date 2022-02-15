<?php
// определение переменных с данными
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

// проврка на длину логина
if (mb_strlen($login) < 3 || mb_strlen($login) > 50) {
    echo "Не соответсвует логин";
    exit();
}

// шифрование пароля
$pass = md5($pass."dvarf");

//подключение к бд
$mysql=new mysqli("localhost", "yura", "130402", "go");
$mysql->query("INSERT INTO `users` (`login`,`pass`,`email`) VALUES('$login','$pass','$email')");

//закрываем подключение к бд
$mysql->close();

header ('location: ../html/admin.html');
?>