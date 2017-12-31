<?php

// We get into "$liste" all the reservation that are into the data base.

$mysqli = new mysqli('localhost', 'root', '', 'site_web');
$query = "SELECT * FROM reservation";
$result = $mysqli -> query($query) or die("Query failed");
$liste = [];
$tampon = [];
while ($line = $result->fetch_array(MYSQLI_ASSOC))
    {

        array_push($tampon, $line['groupe']);
        array_push($tampon, $line['destination']);
        array_push($tampon, $line['assurance']);
        array_push($liste, $tampon);
        $tampon = [];
    }

if (sizeof($liste) != 0)
    {
    $query = "SELECT * FROM groupe";
    $result = $mysqli -> query($query) or die("Query failed");
    while ($line = $result->fetch_array(MYSQLI_ASSOC))
        {
            foreach (range(0, sizeof($liste)-1) as $i)
                {
                   if ($liste[$i][0] == $line['id'])
                    {
                        array_push($liste[$i], $line['nom']);
                        array_push($liste[$i], $line['prenom']);
                        array_push($liste[$i], $line['age']);
                    }
                }
        }
    }
?>