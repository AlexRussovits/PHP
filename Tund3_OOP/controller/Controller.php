<?php
class Controller {
    public static function StartSite() {
        $array = Category::getAllCategory();
        $arrayData = News::getTopNews();
        include_once 'view/start.php';
    }
    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/start.php';
    }
    public static function error404() {
        include_once 'view/error404.php';
    }
    public static function News($category){
        $array = Category::getAllCategory();
        $arrayData = News::getAllNews($category);
        include_once 'view/News.php';
    }
    public static function Search($data){
        $array = Category::getAllCategory();
        $arrayData = Search::searchResult($data);
        include_once 'view/Search.php';
    }
}


