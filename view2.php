<h1>PASSAGER <?= get_number_places() - getindex() +1 ?></h1>
<form method="get"/>
    <!-- If the user did write the value before, we reuse it by loading the right element of the lists. -->
    Nom: <input type='text' name='name' value="<?= get_names()[getindex()-1] ?>"><br>
    Prénom: <input type='text' name='firstname' value="<?= get_firstnames()[getindex()-1] ?>"><br>
    Age: <input type='text' name='age' value="<?= get_ages()[getindex()-1] ?>"><br>
    <!-- If the index is equal to 1, we load the "controller_3.php", else we load "controller_next.php". -->
    <button type="submit" name="page" value=<?= (getindex() == 1) ? '3' : 'next'; ?>>Etape suivante</button>
    <!-- If the index is equal to get_number_places(), we load the "controller_1.php", else we load "controller_return.php". -->
    <button type="submit" name="page" value=<?= (getindex() == get_number_places()) ? '1' : 'return'; ?>>
    Retour à la page précédente</button>
    <!-- Button to cancel the reservation -->
    <button type="submit" name="page" value="0">Annuler la réservation</button>
</form>