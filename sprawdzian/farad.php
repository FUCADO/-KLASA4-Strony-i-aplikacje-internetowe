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
    echo '<p>Oto twój wybór: </p>'; echo '<p>'.$_POST["number"].'</p>';echo '<p>'.$_POST["waluta"].'</p>';echo '<p>faradów</p>';
   
    
    
}
else
{
?>
    <form method="POST">
    <label for="kwota">Podaj liczbe: </label>
        <input name="number" type="number" id="kwota">
       
<br><br>
        <label for="waluta">Wybierz przedrostek: </label>
        <select name="waluta" id="waluta">
            <option value="puste"></option>
            <option value="mili">mili</option>
            <option value="mikro">mikro</option>
            <option value="nano">nano</option>
            <option value="piko">piko</option>
        </select>
        <input type="submit" value="Wybierz">
    </form>
    <?php
}
    ?>
</body>
</html>