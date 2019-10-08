<!DOCTYPE html>
<html>
<head>
	<title>Форма регистрации</title>
</head>
<body>
<?php
if(isset($_POST['message_button']))
{
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$group = $_POST['group'];
	$telnumber = $_POST['telnumber'];
	$line = "$name|$lastname|$group|$telnumber \n";
	echo "<br>";
	file_put_contents('dbo.txt',$line,FILE_APPEND);
}

$file = file('dbo.txt');
foreach ($file as $line) {
	$info = explode('|',$line);
	echo $info[0], '<br>', $info[1], '<br>', $info[2], '<br>', $info[3], '<br><br>';
}

?>
<form method="post">
	Введите имя: <br>
	<input type="text" name="name"><br><br>
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
</body>
</html>





