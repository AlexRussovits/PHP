<?php
echo 'Привет от PHP';
//echo "<h1>Aleksander Russovits</h1>";
echo<<<END
<p>Ida-Virumaa Kutsehariduskeksus<br>Address heredoc</p>
END;
/*Estonia*/
//KohtlaJarve
#phpmydamin
$firstname = "Александер";
echo "Моё имя ", $firstname, "<br>";
$a = /*5*/ "5"; 
$b = /*7*/ "7";
$S = $a*$b;
echo "S прямоугольника ", $S, "<br>";
define("pi",3.14);
echo "Математическая константа Пи равняется ", pi ,"<br>";
$r = 20;
$C = 2*pi*$r;
echo "Длина окружности равна ", $C, "<br>";
$bool = true; // Значение Boolean
$int = 100; // Integer
$string = "Переменная содержит текст"; //Значение String
$string2 = "5425";
$float = 44.122; //Значение Float
$a2 = 3;
$b2 = 4;
$c = sqrt(pow($a2,2)+ pow($b2,2));
echo "Длина гипотенузы ", $c, "<br>";

$month = 11;

if ($month == 1 or $month == 2 or $month == 12)
	echo "Зима", "<br>";
elseif ($month == 3 or $month == 4 or $month == 5)
	echo "Весна", "<br>";
elseif ($month == 6 or $month == 7 or $month == 8)
	echo "Лето", "<br>";
elseif ($month == 9 or $month == 10 or $month == 11)
	echo "Осень", "<br>";

$kuu = 11;

switch($kuu)
{
	case 1:
	case 2:
	case 12:
		echo "Winter";
	break;
	case 3:
	case 4:
	case 5:
		echo "Spring";
	break;
	case 6:
	case 7:
	case 8:
		echo "Summer";
	break;
	case 9:
	case 10:
	case 11:
		echo "Autumn", "<br>";
	break;	
}

for ($i = 1; $i<11; $i++)
{
	echo $i, ",";
}
for ($i = 10; $i>0; $i--)
{
	echo $i, ",";
}

for ($i = 2; $i <= 10; $i+=2)
{
	echo $i, ",";
}

for ($i = 1; $i <= 9; $i+=2)
{
	echo $i, ",";
}

for ($i = 3; $i <=9; $i+=3)
{
	echo $i, ",";
}

for ($i = 5; $i<=10;$i+=5)
{
	echo $i, ",";
}