<?php
class News
{
    public static function getTopNews(){
        $query = "SELECT * FROM news LIMIT 10";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getAllNews($category){
        if($category == 'All'){
            $query = "SELECT * FROM news";
        }else{
            $query = "SELECT * FROM news WHERE categoria = '$category'";
        }
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
}
?>