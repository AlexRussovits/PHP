<?php
ob_start();
foreach($arrayData as $key => $value) {


}

$content = ob_get_clean();
include_once  'view/Layout.php';
?>