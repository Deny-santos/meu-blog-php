<?php

    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/style.css">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL?>" id="logo">
            <img src="<?= $BASE_URL?>/img/logo.svg" alt="blog codar">
        </a>
        <nav >
            <ul id="navbar"> 
                <li><a class="nav-link" href="<?= $BASE_URL?>">Home</a></li>
                <li><a class="nav-link" href="#">Categorias</a></li>
                <li><a class="nav-link" href="<?= $BASE_URL?>#sobre">Sobre</a></li>
                <li><a class="nav-link" href="<?= $BASE_URL?>contato.php">Contatos</a></li>
            </ul>
            <div class="bar">
                <img class="img-bar" src="<?= $BASE_URL?>/img/bar.png" alt="">
            </div>

        </nav>



    </header>

    <script src="<?= $BASE_URL?>/scripts/bar.js"></script>
</body>