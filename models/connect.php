<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connect
 *
 * @author lucas
 */
class connect {

    function __construct() {
        try {
            // Connexion à la base
            $db = new PDO('mysql:host=127.0.0.1;port=8889;dbname=crud', 'mamp', 'root');
            // Affiche les erreurs 
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
        
        return $db;
    }

}
