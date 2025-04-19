<?php
include('../inc/header.php');
include('../inc/key.php');
?>

<h2 class="modele2">Nos modèles</h2>
<br>

<div style="width: 60%; margin: 0 auto;">

<?php
$req = $connexion->query("SELECT * FROM modeles");

while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='border'>";
    echo "<p><strong>Nom :</strong> " . htmlspecialchars($data['nom']) . "</p>";
    echo "<p><strong>Marque :</strong> " . htmlspecialchars($data['marque']) . "</p>";
    echo "<p><strong>Année :</strong> " . htmlspecialchars($data['annee']) . "</p>";
    echo "<p><strong>Prix :</strong> " . htmlspecialchars($data['prix']) . " €</p>";
    echo "</div>";
}
?>

</div>

<?php include('../inc/footer.php'); ?>
