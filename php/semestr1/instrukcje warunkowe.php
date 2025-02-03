<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2,h4{
            text-align:center;
        }
    </style>
</head>
<body>
    <h2 style=color:darkorchid;><?php
    $losowa=(rand(1,30));
    print ($losowa);
    ?></h2>
    <br>
    <h4 style=color:magenta;><?php if ($losowa>=20)
                                      echo("Wylosowana liczba jest większa lub równa 20")?></h4>
    <br>
    <h4 style=color:navy;><?php if ($losowa%2==0) {
                               echo ("Wylosowana liczba jest parzysta");
                               }
                               else {
                               echo ("Wylosowana liczb jest nie parzysta");
                               }
                               ?></h4>
    <br>
    <h4 style=color:deeppink;><?php if($losowa<=10) {
                                     echo ("Pierwsza dziesiątka");
}
 elseif($losowa<=20) {
    echo ("Druga dziesiątka");
 }
 else {
    echo ("trzecia dziesiątka");
 }
    ?></h4>
</body>
</html>