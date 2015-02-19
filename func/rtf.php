<?php
header("Content-type: application/rtf");
header("Content-disposition: attachment; filename=\"Отчет.rtf\"");
session_start();

$name_id = session_id();
$a = "receiveData".$name_id.".csv";
$csv = array_map('str_getcsv', file($a));
echo "Отчет по платежу";
echo "

";
if (($handle = fopen($a, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
	
	echo $data[0]." -  ";
	echo $data[1];
	echo "	
	";
}
    fclose($handle);
}




?>
