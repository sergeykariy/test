<?php
session_start(); //так надо
?>
<html>
<head>
<title>Форма заполнения</title>
<link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
</head>
<body>
<div class="content">
<div class="heder">
<ul>
<li>Текст1</li>
<li>Текст2</li>
<li>Текст3</li>
<li>whweu3</li>
</ul>
</div>
<br>
<form method=POST action="system/ad.php">
<div class="cont">


<h1>Данные плательщика</h1>
<table>
<tr>
<td class="ffg"><p>ИНН</p></td>
<td><input type="text" name="fld_INN"></td>
</tr>
</table>


</div>
<br>

<div class="cont">

<h1>Данные объекта</h1>
<table>
<tr>
<td><p>Адрес торгового объекта</p></td>
<td><input type="text" name="fld_ADRESS"></td>
</tr>
<tr>
<td><p>Площадь торгового объекта</p></td>
<td><input type="text" name="fld_AREA"></td>
</tr>
</table>


</div>
<br>

<div class="cont">

<h1>Данные платежа</h1>
<table>
<tr>
<td><p>Сумма уплаченного сбора</p></td>
<td><input type="text" name="fld_SUM"></td>
</tr>
<tr>
<td><p>Период (квартал), за который произведена оплата</p></td>
<td>
  <p><select size="1"  name="fld_PERIOD12[]">
    <option value="2015 год - 1 квартал">2015 год - 1 квартал</option>
    <option value="2015 год - 2 квартал">2015 год - 2 квартал</option>
    <option value="2016 год - 1 квартал">2016 год - 1 квартал</option>
	<option value="2016 год - 2 квартал">2016 год - 2 квартал</option>
	<option value="2017 год - 1 квартал">2017 год - 1 квартал</option>
	<option value="2017 год - 2 квартал">2017 год - 2 квартал</option>
	<option value="2018 год - 1 квартал">2018 год - 1 квартал</option>
	<option value="2018 год - 2 квартал">2018 год - 2 квартал</option>
	<option value="2019 год - 1 квартал">2019 год - 1 квартал</option>
	<option value="2019 год - 2 квартал">2019 год - 2 квартал</option>
	<option value="2020 год - 1 квартал">2020 год - 1 квартал</option>
	<option value="2020 год - 2 квартал">2020 год - 2 квартал</option>
   </select></p>
</td>
</tr>
 
</table>
<br>

</div>
<br>
<div class="cont">
<table class="as">
<tr>
<td>
<input type="SUBMIT" class="click" value="Выполнить">
</td>
<td>
<input type="SUBMIT" class="click1" value="Очистить">
</td>
</tr>
<table>
</div>

</form>
</div>
</body>
</html>
