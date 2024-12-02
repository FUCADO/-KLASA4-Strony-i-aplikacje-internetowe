<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;

        }
        td{
            border: green solid 1px;
            background-color: greenyellow;
            padding: 10px;
        }
    </style>
</head>
<body>
<table><tr><?php 
    $i = 1;
    do {
        echo "<td>To jest kolumna numer $i</td>";
        $i++;
    }
    while ($i <= 5);

    ?></tr></table>
</body>
</html>