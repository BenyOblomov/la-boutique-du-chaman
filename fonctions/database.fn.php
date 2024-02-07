<?php

function getPDOlink($config) {
    // 2) DSN de connexion :
    $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'];

    // 3) On va tenter de se connecter à la base de données :
    try {
        // On instancie l'objet PDO :
        $db = new PDO($dsn, $config['dbuser'], $config['dbpass']);

        // On envoie nos requetes en utf8 : 
        $db-> exec("SET NAMES utf8");

        // ON définit le monde de Fetch par défaut :
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $db;

    } catch (PDOException $e) {
        exit('BDD Erreur de connexion : ' . $e->getMessage());
    }
}