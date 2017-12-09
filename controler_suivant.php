<?php
$_SESSION['v4'][$_SESSION['index']-1] = $_GET['nom'];
$_SESSION['v5'][$_SESSION['index']-1] = $_GET['prenom'];
$_SESSION['v6'][$_SESSION['index']-1] = $_GET['age'];
$_SESSION['index'] -= 1;
require("controler_2.php");
?>