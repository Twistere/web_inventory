<?php

class user {
    
    private $wording;
    private $firstName;
    private $lastName;
    private $email;
    private $userName;
    private $password;
    
    function getWording() {
        return $this->wording;
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

    function getUserName() {
        return $this->userName;
    }

    function getPassword() {
        return $this->password;
    }

    function setWording($wording): void {
        $this->wording = $wording;
    }

    function setFirstName($firstName): void {
        $this->firstName = $firstName;
    }

    function setLastName($lastName): void {
        $this->lastName = $lastName;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setUserName($userName): void {
        $this->userName = $userName;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

        
    public function authentication()
    {
        
    }
    
    private $listProdutcs = array();
    
}
