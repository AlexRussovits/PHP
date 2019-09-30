<?php
include "info.php";
include "func.php";

echo "<p> Menu </p>";
Infos($info);

if(!isset($_GET['info'])) {
	allnews($sport,$world,$estonia,$economy);
}
else{
	echo "<h2>",$_GET['info'],"</h2>";
	infonews($_GET['info',$sport,$world,$estonia,$economy);
}
?>