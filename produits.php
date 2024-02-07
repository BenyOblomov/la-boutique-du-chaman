<?php 
// Inclusion de l'en-tête de la page
include('utilities/header.php');
// Inclusion du fichier contenant les fonctions relatives aux produits
require_once __DIR__ . ('/fonctions/produits.fn.php');
?>
<!-- Formulaire de tri et de recherche -->
<div class="d-flex justify-content-around align-items-center">
    <!-- Formulaire de tri -->
    <form class="m-2 col-3" method="post" action="produits.php">
        <label class="m-2" for="trier">Trier par :</label>
        <select class="form-select m-2" name="trier" aria-label="Default select example">
            <option value="price ASC">Prix croissant</option>
            <option value="price DESC">Prix décroissant</option>
            <option value="note DESC">Les mieux notés</option>
        </select>
        <button class="m-2" type="submit">Trier</button>
    </form>
    <!-- Formulaire de recherche -->
    <form class="d-flex" role="search" method="post">
        <input class="form-control h-25" name="search" id="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-warning h-25" type="submit">Recherche</button>
    </form>
</div>

<?php
// Vérification si aucun tri ni recherche n'est effectué
if ((isset($_POST['trier']) == FALSE) && (isset($_POST['search']) == FALSE)) {
    // Récupération de toutes les potions
    $potions = findAllPotions($db);
    // Affichage des potions
    echo '<section class="container-md w-66 m-auto">
    <div class="text-center text-uppercase mt-5">
        <h2 class="fw-bold">Nos potions</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mx-0 mx-md-5">';
    foreach ($potions as $value) {
        include 'utilities/cards.php';
    }
    echo '    </div>
    </section>';
    // Récupération de toutes les pierres
    $pierres = findAllPierres($db);
    // Affichage des pierres
    echo '<section class="container-md w-66 m-auto">
    <div class="text-center text-uppercase mt-5">
        <h2 class="fw-bold">Nos pierres</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mx-0 mx-md-5">';
    foreach ($pierres as $value) {
        include 'utilities/cards.php';
    }
    echo '    </div>
    </section>';
} elseif ((isset($_POST['trier']) == TRUE) && (isset($_POST['search']) == FALSE)) {
    // Tri des produits selon la méthode spécifiée
    $products = OrderBy($db, $_POST['trier']);
    // Affichage des produits triés
    echo '<section class="container-md w-66 m-auto">
    <div class="text-center text-uppercase mt-5">
        <h2 class="fw-bold">Nos produits</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mx-0 mx-md-5">';
    foreach ($products as $value) {
        include 'utilities/cards.php';
    }
    echo '</div>
        </section>';
} else {
    // Recherche des produits correspondant au terme de recherche spécifié
    $products = searchProducts($db, $_POST['search']);
    // Affichage des produits trouvés
    echo '<section class="container-md w-66 m-auto">
    <div class="text-center text-uppercase mt-5">
        <h2 class="fw-bold">Nos produits</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mx-0 mx-md-5">';
    foreach ($products as $value) {
        include 'utilities/cards.php';
    }
    echo '</div>
        </section>';
}

// Inclusion du pied de page
include('utilities/footer.php');
?>
