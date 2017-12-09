<?php

//router
if (!empty($_GET['page']) && is_file('controler_'.$_GET['page'].'.php'))
    {
        session_start();
        include 'controler_'.$_GET['page'].'.php';
    }
else
    {
        if (isset($_SESSION))
        {session_destroy;}
        session_start();
        $_SESSION['v1'] = '';
        $_SESSION['v2'] = '';
        $_SESSION['v3'] = '';
        $_SESSION['v4'] = [];
        $_SESSION['v5'] = [];
        $_SESSION['v6'] = [];
        $_SESSION['index'] = 1;
        include 'controler_0.php';
    }
?>