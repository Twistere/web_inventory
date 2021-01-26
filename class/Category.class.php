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
class Category {
    //put your code here
    

    private $wording;

    
    //niveau 2 UML
    private $listProducts = array();
    
    
    
    function __construct() {

    }

    function getWording() {
        return $this->wording;
    }

    function getListProducts() {
        return $this->listProducts;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setListProducts($listProducts) {
        $this->listProducts = $listProducts;
    }


}
