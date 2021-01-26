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
class Categorie {
    //put your code here
    
    private $wording;
    private $image;
    private $description;
    private $stock;
    
    
    
    //niveau 2 UML
    private $placeStorage;
    private $category;
    private $user;
    
    
    
    function __construct() {
        
    }


    function getWording() {
        return $this->wording;
    }

    function getImage() {
        return $this->image;
    }

    function getDescription() {
        return $this->description;
    }

    function getStock() {
        return $this->stock;
    }

    function getPlaceStorage() {
        return $this->placeStorage;
    }

    function getCategory() {
        return $this->category;
    }

    function getUser() {
        return $this->user;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setStock($stock) {
        $this->stock = $stock;
    }

    function setPlaceStorage($placeStorage) {
        $this->placeStorage = $placeStorage;
    }

    function setCategory($category) {
        $this->category = $category;
    }

    function setUser($user) {
        $this->user = $user;
    }



    
}
