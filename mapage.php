<?php 
// Inclusion des fichiers de configuration et des fonctions relatives à la base de données
require_once __DIR__ . ('/config/config.php');
require_once __DIR__ . ('/fonctions/database.fn.php');
// Établissement de la connexion à la base de données
$db = getPDOlink($config);

// Inclusion des fonctions relatives aux produits
require (__DIR__ . '/fonctions/produits.fn.php'); 

// Récupération de l'identifiant du produit à partir de l'URL
$currentId = $_GET['id'];
// Recherche du produit dans la base de données en fonction de son identifiant
$product = findProductById($db, $currentId);

// Vérification si l'identifiant du produit est défini dans l'URL ou si le produit n'existe pas
if (!isset($_GET['id']) || empty($product['id'])) {
    // Redirection vers la page d'accueil si l'identifiant du produit n'est pas défini ou s'il n'existe pas
    header("Location: /");
} else {
    // Définition du titre de la page avec le nom du produit
    $title = $product['name'];
}

// Inclusion de l'en-tête de la page
require (__DIR__ . '/utilities/header.php');
// Ajout d'un espace pour l'espacement
echo '<div class="py-4"></div>';
// Inclusion du contenu du produit
require (__DIR__ . '/utilities/card.php');
// Ajout d'un espace pour l'espacement
echo '<div class="py-4"></div>';
// Inclusion du pied de page
require (__DIR__ . '/utilities/footer.php');
?>
