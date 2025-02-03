<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
            border: solid 1px black;
        }
        td{
            border-collapse:collapse;
            border: solid 1px gray;
            background-color: lightgray;
            padding: 10px;

        }
    </style>
</head>
<body>
<table><?php 
    $i = 1;
    while ($i <= 5) {

        echo "<tr><td>To jest wiersz numer $i</td></tr>";
        $i++;
    }
    ?></table>
</body>
</html>