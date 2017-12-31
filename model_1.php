<?php

$mysqli = new mysqli('localhost', 'root', '', 'site_web');

if($mysqli->connect_errno > 0)
    {
        die('Unable to connect to database [' . $mysqli->connect_error . ']');
    }

$query = "SELECT * FROM destination";
$result = $mysqli -> query($query) or die("Query failed");
$listedestinations = array();
while ($line = $result->fetch_array(MYSQLI_ASSOC))
{
    array_push($listedestinations, $line['nom']);
}
// we put all the destination from the data base into a list that is accesible from this function.
function listedestinations()
    {
        return $listedestinations;
    }
