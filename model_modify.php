<?php

$_destination = "";
$_number_places = 0;
$_cancellation_insurance = 0;
$_names = [];
$_firstnames = [];
$_ages = [];

// We prepare the date that we have to put into the forms by using the session.

$mysqli = new mysqli('localhost', 'root', '', 'site_web');

if($mysqli->connect_errno > 0)
    {
        die('Unable to connect to database [' . $mysqli->connect_error . ']');
    }

$n_passenger = 0;
$query = "SELECT * FROM groupe";
$result = $mysqli -> query($query) or die("Query failed");
while ($line = $result->fetch_array(MYSQLI_ASSOC))
{
    if ($line['id'] == $to_delete)
        {
            array_push($_names, $line['nom']);
            array_push($_firstnames, $line['prenom']);
            array_push($_ages, $line['age']);
            $n_passenger += 1;
        }
}
$vindex = $n_passenger;
$query = "SELECT * FROM reservation";
$result = $mysqli -> query($query) or die("Query failed");
while ($line = $result->fetch_array(MYSQLI_ASSOC))
    {
        if ($line['groupe'] == $to_delete)
            {
                $_destination = $line['destination'];
                $_number_places = $n_passenger;
                $_cancellation_insurance = $line['assurance'];
            }
    }
?>