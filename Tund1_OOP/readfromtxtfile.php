<?php
include_once 'ilm.php';

class ReadFromTxtFile
{
    public static function readtxtfile()
    {
        $allcat = array();
        $file = file('ilm.txt');
        foreach ($file as $line)
        {
            $info = explode('|',$line);
            $allcat[] = new Ilm($info[0],$info[1],$info[2],$info[3],$info[4]);

        }
    return $allcat;
    }

    public static function createForm() {
        "<form>"
        
        "</form>"

    }










}
?>