<?php
$host = explode('?',$_SERVER['REQUEST_URI']) [0];
$num = substr_count($host,'/');
$path = explode('/',$host) [$num];

if ($path == '' OR $path == 'index.php' OR $path == 'index.php.php') {
    $response = Controller::StartSite();
} else{ 
    $response = Controller::error404();
}

?>