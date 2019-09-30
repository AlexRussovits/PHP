<!DOCTYPE html>
<html>
<head>
	<title>Двумерные массивы</title>
<body>
<?php
$name = ["Алексей","Александр","Ольга","Екатерина","Денис","Светлана"];
$predmety = ["Математика", "Английский язык", "Физкультура","География", "Химия", "Физика"];
$otsenki = array(array(5,4,5,4,4,4),array(4,4,5,5,5,5),array(3,4,4,4,5,
	5),array(5,4,4,3,3,4),array(4,4,5,3,3,3),array(4,3,5,3,3,5));
echo "<table> <tr> <th>Имя</th>";
foreach ($predmety as $value) 
	echo "<th>".$value."</th>";
	echo "</tr>";

echo "</table>";
?>
</body>
</html>