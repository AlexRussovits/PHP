<?php
include_once 'ilm.php';

class ReadFromTxtFile
{
    public static function readtxtfile()
    {
        $weather = array();
        $file = file('ilm.txt');
        foreach ($file as $line)
        {
            $info = explode('|',$line);
            $weather[] = new Ilm($info[0],$info[1],$info[2],$info[3],$info[4],$info[5],$info[6]);

        }
        return $weather;
    }

    public static function createTable() {
        $weather = self::readtxtfile();
        echo "<table style='background-color: #121111; color:white;'>";
            echo "
            <thead>
                <tr>
                    <th>Kellaaeg/Nädalapäev</th>
                    <th>Teisipäev</th>
                    <th>Kolmapäev</th>
                    <th>Neljapäev</th>
                    <th>Reede</th>
                </tr>
            </thead>            
            ";

        echo "<tbody>";
            echo "<tr>";
                echo "<td>Päev</td>";

            foreach ($weather as $w) {
                echo "<td><img src = '../images/{$w->getPilt()}'>{$w->getPäevt()}</td>";

            }
            echo "</tr>";
            echo "<tr>";
            echo "<td>Öö</td>";
            foreach ($weather as $w) {
                echo "<td><img src = '../images/{$w->getPilt()}'>{$w->getÖöt()}</td>";
            }
        echo "</tbody>";
        echo "</table>";
    }
    public static function createMenu() {
        $weather = self::readtxtfile();
        echo "<ul>";
        foreach ($weather as $w) {
            echo "<li><a href = 'main.php?id={$w->getNädalapäev()}'>{$w->getNädalapäev()}</a></li>";
        }
        echo "</ul>";

    }

    public static function createKirjeldus(){
        $weather = self::readtxtfile();
        foreach ($weather as $w) {
            if($w->getNädalapäev()== $_GET['id']) {
                echo "<p>{$w -> getKirjeldus()}</p>";
            }
        }
    }

}


?>