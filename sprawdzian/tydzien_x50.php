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
            border: limegreen solid 1px;
            padding: 6px;


        }
    </style>
</head>
<body>
    <form action="">
    <legend>Tygodnie</legend>
<table><tr><?php 
    $i = 1;
    do {
        echo "<td>To jest tydzień numer $i</td>";
        $i++;
    }
    while ($i <= 50);

    ?></tr>
<tr><?php 
    $i = 1;
    do {
        echo "<td><input type='submit' value='Wybierz'></td><br>";
        $i++;
    }
    while ($i <= 50);

    ?></tr>    
</table>
    </form>
</body>
</html>