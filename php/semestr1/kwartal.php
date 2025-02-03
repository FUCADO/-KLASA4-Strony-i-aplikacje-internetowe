<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
            border-top:2px dotted pink;
            border-bottom:2px dotted pink;
            
        }
        
        h3{
            text-align:center;
            border-top:2px dashed pink;
            border-bottom:2px dashed pink;
            font-family:cursive;
        }

    </style>
</head>
<body>
    <?php $miesiac=(rand(1,15)); ?>
   <h1><?php print $miesiac ?></h1>

    <h3>
<?php
switch($miesiac){
    case 1:
    case 2:
    case 3:
        echo "I kwartał";
        break;
    case 4:
    case 5:
    case 6:
        echo "II kwartał";
        break;
    case 7:
    case 8:
    case 9:
        echo "III kwartał";
        break;
    case 10:
    case 11:
    case 12:
        echo "IV kwartał";
        break;
    case 13:
    case 14:
    case 15:
        echo "Błędny numer miesiąca";
        break;
}
?>

    </h3>
</body>
</html>