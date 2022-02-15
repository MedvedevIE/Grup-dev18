<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITAZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITAZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITAZE_STRING);


if (mb_strlen($login) < 5 || mb_strlen($login) > 50) {
    echo "Не соответствует логин";
    exit();
}
$pass = md5($pass."ratata");

$mysql=new mysqli("localhost","admin","589634","go");
$mysql->query("INSERT INTO `users` (`login`,`pass`,`email`) VALUES('$login', '$pass', '$email')");
$mysql->close();
header('location: ../index.html');

?>