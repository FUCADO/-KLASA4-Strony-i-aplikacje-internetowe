<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-size: 220px;
            border: 20px solid;
            text-align:center;
            
        }
    </style>
</head>
<body>
    <?php $sekundy=date("s")?>
    <?php $kolor=$sekundy%2==0 ?'red':'blue';?>
    <strong><p style="color:<?=$kolor?>"><?php echo date("G:i:s")?></p></strong>
</body>
</html>
