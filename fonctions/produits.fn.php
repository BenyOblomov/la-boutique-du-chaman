<?php

// La fonction findAllPotions récupère tous les enregistrements de potions de la table "products" à partir de la base de données fournie.
// Elle sélectionne uniquement les potions ayant un typeId égal à 2.
// Elle renvoie les résultats sous forme de tableau.

function findAllPotions($db) {
    $sqlPotions = "SELECT p.id AS id, p.name AS name, p.path AS path, p.description AS description, p.note AS note, p.price AS price, p.typeId AS typeId, t.id AS type FROM products p JOIN types t ON p.typeId = t.id WHERE typeId = 2;";
    $requetePotions = $db->query($sqlPotions);
    $potions = $requetePotions->fetchAll();
    return $potions;
}

// La fonction findAllPierres récupère tous les enregistrements de pierres de la table "products" à partir de la base de données fournie.
// Elle sélectionne uniquement les pierres ayant un typeId égal à 1.
// Elle renvoie les résultats sous forme de tableau.

function findAllPierres($db) {
    $sqlPierres = "SELECT p.id AS id, p.name AS name, p.path AS path, p.description AS description, p.note AS note, p.price AS price, p.typeId AS typeId, t.id AS type FROM products p JOIN types t ON p.typeId = t.id WHERE typeId = 1;";
    $requetePierres = $db->query($sqlPierres);
    $pierres = $requetePierres->fetchAll();
    return $pierres;
}

// La fonction findProductById récupère un enregistrement de produit de la table "products" à partir de son ID.
// Elle renvoie les résultats sous forme d'un tableau associatif.

function findProductById($db, $currentId) {
    $sql = "SELECT p.id AS id, p.name AS name, p.path AS path, p.description AS description, p.note AS note, p.price AS price, p.typeId AS typeId, t.id AS type FROM products p JOIN types t ON p.typeId = t.id WHERE p.id = $currentId";
    $requete = $db->query($sql);
    $product = $requete->fetch();
    return $product;
}

// La fonction getStar affiche des étoiles (notation) basées sur la note fournie.
// Elle divise la note par 2, puis affiche un nombre d'étoiles correspondant à la note, en ajoutant éventuellement une demi-étoile si nécessaire.

function getStar($rating) {
    $starRating = round(($rating));
    $note = ($starRating/2);
    $starSplit = explode('.',$note);
    $starNum = 0;
    
    for ($i=0; $i<$starSplit[0] ; $i++) { 
        echo '<i class="bi bi-star-fill text-warning"></i>';
        $starNum++;
    }
    
    if (isset($starSplit[1])) {
        echo '<i class="bi bi-star-half text-warning"></i>';
        $starNum++;
    }
    
    for ($i=0; $i < (5-$starNum) ; $i++) { 
        echo '<i class="bi bi-star text-warning"></i>';
        $starNum++;
    }
}

// La fonction searchProducts effectue une recherche dans la table "products" en fonction du terme de recherche fourni.
// Elle recherche le terme dans le nom et la description du produit, sans distinction entre majuscules et minuscules.
// Elle renvoie les résultats de la recherche sous forme de tableau.

function searchProducts($db, $search) {
    $sql = "SELECT * FROM products WHERE LOWER(name) LIKE LOWER('%$search%') || LOWER(description) LIKE LOWER('%$search%') ;";
    $requete = $db->query($sql);
    $products = $requete->fetchAll();
    return $products;
}

// La fonction OrderBy sélectionne tous les produits de la table "products" et les trie en fonction de la colonne spécifiée par le paramètre $sort.
// Elle renvoie les résultats triés sous forme de tableau.

function OrderBy($db, $sort) {
    $sql = "SELECT * FROM products ORDER BY $sort;";
    $requete = $db->query($sql);
    $products = $requete->fetchAll();
    return $products;
}

?>
