<?php
function uravnenie($a,$b,$c) {
    $d = ($b ** 2) - (4*$a*$c);
    return $d;        
}
function korni($d,$a,$b,$c) {
    if ($d > 0) {
        $x1 = (-$b+sqrt($d))/(2*$a);  
        $x2 = (-$b-sqrt($d))/(2*$a);
        echo 'Первый корень ', $x1,"<br>";
        echo 'Второй корень ', $x2,"<br>";
    }
    elseif ($d == 0) {
        $x=$x2=(-$b/(2*$a));
        echo $x;
    }
    elseif ($d < 0) {
        echo "Не имеет значения";
    }
}
?>
<form action="Function.php" method="post">
    <p>ax2+bx+c=0</p>
    <p>a= <input name="a" type="text"></p>
    <p>b= <input name="b" type="text"></p>
    <p>c= <input name="c" type="text"></p>
    <p> <input type="submit" value="Найти корни"></p>
</form>
<?php
if (isset($_POST['a']) and isset($_POST['b']) and isset($_POST['c']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = uravnenie($a, $b, $c);
    korni($d,$a,$b,$c);
           
}
?>

<hr>
<br>
<h2>Время</h2>
<?php
function minute($N){
    $m = $N / 60;
    echo 'Минуты: ',$m,"<br>";
}
function hour($N){
    $h = $N / 3600;
    echo 'Часы: ', $h,"<br>";
}
function ms($N){
    $v = $N % 60;
}
function hms($N){
    $chas = intdiv($N,3600);
    $min  = floar(($N%3600)/60);
    $sec = $N - (($chas * 3600) + ($min * 60)); 
    return "<h3>Часы: {$chas} ,Минуты: {$min} ,Секунды: {$sec}</h3>";
}
$N = 4855;
echo hms($N);
?>

