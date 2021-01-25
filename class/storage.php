<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of storage
 *
 * @author lucas
 */
class storage {
    private $wording;
    function getWording() {
        return $this->wording;
    }

    function setWording($wording): void {
        $this->wording = $wording;
    }

    
    private $listProducts = array();

}
