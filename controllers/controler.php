<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/CategorieModel.php';



// instance du modele
$cm=new CategorieModel();





// recuperer l'action
$action=filter_input(INPUT_GET, 'action');

if($action=="clicajout"){
  // formulaire d'ajout
    include("../views/editerCategorie.php");  
    exit();
}


if($action=="supprimer"){

    // recup id
    $idCategorie=filter_input(INPUT_GET, 'idCategorie');
    // appel du modele et suppression
    $cm->supprimerCategorie($idCategorie);
    // rechager la page
    header("Location:controler.php");
    exit();
    
    
}




// clic sur ok validation de l'ajout
if($action=="validerajouter"){ 
    
    $libelle=filter_input(INPUT_POST, 'libelle');

    // verification des saisies 
    $categorie=new Categorie();
    $categorie->setLibelle($libelle);

    // appel du modele
    $cm->ajouterCategorie($categorie);
    
    // rechager la page
    header("Location:controler.php");
    exit();
}




// liste des categories
$listeCategorie=$cm->listeCategorie();
// appel de la vue
include("../views/listeCategorie.php");








