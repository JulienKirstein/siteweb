<?php

// We get the reservation values.
$_destination = get_destination();
$_number_places = get_number_places();
$_cancellation_insurance = get_cancellation_insurance();
$_names = get_names();
$_firstnames = get_firstnames();
$_ages = get_ages();


$mysqli = new mysqli('localhost', 'root', '', 'site_web');

if($mysqli->connect_errno > 0)
    {
        die('Unable to connect to database [' . $mysqli->connect_error . ']');
    }

// We get all the IDs from the table groupe in the data base "site web".
$query = "SELECT * FROM groupe";
$result = $mysqli -> query($query) or die("Query failed");
$liste = array();
while ($line = $result->fetch_array(MYSQLI_ASSOC))
{
    array_push($liste, $line['id']);
}

// We find the ID that we have to use.
$id_groupe = 1;
if (sizeof($liste) > 0)
{
    $id_groupe = max($liste)+1;
}
// We insert all the values of the reservation into the data base.
foreach (range(0, sizeof($_names)-1) as $i)
    {
        $sql = "INSERT INTO `groupe` (`id`, `nom`, `prenom`, `age`) VALUES ($id_groupe, '$_names[$i]', '$_firstnames[$i]', $_ages[$i]);";
        $mysqli->query($sql);
    }

$sql = "INSERT INTO `reservation` (`destination`,`groupe`, `assurance`) VALUES ('$_destination', $id_groupe, $_cancellation_insurance);";
$mysqli->query($sql);

$sql = "UPDATE destination SET total=total+$_number_places WHERE nom='$_destination'  ";
$mysqli->query($sql);