<?php
function findAllNetworks($db) {
    // Requête SQL pour sélectionner toutes les lignes de la table "reseaux"
    $sqlReseaux = "SELECT * FROM reseaux;";
    
    // Exécution de la requête SQL
    $requeteReseaux = $db->query($sqlReseaux);
    
    // Récupération de toutes les lignes résultantes sous forme de tableau
    $reseaux = $requeteReseaux->fetchAll();
    
    // Retourne le tableau contenant toutes les lignes de la table "reseaux"
    return $reseaux;
}
?>
