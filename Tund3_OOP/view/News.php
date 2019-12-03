<?php
class ViewNews
{
    public static function NewsByCategory($arr)
    {
        foreach($arr as $value){
            echo '<img src="data:image/jpeg;base64,'.base64_encode($value['picture']).'"><br>';
            echo "<h2>".$value['Title']."</h2>";
            echo "<a href='news?id=".$value['id']."'>Читать далее</a><br>";
        }
    }

    public static function AllNews($arr){
        foreach ($arr as $value) {
            echo "<li>".$value['Title'];

            echo "<a href='news?id=".$value['id']."'>Читать далее</a></li><br>";
        }
    }

    public static function ReadNews($n) {
        echo "<h2>".$n['Title']."</h2>";

        echo '<br><img src="data:image/jpeg;base64,'.base64_encode($n ['picture']).'"><br>';
        echo "<p>".$n['Description']."</p>";
    }

}