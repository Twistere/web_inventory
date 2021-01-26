<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Categorie
 *
 * @author lafosse
 */
class User {
    //put your code here
    

    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $userName;
     

    
    //niveau 2 UML
    private $listProducts = array();
    
    
    
    function __construct() {

    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getUserName() {
        return $this->userName;
    }

    function getListProducts() {
        return $this->listProducts;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setListProducts($listProducts) {
        $this->listProducts = $listProducts;
    }


    


}
