<?php
require_once "F.php";
$arr[0] = "PHP";
$arr[1] = "HTML";
$arr[2] = "CSS";

$arr[1] = "JAVASCRIPT";
$arr[] = "JQUERY";
unset($arr[0]);
foreach ($arr as $key => $value) {
	echo $value. '<br>';
}
//print_r($arr);
?>

<?php
function Arvud() {
	$x = [];
	for($i=0;$i<10;$i++) {
		array_push($x,rand(1,20));
	}
	return $x;
}
$x=arvud();
function Slozhenie($x) {
	$plus = 0;
	foreach ($x as $value) {
		$plus += $value;
	}
	return $plus;
}
function AverageValue($x) {
	$plus = 0;
	foreach ($x as $value) {
		$plus += $value;
	}
	$upshot = $plus / round(count($x),2);
	return $upshot;
}
function EvenNumbers($x) {
	foreach ($x as $key => $value) {
		if ($value % 2 != 0)
			unset($x[$key]);
	}
	return $x;
}
function MaxValue($x)  {
	$maximum = 0;
	foreach ($x as $key => $value) {
		if ($value > $maximum) {
			$maximum = $value;
			$upshot  = "Номер максимального значения = {$key}" . "<br>" . "Значение максимального значения = {$value}";
		}
		return $upshot;
	}
function MinValue($x) {
	$min = 50;
	foreach ($x as $key => $value) {
		if ($value<$min) {
			$mix = $value;
			$upshot = "Номер минимального значения = {$key}". "<br>" . "Значение максимального значения = {$value}";
		}
		return $upshot;
	}

}
debug($x = Arvud());
debug(Slozhenie($x));
debug(AverageValue($x));
debug(EvenNumbers($x));
debug(MaxValue($x));
debug(MinValue($x));
?>