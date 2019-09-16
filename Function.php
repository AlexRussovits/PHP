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
<form method="post">
<p>N= <input name="N" type="text"></p>
<p> <input type="submit" value="Найти"></p>
</form>
<?php
function minute(){
    $m = $N / 60;
    echo 'Минуты: ',$m,"<br>";
}
function hour(){
    $h = $N / 3600;
    echo 'Часы: ', $h,"<br>";
}
function ms(){
   // $v = $N /  ;
}
//function 
?>

