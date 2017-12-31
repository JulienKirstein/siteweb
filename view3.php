<h1>VALIDATION DES RÉSERVATIONS</h1>
<!-- We show all the characteristic from the reservation. -->
Destination: <?= get_destination() ?><br>
Nombre de places: <?= get_number_places() ?><br>

<?php
foreach (range(0, sizeof(get_names())-1) as $i)
    {
       echo "Nom: ".get_firstnames()[$i]." ".get_names()[$i]."<br>";
       echo "Age: ".get_ages()[$i]."<br>";
    }
?>
Assurance annulation: <?= get_cancellation_insurance() == 1 ? "oui": "non" ?><br>

<form method="get"/>
    <!-- If the user click on the button "Confirmer", we load the "controller_4.php". -->
    <button type="submit" name="page" value="4">Confirmer</button>
    <!-- If the user click on the button "Retour à la page précédente", we load the "controller_2.php". -->
    <button type="submit" name="page" value="2">Retour à la page précédente</button>
    <!-- If the user click on the button "Annuler la réservation", we load the "controller_0.php". -->
    <button type="submit" name="page" value="0">Annuler la réservation</button>
</form>