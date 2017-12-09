<?php
    function getv1()
    {
        return $_SESSION['v1'];
    }

    function getv2()
    {
        return $_SESSION['v2'];
    }

    function getv3()
    {
        return $_SESSION['v3'];
    }

    function getv4()
    {
        return $_SESSION['v4'];
    }

    function getv5()
    {
        return $_SESSION['v5'];
    }

    function getv6()
    {
        return $_SESSION['v6'];
    }
?>
<?php
    if (isset($_GET['nom']))
        {
            $_SESSION['v4'][$_SESSION['index']-1] = $_GET['nom'];
            $_SESSION['v5'][$_SESSION['index']-1] = $_GET['prenom'];
            $_SESSION['v6'][$_SESSION['index']-1] = $_GET['age'];
        }
?>
<?php
require("vue3.php");
?>