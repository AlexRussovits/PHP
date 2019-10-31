<!DOCTYPE html>
<html>
<head>
	<title>Форма регистрации</title>
</head>
<body>
<?php
if(isset($_POST['message_button']))
{
	$name = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$group = $_POST['group'];
	$telnumber = $_POST['telnumber'];
	$line = "$firstname|$lastname|$group|$telnumber \n";
	echo "<br>";
	file_put_contents('dbo.txt',$line,FILE_APPEND);
}

$file = file('edbo.txt');
foreach ($file as $line) {
	$info = explode('|',$line);
	echo $info[0], '<br>', $info[1], '<br>', $info[2], '<br>', $info[3], '<br><br>';
}

?>
<form method="post">
	Введите имя: <br>
	<input type="text" name="firstname"><br><br>
	Введите фамилию: <br>

	<input type="text" name="lastname"><br><br>

	Группа:<br><br>

	<select name="group">
		<option value="JPTVR17">JPTVR17</option>
		<option value="JPTVR18">JPTVR18</option>
		<option value="JPTVR19">JPTVR19</option>
	</select>
	<br><br>
	Телефонный номер:<br><br>
	<input type="text" name="telnumber"><br><br>
	<input type="submit" name="message-button" value="Отправить заявку">
</form>
<hr>

<h2>Тест</h2>

<form method="post">
	Введите имя: <br><br>
	<input type="text" name="fname"><br><br>
	Введите фамилию: <br><br>
	<input type="text" name="lname"><br><br>
	<p>
		1.Столица Эстонии:
	</p>
	<input type="radio" name="town" value="Tallinn">Таллинн
	<input type="radio" name="town" value="Oslo">Осло
	<input type="radio" name="town" value="Riga">Рига
	<input type="radio" name="town" value="Helsinki">Хельсинки
	<p>
		2. Президент Эстонии:
	</p>
	<input type="radio" name="president" value="Kersti Kaljulaid"> Керсти Кальюлайд
	<input type="radio" name="president" value="Vladimir Putin"> Владимир Путин
	<input type="radio" name="president" value="Adolf Hitler"> Адольф Гитлер
	<input type="radio" name="president" value="Vladimir Zelenskiy"> Владимир Зеленский
	<p>
		3. Самый крупный уезд Эстонии:
	</p>
	<input type="radio" name="maakond" value="Harjumaa"> Харьюмаа
	<input type="radio" name="maakond" value="Ida-Virumaa"> Ида-Вирумаа
	<input type="radio" name="maakond" value="Viljandimaa"> Вильяндимаа
	<input type="radio" name="maakond" value="Raplamaa"> Рапламаа
	<p>
		4. Когда была принята независимость Эстонии? :
	</p>
	<input type="radio" name="date" value="28 March 1928"> 28 марта 1928 года
	<input type="radio" name="date" value="14 June 1922"> 14 июня 1922 года
	<input type="radio" name="date" value="24 February 1918"> 24 февраля 1918 года
	<input type="radio" name="date" value="30 November 1925"> 30 ноября 1925 года
	<p>
		5. Какая часть Эстонии отошла к России после Второй Мировой Войны? :
	</p>
	<input type="radio" name="land" value="Petsora"> Печоры
	<input type="radio" name="land" value="Narva"> Нарва
	<input type="radio" name="land" value="Ust-Luga"> Уст-Луга
	<input type="radio" name="land" value="Kaliningrad"> Калининград
	<p>
	<input type="submit" name="message-button" value="Отправить заявку">
	</p>
</form>

<?php
if(isset($_POST['message-button'])){
	$town = $_POST['town'];
	$president = $_POST['president'];
	$date = $_POST['date'];
	$maakond = $_POST['maakond'];
	$land = $_POST['land'];
	$result = 0;
	$line = "$town|$president|$maakond|$date|$land \n";
	echo "<br>";
	file_put_contents('test.txt',$line,FILE_APPEND);

	if($town == 'Tallinn') {
		$result++;
	}
	if($president == 'Kersti Kaljulaid') {
		$result++;
	}
	if ($date == '24 February 1918') {
		$result++;
	}
	if($maakond == 'Harjumaa') {
		$result++;
	}
	if($land == 'Petsora') {
		$result++;
	}
}
?>

<?php
$file = file('test.txt');
foreach ($file as $line) {
	$info = explode('|', $line);
	echo $info[0], '<br>', $info[1], '<br>', $info[2], '<br>', $info[3], '<br>', $info[4], '<br><br>';
}
?>

</body>
</html>





