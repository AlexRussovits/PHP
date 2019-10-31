<?php
class Ilm
{
    private $Nädalapäev;
    private $ÖöTemperatuur;
    private $PäevTemperatuur;
    private $Öö;
    private $Päev;
    private $Pilt;
    private $Kirjeldus;

    function __construct($Nädalapäev,$Öö,$ÖöTemperatuur,$Päev,$PäevTemperatuur,$Pilt,$Kirjeldus)
    {
        $this ->ÖöTemperatuur=$ÖöTemperatuur;
        $this ->PäevTemperatuur=$PäevTemperatuur;
        $this ->Nädalapäev=$Nädalapäev;
        $this ->Pilt=$Pilt;
        $this ->Kirjeldus=$Kirjeldus;
        $this ->Öö=$Öö;
        $this ->Päev=$Päev;
        
    }
    public function getÖöt() {
        return $this->ÖöTemperatuur;
    }
    public function getPäevt() {
        return $this->PäevTemperatuur;
    }

    public function getNädalapäev() {
        return $this->Nädalapäev;
    }
    public function getPilt() {
        return $this->Pilt;
    }
    public function getKirjeldus()  {
        return $this->Kirjeldus;
    }
}
?>