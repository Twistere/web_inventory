<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategorieModel
 *
 * @author lafosse
 */
include("connexion.php");
include("../class/User.class.php");



class UserModel {

    //put your code here
    private $db;

    function __construct() {
        $this->db = connexion();
    }

    // SQL to Object ORM
    public function wrapper($row) {
        $user = new User();
       
        $user->setLastName($row["lastName"]);
        $user->setFirstName($row["firstName"]);
        $user->setEmail($row["email"]);
        $user->setPassword($row["password"]);
        $user->setUserName($row["userName"]);
        return $user;
    }

    
    
    public function create($user) {
        $stmt = $this->db->prepare("INSERT INTO user(firstName,lastName, email, password, userName) VALUES(:firstName,:lastName,:email,:password,:userName)");
        $stmt->bindValue(':firstName', $user->getFirstName());
        $stmt->bindValue(':lastName', $user->getLastName());
        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':password', $user->getPassword());
        $stmt->bindValue(':userName', $user->getuserName());
        $stmt->execute();
    }
    
    
    

    function read() {
        $listeUsers = array();

        $stmt = $this->db->query("SELECT * FROM user ORDER BY lastName DESC");
        //retourner la liste sous forme d'objets FETCH_LAZY
        while ($row = $stmt->fetch()) {
            $user = $this->wrapper($row);
            $listeUsers[] = $user;
        }
        return $listeUsers;
    }

    
    public function delete($idUser) {
        $sql = "DELETE FROM user WHERE idUser=$idUser";
        $this->db->query($sql);
    }

}
