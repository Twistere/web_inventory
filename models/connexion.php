<?php


function connexion() {
    try{
        // Connexion à la base
        $db = new PDO('mysql:host=127.0.0.1;port=8889;dbname=crud', 'mamp', 'root');
        // Affiche les erreurs 
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->exec('SET NAMES "UTF8"');
    } catch (PDOException $e){
        echo 'Erreur : '. $e->getMessage();
        die();
    }
    return $db;
}
