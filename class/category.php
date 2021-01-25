<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of category
 *
 * @author lucas
 */
class category {
    private $wording;
    
    function getWording() {
        return $this->wording;
    }

    function setWording($wording): void {
        $this->wording = $wording;
    }
    
    private $listProducts = array();

}
