<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST["number"]))
{
    echo '<p>Wybrałeś:</p>';
    echo '<p>'.$_POST["number"].'</p>';
    echo '<p>'.$_POST["waluta"].'</p>';
}
else
{
?>
    <form method="POST">
        <input name="number" type="number" id="kwota">
        <label for="kwota">Podaj kwote: </label>

        <select name="waluta" id="waluta">
            <option value="puste"></option>
            <option value="Dolar">Dolar</option>
            <option value="Euro">Euro</option>
            <option value="Frank szwajcarski">Frank szwajcarski</option>
            <option value="Funt szterling">Funt szterling</option>
        </select>
        <input type="submit" value="Wybierz">
    </form>
    <?php
}
    ?>
</body>
</html>