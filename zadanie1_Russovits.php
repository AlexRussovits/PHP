<?php 
$a = 35;
$d = (int)($a/10);
echo "Дано двузначное число, ", $a, "<br>";
echo "35 / 10 = ",$d,"<br>";
echo "35 % 10 = ", $a%10, "<br>";

echo "Arve: 12358572","<br>";
$min = 8;
$max = 15;
$m = rand($min,$max);
$mak = rand($min,$max);
$blydo = $m + $mak; 
$min2 = 2;
$max2 = 5;
$nap = rand($min2,$max2);
$summa= $blydo*3;
$summa2 = $nap * 3;
$itog = $summa + $summa2;
echo "<table border = 1>";
	echo "<tr><th>Блюдо</th><th>Цена</th><th>Cумма</th></tr>";
	echo "<tr><th>Макароны с мясом x3</th><th>$blydo $</th><th>$summa $</th></tr>";
	echo "<tr><th>Вино x3</th><th>$nap $</th><th>$summa2 $</th></tr>";
	echo "<tr><th>Итого</th><th>$itog $</th></tr>";	
echo "</table>","<br>";

$l = 173;
$m = 70;
$t = 17;
$mid = (3*$l-450+$t)*0.250+45.0;
$kind = $m/($l/100)**2;
echo "Идеальный вес мужчины: ", $mid, " кг" ,"<br>";
echo "Индекс массы тела мужчины: ", $kind, "<br>";
if ($kind < 20)
{
echo "Недостаточный вес","<br>";
}
elseif ($kind >=20 and $kind<=25)
{
echo "Нормальный вес","<br>";
}
elseif ($kind>=25 and $kind<=30)
{
echo "Небольшой избыточный вес","<br>";
}
elseif ($kind>=30 and $kind<=40)
{
echo "Это уже избыточный вес","<br>"; 
}

$D = 21;
$M = 6;

echo "Дата рождения: ",$D, ".",$M,"<br>";
if ($M == 1 and $D >= 20)
	{
		echo "Водолей","<br>";
	}
elseif ($M == 1 and $D <= 19) 
	{
		echo "Козерог","<br>";
	}
elseif($M == 2 and $D <= 18) {
	echo "Водолей","<br>";
}
elseif ($M == 2 and $D >= 19)
	{
		echo "Рыбы","<br>";
	}
elseif ($M == 3 and $D >= 21)
	{
		echo "Овен","<br>";
	}
elseif ($M == 3 and $D <= 20)
	{
		echo "Рыбы","<br>";
	}
elseif ($M == 4 and $D >= 20)
	{
		echo "Телец","<br>";
	}
	elseif ($M == 4 and $D <= 19)
	{
		echo "Овен","<br>";
	}
elseif($M == 5 and $D <= 20) 
	{
		echo "Телец","<br>";
	}
elseif($M == 5 and $D >= 21) 
	{
		echo "Близнецы","<br>";
	}

elseif ($M == 6 and $D <= 21)
	{
		echo "Близнецы","<br>";
	}
elseif ($M == 6 and $D >= 22)
	{
		echo "Рак","<br>";
	}
elseif ($M == 7 and $D <= 22 or $D >=23)
	{
		echo "Рак","<br>";
	}
elseif ($M == 7 and $D <= 22 or $D >=23)
	{
		echo "Лев","<br>";
	}
elseif($M == 8 and $D <= 22 or $D >= 23)
	{
		echo "Лев","<br>";
	}
elseif($M == 8 and $D <= 22 or $D >= 23)
	{
		echo "Дева","<br>";
	}
elseif ($M == 9 and $D <= 22)
	{
		echo "Дева","<br>";
	}
elseif ($M == 9 and $D >= 23)
	{
		echo "Весы","<br>";
	}
elseif ($M == 10 and $D <= 22) 
	{
		echo "Весы","<br>";
	}
elseif ($M == 10 and $D >= 23) 
	{
		echo "Скорпион","<br>";
	}
elseif ($M == 11 and $D <= 22) 
	{
		echo "Скорпион","<br>";
	}
elseif ($M == 11 and $D >= 23) 
	{
		echo "Стрелец","<br>";
	}
elseif ($M == 12 and $D <= 21) 
	{
		echo "Стрелец","<br>";
	}
elseif ($M == 12 and $D >= 22) 
	{
		echo "Козерог","<br>";
	}

$minimum = 100;
$maximum = 999;
$arve = rand($minimum,$maximum)

?>


