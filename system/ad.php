<?php
//тут сессия продалжаеться 
session_start();

//функция перехвата ошибки и отправки 
function user_error_form($user_error, $time = 10, $put = 'test.php'){
		echo $user_error;
		return header("refresh: $time; $put");
}
//перехватываем id сессии
$name_id = session_id();

//данные с формы, удалем возможные теги


$fld_INN = strip_tags($_POST['fld_INN']);
$fld_ADRESS = strip_tags($_POST['fld_ADRESS']);
$fld_AREA = strip_tags(abs($_POST['fld_AREA'])); //только положительное число
$fld_PERIOD = $_POST['fld_PERIOD12'];
$fld_SUM = strip_tags($_POST['fld_SUM']); //только положительное число нужно использоватьфункции abs
$fld_DATE = date("m.d.y"); 


//проверка
if(is_numeric($fld_INN)){
	 if(is_numeric($fld_SUM)){
		if(is_numeric($fld_AREA) != 0){
		
		}else{
			user_error_form("Ошибка: похоже вы ввели текст что-то в поле площадь, вы будите перенаправлены для повторного заполнения формы");	
		return header("refresh: 5; test.php");
		}
	 }else{
		user_error_form("Ошибка: похоже вы ввели текст что-то в поле суммы, вы будите перенаправлены для повторного заполнения формы");	
		return header("refresh: 5; test.php");
	 }
}else{
	user_error_form("Ошибка: ИНН состоит из числел а не текста, вы будите перенаправлены для повторного заполнения формы");
	return header("refresh: 5; test.php");
}
echo $fld_SUM;

$aa = (string)$fld_INN;

$strLength = iconv_strlen($aa);

//var_dump($_POST);
//echo $per;
$f_area = number_format($fld_AREA, 2, ',', ' '); //форматирования числа с разделением групп
$f_sum = number_format($fld_SUM, 2, ',', ' '); //форматирования числа с разделением групп

if ($strLength == 12){
	
}
else{	
		user_error_form("Ошибка, вы ввели символов: $strLength, а нужно 12 символов в ИНН, вы будите перенаправлены на страницу для повторного заполнения",10);
			return header("refresh: 5; test.php");
}

//даём имя файлу
$a = "receiveData".$name_id.".csv";

//массив с данными из формы
$list = array(
	array('ИНН', $fld_INN),
	array('Адрес торгового объекта', $fld_ADRESS),
	array('Площадь торгового объекта', $f_area),
	array('Сумма уплаченного сбора', $f_sum),
	array('Период (квартал), за который произведена оплата', $fld_PERIOD[0]),
	array('Дата осуществления платежа', $fld_DATE),
);

//запись в файл

$fp = fopen("/test/file/$a",'a+');
foreach($list as $fi){
	fputcsv($fp, $fi);
}

//закрываем соединение
fclose($fp);

//header("refresh: 4; user.php?".session_name().'='.session_id());
?>