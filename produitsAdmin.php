<?php 
// Inclusion de l'en-tête de la page
include('utilities/header.php');
// Inclusion du fichier contenant les fonctions relatives aux produits
require_once __DIR__ . ('/fonctions/produits.fn.php');
// Inclusion de l'en-tête de la page
include('utilities/forms.php');
// Vérification si aucun tri ni recherche n'est effectué
if ((isset($_POST['trier']) == FALSE) && (isset($_POST['search']) == FALSE)) {
    // Récupération de toutes les potions
    $potions = findAllPotions($db);
    // Affichage des potions
    $sectionTitle='Nos potions';
    include 'utilities/section.php';
    foreach ($potions as $value) {
        include 'utilities/cardsAdmin.php';
    }
    include 'utilities/sectionCloser.php';
    // Récupération de toutes les pierres
    $pierres = findAllPierres($db);
    // Affichage des pierres
    $sectionTitle='Nos pierres';
    include 'utilities/section.php';
    foreach ($pierres as $value) {
        include 'utilities/cardsAdmin.php';
    }
    include 'utilities/sectionCloser.php';

} else {
    if (isset($_POST['trier']) == FALSE) {
        $search = $_POST['search'];
        $sort = 'name';
    } else {
        $search ='';
        $sort = $_POST['trier'];
    }
    $products = filters($db, $search, $sort);
        // Affichage des produits trouvés
    $sectionTitle='Nos produits';
    include 'utilities/section.php';
    foreach ($products as $value) {
        include 'utilities/cardsAdmin.php';
    }
    include 'utilities/sectionCloser.php';
}

// Inclusion du pied de page
include('utilities/footer.php');
?>
