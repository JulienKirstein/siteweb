<h1>VALIDATION DES RESERVATIONS</h1>
    Destination: <?= getv1() ?><br>
    Nombre de places: <?= getv2() ?><br>

    <?php
    foreach (range(0, sizeof(getv4())-1) as $i)
        {
           echo "Nom: ".getv5()[$i]." ".getv4()[$i]."<br>";
           echo "Age: ".getv6()[$i]."<br>";
        }
    ?>
    Assurance annulation: <?= getv3() == "checked" ? "oui": "non" ?><br>

    <form method="get"/>
    <button type="submit" name="page" value="4">Confirmer</button>
    <button type="submit" name="page" value="2">Retour à la page précédente</button>
    <button type="submit" name="page" value="0">Annuler la reservation</button>
    </form>