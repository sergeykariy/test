<?php
session_start();
$name_id = session_id();
$a = "receiveData".$name_id.".csv";

if(unlink($a)){
	echo "���� $a �����, �� ������ �������������� �� ������� �������� <br>";
	echo "������ ������� $name_id";
	session_destroy();
	
	header("refresh: 10; test.php");
}else{
	echo "������ <br>";
	echo "<a href=$_SERVER[HTTP_REFERER]>�����</a>";
}

?>