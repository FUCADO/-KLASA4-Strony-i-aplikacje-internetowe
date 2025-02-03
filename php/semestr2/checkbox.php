<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: solid 3px blue;
            padding: 15px;
            background-color: aliceblue;
        }
    </style>
</head>
<body>
<legend>Alfabet</legend>
    <form method="GET" action="formularz_akcja.html">

<?php $litery = range('a','z');?>
<?php foreach ($litery as $x) {
    echo '<input type="checkbox">'. $x . '';
}?>

<input id="wyslij" type="submit">


</form>
</body>
</html>
