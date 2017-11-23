<?php
require("vue3.php");
?>
<?php
    if (isset($_GET['nom']))
        {
            $_SESSION['v4'] = $_GET['nom'];
            $_SESSION['v5'] = $_GET['prenom'];
            $_SESSION['v6'] = $_GET['age'];
        }
    ?>
