<?php 
$login = filter_var(trim($_POST['login']), FILTER_SANITAZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITAZE_STRING);
//Шифрование
$pass = md5($pass."ratatu");
// Подключение к бд и поиск
$mysql=new mysqli("localhost","admin","589634","go");
$result =$mysql->query("SELECT * FROM 'users' WHERE 'login'='$login' AND 'pass' ='$pass'");
$user = $result->fetch_assoc();
if (count($user)==0){
    echo "Нет в базе данных";
    exit();
}
//Жизнь куки файла
setcookie('user', $user['name'], time()+3600);
//закрытие соеденения с БД
$mysql->close();
header('location: ../index.html');
?>