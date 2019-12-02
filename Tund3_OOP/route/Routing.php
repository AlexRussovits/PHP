<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];
if($path == 'News' or $path == 'News.php') {
    if (!empty($_GET)) {
        $category = $_GET['id'];
        $response = Controller::News($category);
    } else {
        $response = Controller::News('All');
    }
}elseif($path == 'search' or $path == 'search.php'){
    if(isset($_POST['search'])) {
        $response = Controller::Search($_POST['search']);
    }else{
        $response = Controller::StartSite();
    }
}elseif( $path == 'index' or $path == 'index.php' or $path == ""){
    $response = Controller::StartSite();
}else{
    $response = Controller::error404();
}
