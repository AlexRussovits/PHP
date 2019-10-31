<!DOCTYPE html>
<html>
<head>
	<title>Запись файла</title>
</head>
<body>
<?php 
$f = fopen('file.txt','w');
fwrite($f, "First Record \n");
fwrite($f,"Second Record \n");
fclose($f);

$f = fopen('file.txt','r');
while($line = fgets($f,4096))
	echo $line, '<br>';
fclose($f);

echo "<br><br>";


file_put_contents("file.txt","New Line", FILE_APPEND);

echo "<br>";

$p = [7,4,2,1];
file_put_contents("file.txt",$p,FILE_APPEND);

$p = [8,9,3,6];
file_put_contents("file.txt",implode("\n",$p));

echo "<br>";
$arr = file("file.txt");
foreach($arr as $line)
	echo $line, '<br>';

if(isset($_POST['message-button']))
{
	$name = $_POST['name'];
	$msg = $_POST['message'];
	$date = date('d.m.Y H:i:s');

	$line = "$msg|$name|$date \n";
	echo "<br>";
	file_put_contents('database.txt',$line,FILE_APPEND);
}
?>
<form method="post">
	<br><br>
	Введите имя: <br>
	<input type="text" name="name"><br><br>

	Введите сообщения:<br>
	<textarea name="message"></textarea><br><br>

	<input type="submit" name="message-button" value="Отправить сообщение">

</form>

<?php
$file = file('database.txt');
foreach ($file as $line)
{
	$info = explode('|', $line);
	echo $info[0], '<br>',  $info[1], '<br>', $info[2], '<br><br>';
}
?>
</body>
</html>
