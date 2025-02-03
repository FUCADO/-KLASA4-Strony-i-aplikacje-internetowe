<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-family: Courier New
        }
    </style>
</head>
<body>
    <?php 
    $a = 15;
    $b = 8;
    ?>

    <p><strong>Długość przeciwprostokątnej trójkąta prostokątnego o przyprostokątnych długości<?php echo $a?> i <?php echo $b?> wynosi:  <?php echo sqrt(($a*$a) + ($b*$b)) ?></strong></p>

</body>
</html>