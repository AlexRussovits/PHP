<?php
class Controller {
    public static function StartSite() {
        $arr = News::getLast10News();
        include_once 'view/start.php';
    }
    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }
    public static function error404() {
        include_once 'view/error404.php';
    }
    public static function AllNews(){
        $arr = News::getAllNews();
        include_once 'view/AllNews.php';
    }
    public static function Search($data){
        $array = Category::getAllCategory();
        $arrayData = Search::searchResult($data);
        include_once 'view/Search.php';
    }
    public static function NewsByCatID($id) {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/CatNews.php';
    }
    public static function NewsByID($id) {
        $n = News::getNewsByID($id);
        include_once 'view/ReadNews.php';
    }

}


