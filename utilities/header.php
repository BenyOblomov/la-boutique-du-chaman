<?php
// Je stocke le domaine de mon site
$domaine = 'localhost:8000/';

// ici je stocke mes url
$index_page = $domaine;
$produits_page = $domaine . 'produits.php';
$contact_page = $domaine . 'contact.php';

// ici je stocke l'url sur laquelle nous sommes
$current_url = $_SERVER['SCRIPT_NAME'];

if (strpos($index_page, $current_url) !== false || strpos($index_page . 'index.php', $current_url) !== false) {
  $title = "LA BOUTIQUE DU CHAMAN";
}
elseif (strpos($produits_page, $current_url)) {
  $title = 'NOS PRODUITS';
}
elseif (strpos($contact_page, $current_url)) {
  $title = 'CONTACTEZ NOUS';
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\style\style.css">
    <title>Document</title>
</head>
<body>
    <header class="mb-5">
      <nav class="navbar navbar-expand-lg bg-footer">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="assets/img/logo-removebg-preview.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php 
              include 'data/pages_data.php';
              include 'utilities/navbar_li.php';
              ?>
            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
            <button class="btn btn-outline-warning" type="submit">Recherche</button>
          </form>
          </div>
        </div>
  </nav>
<div class="container-fluid g-0 position-relative">
        <img src="assets/img/banniere1.jpg" class="img-fluid" alt="Link escalade une falaise">
        <h1 class="position-absolute top-50 start-50 translate-middle"><?= $title ?></h1>
    </div>
    </header>