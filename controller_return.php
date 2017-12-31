<?php
// Memorize the user input for the current passenger then come back to the view.
$_SESSION['_names'][$_SESSION['index']-1] = $_GET['name'];
$_SESSION['_firstnames'][$_SESSION['index']-1] = $_GET['firstname'];
$_SESSION['_ages'][$_SESSION['index']-1] = $_GET['age'];
$_SESSION['index'] += 1;
require("controller_2.php");
?>