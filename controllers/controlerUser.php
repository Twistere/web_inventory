<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/UserModel.php';



// instance du modele
$um=new UserModel();

//mon backing bean
//$user=new User();
//$user->setLastName("MARTIN");
//$user->setFirstName("PIERRE");


//appel du modèle
//$um->create($user);


//test du read
//$listeUsers=$um->read();
////afficher mes users
//foreach ($listeUsers as $key => $object) {
//   echo "Voici l'utilisateur : <b>".$object->getLastName()."</b> ".$object->getFirstName()."<br/>";
//}



//delete
//$um->delete(3);






// recuperer l'action
$action=filter_input(INPUT_GET, 'action');

//if($action=="clicajout"){
//  // formulaire d'ajout
//    include("../views/editerCategorie.php");  
//    exit();
//}


// clic sur ok validation de l'ajout
if($action=="validateAdd"){ 
    
    $firstName=filter_input(INPUT_POST, 'firstName');
    $lastName=filter_input(INPUT_POST, 'lastName');


    if($firstName==""){
        echo "ATTENTION first est vide <br/>";
    }
    
    
    // verification des saisies 
    $user=new User();
    $user->setFirstName($firstName);
    $user->setLastName($lastName);


    // appel du modele
    $um->create($user);
    
    // rechager la page
    //header("Location:controler.php");
    exit();
}



// liste des utilisateurs
$listUsers=$um->read();
// appel de la vue
include("../views/listUser.php");






/*
if($action=="supprimer"){

    // recup id
    $idCategorie=filter_input(INPUT_GET, 'idCategorie');
    // appel du modele et suppression
    $cm->supprimerCategorie($idCategorie);
    // rechager la page
    header("Location:controler.php");
    exit();
    
    
}












*/





