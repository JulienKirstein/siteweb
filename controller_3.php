<?php
// If the user just fill the form for the last passenger, we encode the values then we check if it's correct.
// If it is, we load the "vue3.php" else we load the "controller_2.php".
if (isset($_GET['name']))
    {
        $_SESSION['_names'][$_SESSION['index']-1] = $_GET['name'];
        $_SESSION['_firstnames'][$_SESSION['index']-1] = $_GET['firstname'];
        $_SESSION['_ages'][$_SESSION['index']-1] = $_GET['age'];
    }
?>
<?php
try
    {
        if ($_SESSION['_names'][$_SESSION['index']-1] == "")
            {
                echo "Un passager doit avoir un Nom.<br/>";
                require("controller_2.php");
            }
        else if ($_SESSION['_firstnames'][$_SESSION['index']-1] == "")
            {
                echo "Un passager doit avoir un Prenom.<br/>";
                require("controller_2.php");
            }
        else if ((int)$_SESSION['_ages'][$_SESSION['index']-1] == 0)
            {
                if ($_SESSION['_ages'][$_SESSION['index']-1] != "0")
                    {
                        echo "L'age d'un passager doit être un entier supérieur ou égale à 0.<br/>";
                        require("controller_2.php");
                    }
                else
                    {
                        require("view3.php");
                    }
            }
        else if ($_SESSION['_ages'][$_SESSION['index']-1] < 0)
            {
                echo "L'age d'un passager doit être un entier supérieur ou égale à 0.<br/>";
                require("controller_2.php");
            }
        else if ((int)max($_SESSION['_ages']) < 18)
            {
                echo "Au moin un des passagers doit être majeur.";
                require("controller_2.php");
            }
        else
            {
                require("view3.php");
            }
    }
catch(Exception $e)
    {
    }
?>