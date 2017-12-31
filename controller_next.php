<?php
// add the previous passenger in the respective list.
$_SESSION['_names'][$_SESSION['index']-1] = $_GET['name'];
$_SESSION['_firstnames'][$_SESSION['index']-1] = $_GET['firstname'];
$_SESSION['_ages'][$_SESSION['index']-1] = $_GET['age'];

// Check if the values are OK and put warning if not.
if ($_SESSION['_names'][$_SESSION['index']-1] == "")
    {
        echo "Un passager doit avoir un Nom.<br/>";
        $_SESSION['index'] += 0;
    }
else if ($_SESSION['_firstnames'][$_SESSION['index']-1] == "")
    {
        echo "Un passager doit avoir un Prénom.<br/>";
        $_SESSION['index'] += 0;
    }
else if ((int)$_SESSION['_ages'][$_SESSION['index']-1] == 0)
    {
        if ($_SESSION['_ages'][$_SESSION['index']-1] != "0")
            {
                echo "L'âge d'un passager doit être un entier supérieur ou égale à 0.<br/>";
                $_SESSION['index'] += 0;
            }
        else
            {
                $_SESSION['index'] -= 1;
            }
    }
else if ($_SESSION['_ages'][$_SESSION['index']-1] < 0)
    {
        echo "L'âge d'un passager doit être un entier supérieur ou égale à 0.<br/>";
        $_SESSION['index'] += 0;
    }
else
    {
        $_SESSION['index'] -= 1;
    }
require("controller_2.php");
?>