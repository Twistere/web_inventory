<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author lucas
 */
class product {
    private $wording;
    private $image;
    private $description;
    private $stock;
    
    function getWording() {
        return $this->wording;
    }

    function getImage() {
        return $this->image;
    }

    function getDescription() {
        return $this->description;
    }

    function getPlaceStorage() {
        return $this->placeStorage;
    }

    function getStock() {
        return $this->stock;
    }

    function setWording($wording): void {
        $this->wording = $wording;
    }

    function setImage($image): void {
        $this->image = $image;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setPlaceStorage($placeStorage): void {
        $this->placeStorage = $placeStorage;
    }

    function setStock($stock): void {
        $this->stock = $stock;
    }

    private $category;
    
    private $placeStorage;
    
    
}
