<?php 
require "database.php";
global $pdo;
$login = filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$name = filter_var(trim($_POST['Full_name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."thisisforhabr"); // Создаем хэш из пароля

$mysql = new mysqli('localhost', 'root', '', 'wildtex');
$result1 = $mysql->query("SELECT * FROM `client` WHERE `Email` = '$login'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}


if (isset($_POST["upload"])){
    $img_type = substr($_FILES['img']['type'],0,5);
    if(!empty($_FILES['img']['tmp_name']) and $img_type == 'image' and $_FILES['img']['type'] == "image/jpeg"){
        $img = file_get_contents($_FILES['img']['tmp_name']);
        $name = randomString();
        $mysql->query("INSERT INTO `client`(`Email`,`Full_name`, `pass`,'img') VALUES ('$login','$name', '$pass', '$img')");
$mysql->close();
    }
}

header('Location:/');
exit();
?>