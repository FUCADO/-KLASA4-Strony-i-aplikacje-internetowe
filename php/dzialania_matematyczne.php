<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $x=5;
    $y=15;
    $a=4;
    $b=35;
    $r=16;
    $alfa=93;
     ?>

     <fieldset>
        <legend> AD 1</legend>
        <p>Wynik dodawania 5 i 15 wynosi: <?php echo 5+15; ?></p>
        <p>Wynik odejmowania 5 i 15 wynosi: <?php echo 5-15; ?></p>
        <p>Wynik mnożenia 5 i 15 wynosi: <?php echo 5*15; ?></p>
        <p>Wynik dzielenia 5 i 15 wynosi: <?php echo 5/15; ?></p>
        <p>Wynik dzielenie z resztą 5 i 15 wynosi: <?php echo 5%15; ?></p>
     </fieldset>
     <fieldset>
        <legend>AD 2</legend>
        <p>Pole prostokąta o bokach 4 i 35 wynosi: <?php echo $a*$b; ?> jednostek kwadratowcyh</p>
     </fieldset>
     <fieldset>
        <legend>AD 3</legend>
        <p>Pole koła o promieniu 16 wynosi: <?php echo $r*$r*3.14; ?> jednostek kwadratowcyh</p>
        <p>Obwód koła o promieniu 16 wynosi: <?php echo 2*3.14*$r; ?> jednostek kwadratowcyh</p>
        <p>Pole koła o promieniu 16 wynosi: <?php echo $r*$r*3.14; ?> jednostek kwadratowcyh</p>
     </fieldset>
</body>
</html>