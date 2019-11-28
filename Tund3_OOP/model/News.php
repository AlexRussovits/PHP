
<?php
class News {
    public static function getAllNews() {
        $query = "SELECT * FROM news ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

}
?> 
