<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php define("DOBRA_RADA" , "Bez chleba, to się nie najesz.") ?>
    

<h3><?php echo DOBRA_RADA ?></h3>

<p>Do stałej DOBRA_RADA stosuję funkcję <strong>strlen:</strong><?php echo strlen(DOBRA_RADA);?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>str_word_count:</strong><?php      echo str_word_count(DOBRA_RADA);?> </p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>strrev:</strong><?php      echo strrev(DOBRA_RADA);?> </p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>strpos:</strong><?php      echo strpos(DOBRA_RADA, "to");?> </p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>str_replace:</strong><?php      echo str_replace("chleba", "mięsa", DOBRA_RADA);?> </p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>strtolower:</strong><?php      echo strtolower(DOBRA_RADA);?> </p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>strtoupper:</strong><?php      echo strtoupper(DOBRA_RADA);?> </p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>ucwords:</strong> <?php      echo ucwords(DOBRA_RADA);?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>trim:</strong> <?php      echo trim(DOBRA_RADA);?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>strstr:</strong> <?php      echo strstr(DOBRA_RADA, "nie");?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>substr:</strong> <?php      echo substr(DOBRA_RADA, 10, 5);?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <strong>str_pad: </strong><?php      echo str_pad(DOBRA_RADA, 41, "-_-");?></p>

</body>
</html>