<?php
session_start();

$name_id = session_id();
$a = "receiveData".$name_id.".csv";


//print_r($csv);


?>
<html>
<head>
<title>Форма заполнения</title>
<link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
</head>
<body>
<div class="content">
<div class="heder">
<ul class="sqq">
<li><a href=<?php echo $a ?> class="xzz">Скачать файл</a></li>
<li><a href="delete.php" class="xzz">Удалить файл</a></li>
<li><a href="test.php" class="xzz">Провести оплату ещё раз</a></li>
<li><a href="rtf.php" class="xzz">Скачать отчёт</a></li>
</ul>
</div>
<br>
<div class="cont">
<h1>Информация о платеже</h1>
<table border=1 class="tab">
<?php

$row = 1;
if (($handle = fopen("../file".$a, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {

	?>

	<tr>
		<td><?php echo $data[0]; ?></td>
		<td><?php echo $data[1]; ?></td>
	</tr>


<?php

    }

    fclose($handle);
	
}
?>

</table>
</div>
1
<br>

</div>
</div>
</body>
</html>