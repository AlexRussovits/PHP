<?php
class Ilm
{
    private $Kellaaeg;
    private $Nädalapäev;
    private $Temperatuur;
    private $Pilt;
    private $Kirjeldus;

    function __construct($aeg,$nimi,$arv,$kartinka,$tekst)
    {
        $this ->Kellaaeg=$aeg;
        $this ->Nädalapäev=$nimi;
        $this ->Temperaatur=$arv;
        $this ->Pilt=$kartinka;
        $this ->Kirjeldus=$tekst;
    }
    public function getAeg() {
        return $this->Kellaaeg;
    }
    public function getNädalapäev() {
        return $this->Nädalapäev;
    }
    public function getTemperatuur() {
        return $this->Temperatuur;
    }
    public function getPilt() {
        return $this->Pilt;
    }
    public function getKirjeldus()  {
        return $this->Kirjeldus;
    }
}
?>