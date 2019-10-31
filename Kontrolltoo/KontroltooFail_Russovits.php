<!DOCTYPE html>
<html>
<head>
	<title>Контрольная работа 3</title>
</head>
<body>
<?php
$fam = ["Семёнов", "Жуков" , "Сидорова" , "Агеева"];
?>
<h1>Успеваемость</h1><br>
<hr>
<form method="post">
	<p>
		Выбор ученика или ученицы:<br>
	</p>
	<select name = "Familiya">
		<option value="Семёнов">Семёнов</option>
		<option value="Жуков">Жуков</option>
		<option value="Сидорова">Сидорова</option>
		<option value="Агеева">Агеева</option>
	</select>

<p>
	Выбор оценки:<br>
</p>
	<select name="Otsenki">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
<input type="submit" name="message-button" value="Отправить">	
</form>

<?php
if(isset($_POST['message-button'])){
	$Familiya = $_POST['Familiya'];
	$Otsenki = $_POST['Otsenki'];
	$line = "$Familiya|$Otsenki \n";
	echo "<br>";
	file_put_contents("ekzamen.txt", $line,FILE_APPEND);
}

$file = file("ekzamen.txt");
foreach ($file as $line) {
	$info = explode('|',$line);
	echo $info[0], "<br>", $info[1],"<br />";
}
?>
<hr>

<h1>Каталог городов</h1>

<ul>
	<li>Харьюмаа</li>
	<li>Тартумаа</li>
	<li>Пярнумаа</li>
	<li>Ида-Вирумаа</li>
	<li>Ярвамаа</li>
</ul>
<?php
$fp = fopen('estonia_town.txt', 'r');
echo $fp;
?>
ыа
</body>
</html>