<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
	<!-- BOOTSTRAP STYLES-->
    <link href="../views/assets/css/bootstrap.css" rel="stylesheet" />
     
    <link href="../views/assets/css/font-awesome.css" rel="stylesheet" />
        
    <link href="../views/assets/css/custom.css" rel="stylesheet" />
    
</head>

<body>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include("../class/Categorie.class.php");

//print_r($listUsers);

include '../models/UserModel.php';

$list = new UserModel();

$listUsers = $list->read();

//echo "<a href=\"controler.php?action=clicajout\">Ajouter</a><br/>";

// Affichage du tableau des categories
echo "<table border=\"1\" class=\"table\">";
echo "<tr><td><b>FirstName</b></td><td><b>LastName</b></td><td><b>email</b></td></tr>";
foreach($listUsers as $user){    
    echo "<tr>";
    echo "<td>".$user->getFirstName()."</td><td>".$user->getLastName()."</td><td>".$user->getEmail()."</td>";
//    echo "<td><a href=\"controler.php?action=supprimer&idCategorie=".$user->getIdUser()."\"><img width=\"32\" height=\"32\" src=\"../img/trash.png\"/></a></td>";

    echo "</tr>";
}
echo "</table>";


?>
</body>
</html>