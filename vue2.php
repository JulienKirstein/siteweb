<h1>PASSAGER<?= getv2() - getindex() +1 ?></h1>
    <form method="get"/>
        Nom: <input type='text' name='nom' value="<?= getv4()[getindex()-1] ?>"><br>
        Prenom: <input type='text' name='prenom' value="<?= getv5()[getindex()-1] ?>"><br>
        Age: <input type='text' name='age' value="<?= getv6()[getindex()-1] ?>"><br>
        <button type="submit" name="page" value=<?= (getindex() == 1) ? '3' : 'suivant'; ?>>Etape suivante</button>
        <button type="submit" name="page" value=<?= (getindex() == getv2()) ? '1' : 'retour'; ?>>Retour a la page precedente</button>
        <button type="submit" name="page" value="0">Annuler la reservation</button>
    </form>