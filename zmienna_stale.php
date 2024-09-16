<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ciag_znakow = "Ala ma kota";
    $x = 50;
    $liczba_zmien = 10.113;
    $boolean = true;
    ?>

<?php echo "echo dla ciągu znaków: $ciag_znakow" ?> </br>
<?php echo "echo dla liczby całkowitej: $x" ?> </br>
<?php echo "echo dla liczby zmiennnej: $liczba_zmien" ?> </br>
<?php echo "echo dla boolowskiej: $boolean" ?> </br>

<p>var_dump dla ciągu znaków: <?php var_dump($ciag_znakow)?></p> 
<p>var_dump dla liczby: <?php var_dump($x)?></p> 
<p>var_dump dla liczby zmiennej: <?php var_dump($liczba_zmien)?></p> 
<p>var_dump dla boola: <?php var_dump($boolean)?></p> 

<?php 
define("pierwsza", "1994");
define("druga", "19");
?>
<p>print dla pierwszej stałej: <?php print pierwsza ?></p>
<p>print dla drugiej stałej: <?php print druga ?></p>
</body>
</html>