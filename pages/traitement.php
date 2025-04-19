<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['ajouter'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $marque = htmlspecialchars($_POST['marque']);
    $annee = htmlspecialchars($_POST['annee']);
    $prix = htmlspecialchars($_POST['prix']);

    include '../inc/key.php';

    $sql = "INSERT INTO modeles (nom, marque, annee, prix) VALUES ('$nom', '$marque', '$annee', '$prix')";

    if ($connexion->query($sql)) {
        header('Location: liste.php');
    } else {
        echo "Erreur lors de l'ajout.";
    }
}
?>

