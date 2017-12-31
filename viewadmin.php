<?php
// We show all the data base.
echo "<h1>LISTE DES RÉSERVATIONS: </h1>";
if (sizeof($liste) != 0)
    {
        foreach (range(0, sizeof($liste)-1) as $i)
            {
                echo $liste[$i][0]."<BR>";
                echo "Destination: ".$liste[$i][1]."<BR>";
                if ($liste[$i][2] == 1)
                    {
                        echo "Assurance annulation: Oui"."<BR>";
                    }
                else
                    {
                        echo "Assurance annulation: Non"."<BR>";
                    }
                foreach (range(3, sizeof($liste[$i])-1) as $j)
                    {
                        if ($j%3 == 0)
                            {
                                echo "Nom: ";
                            }
                        else if (($j-1)%3 == 0)
                            {
                                echo "Prénom: ";
                            }
                        else
                            {
                                echo "Age: ";
                            }
                        echo $liste[$i][$j];
                        echo "<BR>";
                    }
                echo "<form method='get'/>";
                // Foreach reservation, we add a button "supprimer" and a button "modifier".
                echo "<button type='submit' name='delete' value='".$liste[$i][0]."'>Supprimer</button> ";
                echo "<button type='submit' name='modify' value='".$liste[$i][0]."'>Modifier</button>";
                echo "</form>";
                echo "<BR><BR>";
            }
    }
else
    {
        echo "La base de donnée est vide.<BR><BR>";
    }
?>

<form method="get"/>
    <button type="submit" name="page" value="0">Menu Principal</button>
</form>