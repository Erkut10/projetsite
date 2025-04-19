<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (
    isset($_POST['nom'], $_POST['marque'], $_POST['annee'], $_POST['prix'], $_POST['id']) &&
    !empty($_POST['nom']) && !empty($_POST['marque']) && !empty($_POST['annee']) && !empty($_POST['prix']) && !empty($_POST['id'])
) {
    $nom = htmlspecialchars($_POST['nom']);
    $marque = htmlspecialchars($_POST['marque']);
    $annee = htmlspecialchars($_POST['annee']);
    $prix = htmlspecialchars($_POST['prix']);
    $id = htmlspecialchars($_POST['id']);

    include '../inc/key.php';

    $sql = "UPDATE modeles SET nom='$nom', marque='$marque', annee='$annee', prix='$prix' WHERE id=$id";

    if ($connexion->query($sql)) {
        header('Location: liste.php');
    } else {
        echo "Erreur lors de la mise à jour.";
    }
} else {
    header('Location: liste.php');
}
?>
