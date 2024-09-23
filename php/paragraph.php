<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3{
            color: red;
        }
        p{
           color: #336ee1 
        }
        div{
           color: green
           
        }
    </style>
</head>
<body>
    <?php
    $a = 97;
    $b = 3.14;
    $c = 'PHP';
    ?>

<h3><?php echo $a ?> jest liczbą pierwszą</h3>
<p>Liczba Pi zaokrąglona do dowóch miejsc po przecinku: <?php echo $b ?></p>
<div><?php echo $c ?> to język skryptowy wykoany po stronie serwera</div>
</body>
</html>