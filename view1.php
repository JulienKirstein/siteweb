<h1>RÉSERVATION</h1>
<p>Le prix de la place est de 10 euros jusqu'à 12 ans et ensuite de 15 euros.</p>
<p>Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.</p>

Destination:
<form method="get"/>
    <select name='trip'>
        <?php
            // Use the list of destinations to create the list button.
            foreach (range(0, sizeof($listedestinations)-1) as $i)
                {
                    // If the form was completed before, we reuse the value that the user selected.
                    echo "<option = ".str_repeat('selected', (int)($listedestinations[$i] == get_destination()))."
                    class='red' value=$listedestinations[$i]>$listedestinations[$i]</option>";
                }
        ?>
    </select><br>
    <!-- The number of places is equal to the value that the user used before(else it's empty) -->
    Nombre de place(s): <input type='text' name='places' value="<?= get_number_places() ?>"><br>
    <!-- We return the value "off" for the checkbox if it's not selected else we return "on" -->
    <input type='hidden' name='insurance' value='off'>
    <!-- We reuse the value that the user selected. -->
    Assurance annulation: <input type='checkbox' name='insurance' <?= get_cancellation_insurance() == 1 ? 'checked' : ''?>><br>
    <!-- Load the file "controller_2.php" -->
    <button type="submit" name="page" value="2">Etape suivante</button>
    <!-- Load the file "controller_0.php" -->
    <button type="submit" name="page" value="0">Annuler la réservation</button>
</form>