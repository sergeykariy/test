<?php
session_start();
$name_id = session_id();
$a = "receiveData".$name_id.".csv";

if(unlink($a)){
	echo "Файл $a удалён, вы будите перенаправлены на главную страницу <br>";
	echo "Сессия удалена $name_id";
	session_destroy();
	
	header("refresh: 10; test.php");
}else{
	echo "ошибка <br>";
	echo "<a href=$_SERVER[HTTP_REFERER]>Назад</a>";
}

?>