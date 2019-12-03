<?php
echo "<li class = 'dropdown'><a href = 'All'>All</a></li></ br>";
foreach($arr as $value) {
    echo "<li class = 'dropdown'><a href = 'categoria?id=".$value['id']."'>".$value['Name'].'</a></li></ br>';
}
?>


