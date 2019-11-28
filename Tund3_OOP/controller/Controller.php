<?php
class Controller {
    public static function StartSite() {
        include_once 'view/start.php';
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/Category.php';
    }

    public static function error404() {
        include_once 'view/error404.php';
    }

    public static function AllNews() {
        $arr = News::getAllNews();
        include_once 'view/AllNews.php';
    }
}

?>