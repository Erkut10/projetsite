<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
include '../inc/key.php';
?>

<h2>Liste des modèles</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Nom</th>
        <th>Marque</th>
        <th>Année</th>
        <th>Prix (€)</th>
        <th>Actions</th>
    </tr>
<?php
$req = $connexion->query("SELECT * FROM modeles");

while ($modele = $req->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($modele['nom']) . "</td>";
    echo "<td>" . htmlspecialchars($modele['marque']) . "</td>";
    echo "<td>" . htmlspecialchars($modele['annee']) . "</td>";
    echo "<td>" . htmlspecialchars($modele['prix']) . "</td>";
    echo "<td>
        <a href='update.php?id=" . $modele['id'] . "'>Modifier</a> |
        <a href='delete.php?id=" . $modele['id'] . "' onclick=\"return confirm('Supprimer ce modèle ?')\">Supprimer</a>
    </td>";
    echo "</tr>";
}
?>
</table>

<h3>Ajouter un nouveau modèle</h3>
<form action="traitement.php" method="POST">
    <input type="text" name="nom" placeholder="Nom" required><br><br>
    <input type="text" name="marque" placeholder="Marque" required><br><br>
    <input type="number" name="annee" placeholder="Année" required><br><br>
    <input type="number" name="prix" placeholder="Prix (€)" required><br><br>
    <input type="submit" name="ajouter" value="Ajouter">
</form>
