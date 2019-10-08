<!DOCTYPE html>
<html>
<head>
	<title>Контрольная работа</title>
</head>
<body>
<?php
$day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday","Saturday", "Sunday"];
$temperature = [7,5,6,4,3,0,2];
echo "<table> <tr> <th>День</th> ";
foreach ($day as $value)
	echo "<th>".$value."</th>";
	echo "</tr>";
echo "<tr> <th>Температура</th>";
for ($i = 0; $i < count($temperature);$i++) {
			$average  = 0;
			echo "<td>". $temperature[$i]. "</td>";
			$average += $temperature[$i];
}
echo "<td>".round(array_sum($temperature)/count($temperature),2)."</td></tr>";
echo "</table>";
?>
<br>
	<form method="post">
		<select name='days'>
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednesday</option>
			<option value="Thursday">Thursday</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
			<option value="Sunday">Sunday</option>
		</select>
		<p><input type="submit" value="Submit">
		</p>
	</form>
	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$days = $_POST['days'];
		if ($days == "Monday") {
			echo "Температура на понедельник: ".$temperature[0]. "&#8451";
		}
		elseif ($days == "Tuesday") {
			echo "Температура на вторник: ".$temperature[1]. "&#8451";
		}
		elseif ($days == "Wednesday") {
			echo "Температура на среду: ".$temperature[2]. "&#8451";
		}
		elseif ($days == "Thursday") {
			echo "Температура на четверг: ".$temperature[3]. "&#8451";
		}
		elseif ($days == "Friday") {
			echo "Температура на пятницу: ".$temperature[4]. "&#8451";
		}
		elseif ($days == "Saturday") {
			echo "Температура на субботу: ".$temperature[5]. "&#8451";
		}
		elseif ($days == "Sunday") {
			echo "Температура на воскресенье: ".$temperature[6]. "&#8451";
		}
	}
	?>
</body>
</html>
