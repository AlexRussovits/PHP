<?php
class News
{
    public static function getLast10News() {
        $query = "SELECT * FROM news ORDER BY id DESC LIMIT 10";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getAllNews(){
        $query = "SELECT * FROM news ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getNewsByCategoryID($id){
        $query = "SELECT * FROM news WHERE Category_id=".(int)$id." ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getNewsByID($id) {
        $query = "SELECT * FROM news WHERE id=".(int)$id;
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

}
?>