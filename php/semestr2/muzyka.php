<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        legend{
            border-left: solid 4px lightgreen;
            border-right: solid 4px lightgreen;

        }
        fieldset{
            border:solid 4px lightgreen;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Najlepszy rok w muzyce:</legend>
        <form action="muzyka.php" method="post">
            <label for="rok">Wybierz najlepszy rok w muzyce:</label>
            <select name="rok" id="rok">
            <option value=""></option>
            <?php 
            foreach (range(1500,2020) as $rok)
            {
            $selected = ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['rok'] == $rok) ? 'selected' : '';
            echo '<option'. $selected . 'value"' .$rok . '"> ' . $rok . '</option>';
}
            ?>
            </select>
            <br><br>

            <input type="submit" value="Wybierz najlepszy rok w muzyce">

        </form>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            else $_POST = $rok
        }
        ?>
    </fieldset>
</body>
</html>