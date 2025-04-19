<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    include '../inc/key.php';
    $id = htmlspecialchars($_GET['id']);

    $requete = $connexion->prepare("SELECT * FROM modeles WHERE id = :id");
    $requete->bindParam(':id', $id);
    $requete->execute();
    $modele = $requete->fetch(PDO::FETCH_ASSOC);

    if ($modele):
?>

<h2>Modifier le modèle</h2>
<form action="maj.php" method="post">
    <input type="text" name="nom" value="<?= htmlspecialchars($modele['nom']) ?>" required><br><br>
    <input type="text" name="marque" value="<?= htmlspecialchars($modele['marque']) ?>" required><br><br>
    <input type="number" name="annee" value="<?= htmlspecialchars($modele['annee']) ?>" required><br><br>
    <input type="number" name="prix" value="<?= htmlspecialchars($modele['prix']) ?>" required><br><br>
    <input type="hidden" name="id" value="<?= $modele['id'] ?>">
    <input type="submit" name="modifier" value="Mettre à jour">
</form>

<?php
    else:
        echo "Modèle non trouvé.";
    endif;
}
?>
