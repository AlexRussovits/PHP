<?php
require 'model/Category.php'; // подключаем нужные модели
//require 'model/news.php';

//include_once 'view/news.php';
session_start();
include_once 'inc/Database.php'; // класс для работы с базой
include_once 'controller/Controller.php'; // контроллер
include_once 'route/routing.php'; // маршрутизатор

echo $response;
?>