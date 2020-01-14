<?php


class modelAdminNews
{
    public static function getNewsList() {
        $query = "SELECT news.*,categoria.Name,users.username FROM news, categoria,users WHERE news.Category_id=categoria.id AND news.User_id = users.id ORDER BY `news`.`id` DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getNewsAdd() {
        $test = false;
        if(isset($_POST['save'])) {
            if(isset($_POST['Title']) && isset($_POST['Description']) && isset($_POST['Category_id'])) {
                $title = $_POST['Title'];
                $descr = $_POST['Description'];
                $cat_id = $_POST['Category_id'];


                $date = Date("Y-m-d");
               // $image = addslashes(file_get_contents($_FILES['picture'] ['tmp_name']));

                $image = $_FILES['picture']['name']; //
                if($image!=""){
                    $uploaddir = '../image/';
                    $uploadfile = $uploaddir . basename($_FILES['picture']['name']);
                    copy($_FILES['picture']['tmp_name'], $uploadfile);
                }
                else{
                    $image ="";
                }


                $sql = "INSERT INTO `news`(`id`, `Title`, `Date`, `Category_id`, `picture`, `Description`, `User_id`) VALUES (NULL, `$title`, `$descr`, `$cat_id`, `$date`, `$image`, '51')";
                $db = new Database();
                $item = $db->executeRun($sql);
                if($item ==true) {
                    $test = true;
                }
            }
        }
        return $test;
    }
}
