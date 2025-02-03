<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style=color:chocolate; style=border-color:chocolate;>
        <?php echo date("m.d.y") ?>
    </fieldset>
    <fieldset style=color:DarkGoldenRod; style=border-color:DarkGoldenRod;>
        <?php echo date("m.d.y", strtotime('+100 day')); ?>
    </fieldset>
</body>
</html>