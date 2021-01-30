<?php
session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include("../class/Categorie.class.php");

//print_r($listUsers);

include('../models/UserModel.php');

$list = new UserModel();

$listUsers = $list->read();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php if (isset($_SESSION["id"])) : ?>
        <table border="1" class="table">
            <tr>
                <td><b>FirstName</b></td>
                <td><b>LastName</b></td>
                <td><b>email</b></td>
            </tr>

            <?php foreach ($listUsers as $user) : ?>
                <tr>
                    <td><?= $user->getFirstName() ?></td>
                    <td><?= $user->getLastName() ?></td>
                    <td><?= $user->getEmail() ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    <?php else: ?>
        <h2>Vous n'êtes pas connecté pour voir cette page</h2>
    <?php endif; ?>
</body>

</html>