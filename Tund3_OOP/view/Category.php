<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- ICON CSS -->
    <link rel="stylesheet" href="../js/font-awesome/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../js/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../js/slick/slick.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- MODERNIZR -->
    <script src="../js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <title>Сrucial</title>
</head>
<?php

echo "<li class = 'nav-white'><a href = 'Главная'>Главная</a></li></ br>";

foreach($arr as $value) {
    echo "<li class = 'nav-white'><a href = 'categoria?id=".$value['id']."'>".$value['Name'].'</a></li></ br>';
}

?>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="../js/slick/slick.min.js"></script>
<script src="../js/theme.js"></script>