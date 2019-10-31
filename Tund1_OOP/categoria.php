<?php
class Categoria
{
    // property declaration 
    private $id;
    private $Nimetus;
    private $Kirjeldus;

    // construct
    function __construct($id,$nimi,$tekst)
    {
        $this ->id=$id;
        $this ->Nimetus=$nimi;
        $this ->Kirjeldus=$tekst;
    }
    // method declaration
    public function getId() {
        return $this->id;
    }
    public function getNimetus() {
        return $this ->Nimetus;
    }
    public function getKirjeldus() {
        return $this ->Kirjeldus;
    }
}
?>
