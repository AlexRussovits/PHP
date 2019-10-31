<?php
function Infos($info) {
	foreach ($info as $value) {
		echo '<a href ="news.php?$info=',$value,'">',$value,'</a><br>'; 
	}
}

function allnews($sport,$world,$estonia,$economy) {
	echo "<h1> Все новости </h1>";
	echo "<h2> Спорт </h2>";
	foreach ($sport as $value) {
		echo '<p>',$value,'</p>';
	}
	echo "<h2> Всерминые Новости </h2>";
	foreach ($world as $value) {
		echo '<p>', $value, '</p>';
	}
	echo "<h2> Новости Эстонии </h2>";
	foreach ($estonia as $value) {
		echo '<p>', $value, '</p>';
	}
	echo "<h2> Экономия </h2>";
	foreach ($economy as $value) {
		echo '<p>', $economy, '</p>';
	}
}

function infonews($info) {

 if 
?>