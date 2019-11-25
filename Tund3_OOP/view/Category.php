<?php

echo "<li class = 'submenu'><a href = 'Главная'>Главная</a></li></ br>";

foreach($arr as $value) {
    echo "<li class = 'submenu'><a href = 'categoria?id=".$value['id']."'>".$value['name'].'</a></li></ br>';
}

?>
