<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style=color:tomato>Aktualna godzina</h1>
    <p style=color:tomato><?php echo date("G:i:s") ?></p>
    <h1 style=color:navy>8 godzin później</h1>
    <p style=color:navy><?php echo date("G:i:s", strtotime('+8 hour')) ?></p>
</body>
</html>