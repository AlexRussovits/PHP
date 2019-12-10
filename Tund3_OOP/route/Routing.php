<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if($path == '' OR $path == 'index' OR $path == 'index.php') {
    $response = Controller::StartSite();
}
elseif($path == 'All') {
    $response = Controller::AllNews();
}
elseif($path == 'categoria' and isset($_GET['id'])){
    $response = Controller::NewsByCatID($_GET['id']);
}
elseif ($path == 'news' and isset($_GET['id'])){
    $response = Controller::NewsByID($_GET['id']);
}
elseif ($path == 'insertComment' and isset($_GET['comment'],$_GET['id'])) {
    $response = Controller::InsertComment($_GET['comment'],$_GET['id']);
}

else{
    $response = Controller::error404();
}
