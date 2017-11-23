<h1>PASSAGER1</h1>

    <form method="get"/>
        Nom: <input type='text' name='nom' value="<?= $_SESSION['v4'] ?>"><br>
        Prenom: <input type='text' name='prenom' value="<?= $_SESSION['v5'] ?>"><br>
        Age: <input type='text' name='age' value="<?= $_SESSION['v6'] ?>"><br>
        <button type="submit" name="page" value="3">Etape suivante</button>
        <button type="submit" name="page" value="1">Retour a la page precedente</button>
        <button type="submit" name="page" value="0">Annuler la reservation</button>
    </form>