<?php
class ViewNews {
    public static function AllNews($arr) {
        foreach ($arr as $value) {
            echo "<li >".$value['title']."<a href='news?id=".$value['id']."'>Читать далее</a></li><br>";
        }
    }

}

