<?php
ob_start();
?>

<h1>Start page</h1>
<br>

<?php
$content = ob_get_clean();
include_once  'view/Layout.php';

?>