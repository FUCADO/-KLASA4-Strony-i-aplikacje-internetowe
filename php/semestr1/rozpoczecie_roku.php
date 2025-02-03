<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            background:lightsteelblue;
            border:2px,dotted, blueviolet;
            border-radius:20px;
            padding:15px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <p>Rozpoczęcie tego roku szkolnego odbyło się w <?php echo date("l", mktime(0, 0, 0, 9, 2, 2024)); ?> i był to 245 dzień roku. </p>
</body>
</html>