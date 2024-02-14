<?php
// Inclusion des fichiers nécessaires
require_once dirname(__DIR__) . ('/config/config.php');
require_once dirname(__DIR__) . ('/fonctions/database.fn.php');

// Connexion à la base de données
$db = getPDOlink($config);

// Inclusion des fichiers de configuration de l'en-tête
require_once dirname(__DIR__) . ('/config/headerConfig.php');
require_once dirname(__DIR__) . ('/fonctions/header.fn.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclusion des feuilles de style Bootstrap et personnalisées -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\style\style.css">
    <!-- Inclusion des icônes Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <!-- Début de l'en-tête -->
    <header class="mb-5">
        <!-- Barre de navigation Bootstrap -->
        <nav class="navbar navbar-expand-lg bg-footer">
            <div class="container-fluid">
                <!-- Logo de l'entreprise avec un lien vers la page d'accueil -->
                <a class="navbar-brand" href="index.php"><img src="assets/img/logo-removebg-preview.png" alt="logo zelda" class="w-75"></a>
                <!-- Bouton de basculement pour les appareils mobiles -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Contenu de la barre de navigation -->
                <div class="collapse navbar-collapse" id="navbarText">
                    <!-- Liste des liens de navigation -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php 
                            // Récupération des pages à partir de la base de données
                            $sqlPages = "SELECT * FROM pages;";
                            $requetePages = $db->query($sqlPages);
                            $pages = $requetePages->fetchAll();
                            // Inclusion du code HTML pour les éléments de la barre de navigation
                            include 'utilities/navbar_li.php';
                        ?>
                    </ul>
                    <a href="page404.php"><i class="bi bi-cart text-warning me-5"></i></a>
                    <a href="page404.php"><i class="bi bi-person text-warning me-5"></i></a>
                    
                </div>
            </div>
        </nav>
        <!-- Conteneur pour la bannière de l'en-tête -->
        <div class="container-fluid g-0 position-relative">
            <!-- Image de la bannière -->
            <img src="assets/img/banniere1.jpg" class="img-fluid" alt="Link escalade une falaise">
            <!-- Titre positionné au centre de la bannière -->
            <h1 class="position-absolute top-50 start-50 translate-middle text-uppercase"><?= $title ?></h1>
        </div>
    </header>
