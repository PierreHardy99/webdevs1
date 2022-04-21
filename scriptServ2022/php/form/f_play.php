<fieldset>
    <legend>Deviner le nombre aléatoire</legend>
    <form action="index.php?view=action/play" method="post">
        <label for="num">Je choisi mon nombre entre 0 et 100</label>
        <select name="num" id="num">
            <?=$options?>
        </select>
        <input type="submit" value="Tenter ma chance">
    </form>
</fieldset>