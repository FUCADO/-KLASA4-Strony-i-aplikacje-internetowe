<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $string = "Życie  jest to opowieść idioty, pełna wrzasku i wśkiekłości, nic nie znacząca" ?>
    <p>Cytat: <q><?php echo $string ?></q></p>
    <p>Liczba wyrazów: <?php echo str_word_count($string)?></p>
</body>
</html>