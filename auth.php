<?php 

$login = filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."forhktkntuhpi"); // Создаем хэш из пароля

$mysql = new mysqli('localhost', 'root', '', 'wildtex');
$result = $mysql->query("SELECT * FROM `client` WHERE `Email` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc(); // Конвертируем в массив
if(count($user) == 0){
	echo "Такой пользователь не найден.";
	exit();
}
else if(count($user) == 1){
	echo "Логин или праоль введены неверно";
	exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location:index-pravda.e.n..html');

 ?>