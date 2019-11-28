<?php
include_once 'readfromfile.php';
include_once 'databasecategoria.php';

ReadFromFile::createLinks();
if (isset($_GET['id']))
{
    ReadFromFile::InfoByID($_GET['id']);
}

echo "Данные из MySQL <br>";
$cats= DBMySQL::getAllCategorias();
foreach($cats as $c) {
    echo '<a href ="index.php.php?iddb='.$c->getId().'">'.$c->getNimetus().'</a> <br>';
}

if (isset($_GET['iddb'])) {
    $c = DBMySQL::getCategoriasById($_GET['iddb']);
    echo '<p >'. $c->getKirjeldus().'</p>';
}
?>