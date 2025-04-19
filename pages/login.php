<?php
session_start();
include('../inc/key.php');

if (isset($_POST['email']) && isset($_POST['motdepasse'])) {
    $email = htmlspecialchars($_POST['email']);
    $motdepasse = $_POST['motdepasse'];


    $sql = "SELECT * FROM utilisateurs WHERE email = '$email'";
    $resultat = $connexion->query($sql);
    $utilisateur = $resultat->fetch(PDO::FETCH_ASSOC);

    if ($utilisateur && password_verify($motdepasse, $utilisateur['motdepasse'])) {
        $_SESSION['admin'] = true;
        $_SESSION['email'] = $utilisateur['email'];
        header('Location: liste.php');
        exit();
    } else {
        $erreur = "Identifiants incorrects.";
    }
}
?>

<h2>Connexion Administrateur</h2>

<?php if (isset($erreur)) echo "<p style='color:red;'>$erreur</p>"; ?>

<form method="post" action="">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="motdepasse" placeholder="Mot de passe" required><br><br>
    <input type="submit" value="Connexion">
</form>

