<?php

if(isset($_POST['id']) && !empty($_POST['id'])){
    include '../inc/key.php';
    $x = htmlspecialchars($_POST['id']);
    $sql = "DELETE FROM modeles WHERE id=$id";
    if($connexion->query($sql)){
        header('Location:liste.php');
    }
} else {
    header('Location:liste.php');
}
