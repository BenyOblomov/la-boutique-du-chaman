<?php

// La fonction findAllMedecins récupère tous les enregistrements de la table "medecins" à partir de la base de données fournie.
// Elle prend un objet de connexion à la base de données en tant que paramètre.
// Elle exécute une requête SQL pour sélectionner tous les enregistrements de la table "medecins".
// Ensuite, elle récupère tous les résultats de la requête et les retourne sous forme de tableau.

function findAllMedecins($db) {
    // Requête SQL pour sélectionner tous les enregistrements de la table "medecins"
    $sqlMedecins = "SELECT * FROM medecins;";
    
    // Exécution de la requête SQL
    $requeteMedecins = $db->query($sqlMedecins);
    
    // Récupération de tous les enregistrements résultants sous forme de tableau
    $medecins = $requeteMedecins->fetchAll();
    
    // Retourne le tableau contenant tous les enregistrements de la table "medecins"
    return $medecins;
}

?>
