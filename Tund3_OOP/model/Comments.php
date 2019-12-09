<?php
class Comments
{
    public static function insertComment($c,$id)
    {
        public static function getCommentsByNewsID($id) {
        $query = "SELECT * FROM comments WHERE post_id =".$id." ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

        public static function getCommentsCountByNewsID($id) {
        $query = "SELECT Count(id) as 'count' FROM comments WHERE post_id = ".$id;
        $db = new Database();
        $c = $db->getOne($query);
        return $c;
        }
    }

}

?>