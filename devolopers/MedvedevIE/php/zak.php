<?php
 
//Определение переменных с данными
  $naime = filter_var(trim($_POST['naime']), FILTER_SANITIZE_STRING);
  $opi = filter_var(trim($_POST['opi']), FILTER_SANITIZE_STRING);
  $paboti = filter_var(trim($_POST['raboti']), FILTER_SANITIZE_STRING);
  $foto = filter_var(trim($_POST['foto']), FILTER_SANITIZE_STRING);

  echo $naime;

/**Подключение к БД и внесение данных
$mysql=new mysqli("localhost", "admin", "589634", "go");
$mysql->query("INSERT INTO `zakaz` (`naime`, `opi`, `raboti`, `foto`) VALUES('$naime', '$opi', '$raboti', '$foto')");
// закрываем подключение к БД
$mysql->close();

header('location: ../admin.html')*/

?>