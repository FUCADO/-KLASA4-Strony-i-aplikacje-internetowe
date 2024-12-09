<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $parzyste = range(0,12,2);?>
    <pre><?php print_r($parzyste)?></pre>
    <?php foreach ($parzyste as $x) {
        echo "$x ";
    }?><br><br>
    <?php $dziesiatki = range(-10,100,10);?>
    <?php foreach ($dziesiatki as $y) {
        echo "$y ";
    }?><br><br>
    <?php $polowki = range(-5.5,5.5,0.5);?>
    <?php foreach ($polowki as $z) {
        echo "$z ";
    }?>
    <br><br>
    <?php $litery_od_em = range("m","u");?>
    <?php foreach ($litery_od_em as $a) {
        echo "$a ";
    }?>
    <br><br>
    <?php $litery_wstecz = range("x","e");?>
    <?php foreach ($litery_wstecz as $r) {
        echo "$r ";
    }?>
</body>
</html>