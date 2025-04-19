<?php define('BASE', '/projetsite/'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        <?php
        if(isset($title)){
            echo $title;
        } else {
            echo 'PORSCHE';
        }
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE ?>css/style.css">
    </head>
    <body>


    <header>
        <div class="header">
            <div class="icon"><img src="<?= BASE ?>image/logop.png" alt="Logo Porsche"></div>
        </div>
        <h1 class="titre">PORSCHE</h1>
        <form action="recherche.php" method="get">
        <input
          type="search"
          name="recherche"
          id="recherche"
          placeholder="Rechercher..."
          maxlength="200"
        />
        <input type="image" src="<?= BASE ?>image/cherche.svg" />
      </form>
    </header>
    <div class="zone-contenu">
    <div class="burger">
        <img src="<?= BASE ?>image/burger.png" alt="menu">
    </div>
        <nav>
            <a href="<?= BASE ?>index.php">Accueil</a>
            <a href="<?= BASE ?>pages/histoire.php">Notre Histoire</a>
            <a href="<?= BASE ?>pages/modeles.php">Nos Modèles</a>
            <a href="<?= BASE ?>pages/login.php">Admin</a>
            <a href="<?= BASE ?>pages/contact.php">Nous contacter</a>
        </nav>
