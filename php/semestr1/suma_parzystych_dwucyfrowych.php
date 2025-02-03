<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-style: Arial;
            color: cornflowerblue;
            font-size: large;
            text-shadow: 1px 1px blue;
        }
    </style>
</head>
<body>
  <p> <?php
    $sum=0;
    for ($i = 10; $i <= 99; $i++) {
        if($i%2==0){
            print("$i\n"."|");
            $sum += $i;
        }
    }
?>
</br>
</br>
<?php
    echo "suma powyższych liczb jest równa $sum" ;
    ?></p> 
</body>
</html>