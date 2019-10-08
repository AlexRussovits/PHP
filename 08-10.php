<?php 
$f = fopen('file.txt','w');
fwrite($f, 'Первая запись');
fwrite($f,'Вторая запись');
fclose($f);
?>