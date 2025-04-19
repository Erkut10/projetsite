LIVRABLE  Projet Web : Site Porsche

!!!!

Le premier repo avait des fichiers mal placés et certaines branches étaient désorganisées,
donc on a décidé de repartir sur une base propre avec un repo structuré dès le début pour éviter les conflits et avoir une meilleure gestion de projet


!!!!

Objectif du projet
Développement d’un site vitrine pour un showroom Porsche, avec une interface d’administration sécurisée permettant de gérer les modèles de véhicules. 
L’objectif principal est de permettre à un administrateur de gérer les informations des modèles visibles publiquement.

---

Partie publique (visiteurs)
Page d’accueil présentant brièvement le site
Notre Histoire : contenu statique
Nos Modèles : liste des modèles disponibles (nom, marque, année, prix)
Nous Contacter : formulaire ou page statique
Responsive design avec menu burger en version mobile

---

Partie administration
Connexion administrateur
Authentification via email et mot de passe (hashé) (mdp : projetmasson1)
Gestion de session sécurisée avec $_SESSION['admin']
Redirection automatique vers liste.php après connexion

Gestion des modèles
Ajouter un modèle (nom, marque, année, prix)
Modifier les informations d’un modèle existant
Supprimer un modèle définitivement
Lors de la suppression d’un modèle, les fichiers associés (ex : images) sont également supprimés du serveur pour éviter les fichiers orphelins

---

Procédure de test
Démarrer un serveur local (WAMP)
Créer les tables nécessaires dans la base de données
Placer le dossier projetsite dans le dossier www
Accéder à :
http://localhost/projetsite/pages/login.php
Se connecter avec un compte admin
Gérer les modèles depuis liste.php

---

Design
Design simple et fonctionnel inspiré d’un showroom Porsche
Responsive avec menu burger uniquement visible en version mobile
Navigation claire et hiérarchisée
