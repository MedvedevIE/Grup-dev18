<?php

$userndname = filter_var(trim($_POST["userndname"]), FILTER_SANITIZE_STRING);
$userfname = filter_var(trim($_POST["userfname"]), FILTER_SANITIZE_STRING);
$username = filter_var(trim($_POST["username"]), FILTER_SANITIZE_STRING);
$userpass = filter_var(trim($_POST["userpass"]), FILTER_SANITIZE_STRING);
$usertell = filter_var(trim($_POST["usertell"]), FILTER_SANITIZE_STRING);
$userdb = filter_var(trim($_POST["userdb"]), FILTER_SANITIZE_STRING);

if (mb_strlen($username) < 5 || mb_strlen($username) > 50) {
    echo "Не соответствует логин";
    exit();
}

$userpass = md5($userpass."pinus");

$mysql = new mysqli("localhost", "admin", "12345", "kobin");
$mysql->query("INSERT INTO `users` (`userndname`, `userfname`, `username`, `userpass`, `usertell`, `userdb`) VALUES('$userndname', '$userfname', '$username', '$userpass', '$usertell', '$userdb')");

$mysql->close();

header('location: ../index.html');

?>


