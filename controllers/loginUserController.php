<?php
include_once('../models/UserModel.php');

$um = new UserModel();

$um->userExist($_POST['email'], $_POST['password']);