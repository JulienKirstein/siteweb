<?php
$mysqli = new mysqli('localhost', 'root', '', 'site_web');

if($mysqli->connect_errno > 0)
    {
        die('Unable to connect to database [' . $mysqli->connect_error . ']');
    }

// We find the number of people that have the same id (the ID that we have to delete).
$query = "SELECT * FROM groupe";
$result = $mysqli -> query($query) or die("Query failed");
$number_people = 0;
while ($line = $result->fetch_array(MYSQLI_ASSOC))
    {
        if ($to_delete == $line['id'])
            {
                $number_people = $number_people + 1;
            }
    }

// We Update the number of people for the given destination.
$query = "SELECT * FROM reservation";
$result = $mysqli -> query($query) or die("Query failed");

while ($line = $result->fetch_array(MYSQLI_ASSOC))
    {
        if ($to_delete == $line['groupe'])
            {
                $sql = "UPDATE destination SET total=total-".$number_people." WHERE nom='".$line['destination']."'";
                $mysqli->query($sql);
            }
    }
// We delete all the lines that matchs this ID.
$sql = "DELETE FROM groupe WHERE id=".$to_delete.";";
$mysqli->query($sql);

$sql = "DELETE FROM reservation WHERE groupe=".$to_delete.";";
$mysqli->query($sql);
?>