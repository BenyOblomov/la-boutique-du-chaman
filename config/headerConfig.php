<?php
// Je stocke le domaine de mon site
$domaine = 'localhost:8000/';

// ici je stocke mes url
$index_page = $domaine;
$produits_page = $domaine . 'produits.php';
$contact_page = $domaine . 'contact.php';
$mapage_page = $domaine . "mapage.php";
$page404_page = $domaine . "page404.php";
$add_page = $domaine . "addProduit.php";
$update_page = $domaine . "produitsAdmin.php";
$delete_page = $domaine . "deleteAdmin.php";

$index_name = "LA BOUTIQUE DU CHAMAN";
$produits_name = 'NOS PRODUITS';
$contact_name = 'CONTACTEZ NOUS';
$add_name = 'AJOUTER UN PRODUIT';
$update_name = 'MODIFIER UN PRODUIT';
$delete_name = 'SUPPRIMER UN PRODUIT';


// ici je stocke l'url sur laquelle nous sommes
$current_url = $_SERVER['SCRIPT_NAME'];

if (strpos($index_page, $current_url) !== false || strpos($index_page . 'index.php', $current_url) !== false) {
  $title = $index_name;
}
elseif (strpos($produits_page, $current_url)) {
  $title = $produits_name;
}
elseif (strpos($contact_page, $current_url)) {
  $title = $contact_name;
}
elseif (strpos($add_page, $current_url)) {
  $title = $add_name;
}
elseif (strpos($update_page, $current_url)) {
  $title = $update_name;
}
elseif (strpos($delete_page, $current_url)) {
  $title = $delete_name;
}