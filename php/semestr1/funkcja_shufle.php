<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
            border: 1px, solid, dodgerblue;
            background-color: aliceblue;
            width: 100%;
            table-layout:fixed;
        }
        th{
            border-collapse:collapse;
            border: 1px, solid, dodgerblue;
            background-color: aliceblue;
            padding:10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
    <?php $funkcja = range(0,10);
      shuffle($funkcja);?>
      <?php foreach ($funkcja as $y) {
        echo "<th>". "$y". "</th>"; }
?>
</tr>
</table>
</body>
</html>