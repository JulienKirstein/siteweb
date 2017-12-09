<?php
    function getindex()
    {
        return $_SESSION['index'];
    }

    function getv2()
    {
        return $_SESSION['v2'];
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
    if (isset($_GET['cars']))
        {
            $_SESSION['v1'] = $_GET['cars'];
            $_SESSION['v2'] = $_GET['places'];
            $_SESSION['index'] = $_SESSION['v2'];

            // Tout supprimer quand on reviens à un certain endroit ?
            $_SESSION['v4'] = [];
            $_SESSION['v5'] = [];
            $_SESSION['v6'] = [];
            foreach (range(0, $_SESSION['v2']-1) as $number)
                {
                    array_push($_SESSION['v4'], '');
                    array_push($_SESSION['v5'], '');
                    array_push($_SESSION['v6'], '');
                }
        }
    if (isset($_GET['assurance']))
        {
            if ($_GET['assurance'] == "on")
            {
                $_SESSION['v3'] = "checked";
            }
            else
            {
                $_SESSION['v3'] = "";
            }
        }
    require("vue2.php");
?>