<?php

if (isset($_POST["page0"]))
    {
        if ($_POST["page0"] == "Faire une réservation")
        {
            $var = 1;
        }
    }
else if (isset($_POST["page1"]))
    {
        if ($_POST["page1"] == "Etape suivante")
        {
            $var = 2;
        }
        else if ($_POST["page1"] == "Annuler la reservation")
        {
            $var = 0;
        }
    }
else if (isset($_POST["page2"]))
    {
        if ($_POST["page2"] == "Etape suivante")
        {
            $var = 3;
        }
        else if ($_POST["page2"] == "Retour a la page precedente")
        {
            $var = 1;
        }
        else if ($_POST["page2"] == "Annuler la reservation")
        {
            $var = 0;
        }
    }
else if (isset($_POST["page3"]))
    {
        if ($_POST["page3"] == "Confirmer")
        {
            $var = 4;
        }
        else if ($_POST["page3"] == "Retour a la page precedente")
        {
            $var = 2;
        }
        else if ($_POST["page3"] == "Annuler la reservation")
        {
            $var = 0;
        }
    }
else
    {
         $var = 0;
    }

require("vue".$var.".php");
