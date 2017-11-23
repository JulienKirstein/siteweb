<?php
require("vue2.php");
?>
<?php
    if (isset($_GET['cars']))
        {
            $_SESSION['v1'] = $_GET['cars'];
            $_SESSION['v2'] = $_GET['places'];
        }
    if (isset($_GET['assurance']))
        {
            $_SESSION['v3'] = "checked";
        }
    else
        {
            $_SESSION['v3'] = "";
        }
    ?>
