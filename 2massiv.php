<?php
$vehicle = array(array("Название" => "Audi",
"Цена" => 100000,
"Количество" => 10),
array("Название" => "Bentley",
"Цена" => 150000,
"Количество" => 6),
array("Название" => "McLaren",
"Цена" => 750000,
"Количество" => 4)
);
echo "<ol>";
for ($row = 0; $row < 3; $row++) {
	echo "<li><strong>Доступная машина для покупки</strong>";
	echo "<ul>";

	foreach ($vehicle[$row] as $key => $value) {
		echo "<li>".$key." ".$value."</li>";
	}

	echo "</ul>";
	echo "</li>";
}
echo "</ol>";
?>