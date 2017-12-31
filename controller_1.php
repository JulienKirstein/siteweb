<?php
// Load all the destinations from the data base.
require("model_1.php");
// If the number of places are equal to 0 (when the user just pressed "Faire une réservation"), we show a warning.
if ((int)$_SESSION['_number_places'] == 0)
    {
        echo "Le nombre de place(s) doit être un entier plus grand que 0.";
    }
require("view1.php");
?>