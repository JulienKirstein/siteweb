<!-- We load the css -->
<link rel="stylesheet" type="text/css" href="mystyle.css">
<?php

//router
if (!empty($_GET['page']) && is_file('controller_'.$_GET['page'].'.php'))
    {
        session_start();
        require("controller_general.php");
        include 'controller_'.$_GET['page'].'.php';
    }
else if (isset($_GET['delete']))
    {
        require("controller_general.php");
        require("controller_delete.php");
        require("viewadmin.php");
    }
else if (isset($_GET['modify']))
    {
        session_start();
        require("controller_general.php");
        require("controller_modify.php");
    }
else
    {
        // If we are coming back from a reservation, we destroy the current session.
        if (isset($_SESSION))
        {session_destroy;}
        session_start();
        $_SESSION['_destination'] = '';
        $_SESSION['_number_places'] = '';
        $_SESSION['_cancellation_insurance'] = '';
        $_SESSION['_names'] = [];
        $_SESSION['_firstnames'] = [];
        $_SESSION['_ages'] = [];
        $_SESSION['index'] = 1;
        include 'controller_0.php';
    }
?>