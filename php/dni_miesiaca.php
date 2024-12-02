<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <?php echo date("t"); ?>
    <table><?php
    for ($i = 1; $i <= 31; $i++) {
        echo "<tr><td>$i</td></tr>";
    }
    ?></table>
</body>
</html>