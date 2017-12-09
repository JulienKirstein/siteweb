<h1>RESERVATION</h1>
    <p>Le prix de la place est de 10 euros jusqu'a 12ans et ensuite de 15 euros.</p>
    <p>Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.</p>

    Destination:
    <form method="get"/>
        <select name='cars'>
            <option <?= str_repeat("selected", (int)('volvo' == getv1())) ?> value='volvo'>Volvo XC90</option>
            <option <?= str_repeat("selected", (int)('saab' == getv1())) ?> value='saab'>Saab 95</option>
            <option <?= str_repeat("selected", (int)('mercedes' == getv1())) ?> value='mercedes'>Mercedes SLK</option>
            <option <?= str_repeat("selected", (int)('audi' == getv1())) ?> value='audi'>Audi TT</option>
        </select><br>

        Nombre de places: <input type='text' name='places' value="<?= getv2() ?>"><br>
        <input type='hidden' name='assurance' value='off'>
        Assurance annulation: <input type='checkbox' name='assurance' <?= getv3() ?>><br>
        <button type="submit" name="page" value="2">Etape suivante</button>
        <button type="submit" name="page" value="0">Annuler la reservation</button>
    </form>