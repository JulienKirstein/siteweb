<?php
    // If the variable $vindex exist, it means that the admin is modifying a reservation.
    // So we just load all the form to the session.
    if (isset($vindex))
        {
            $_SESSION['_destination'] = $_destination;
            $_SESSION['_number_places'] = $_number_places;
            $_SESSION['_cancellation_insurance'] = $_cancellation_insurance;
            $_SESSION['_names'] = $_names;
            $_SESSION['_firstnames'] = $_firstnames;
            $_SESSION['_ages'] = $_ages;
            $_SESSION['index'] = 1;
            require("view2.php");
        }
    else
        {
            // If we are coming from the "view1.php", we encode the value from the form to the session and prepare
            // our 3 lists for the passengers.
            if (isset($_GET['trip']))
                {
                    $_SESSION['_destination'] = $_GET['trip'];
                    $_SESSION['_number_places'] = $_GET['places'];
                    $_SESSION['index'] = $_SESSION['_number_places'];

                    if (sizeof($_SESSION['_names']) != $_SESSION['_number_places'])
                        {
                            $_SESSION['_names'] = [];
                            $_SESSION['_firstnames'] = [];
                            $_SESSION['_ages'] = [];
                            foreach (range(0, $_SESSION['_number_places']-1) as $number)
                                {
                                    array_push($_SESSION['_names'], '');
                                    array_push($_SESSION['_firstnames'], '');
                                    array_push($_SESSION['_ages'], '');
                                }
                        }
                }
            if (isset($_GET['insurance']))
                {
                    if ($_GET['insurance'] == "on")
                        {
                            $_SESSION['_cancellation_insurance'] = 1;
                        }
                    else
                        {
                            $_SESSION['_cancellation_insurance'] = 0;
                        }
                }
            // If the number of passengers isn't > 0, we come back to the previous view.
            if ((int)$_SESSION['_number_places'] <= 0)
                {
                    require("controller_1.php");
                }
            else
                {
                    require("view2.php");
                }
        }
?>