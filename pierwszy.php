<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $title = "Pierwsza strona z PHP-em";
    $link1 = "https://www.google.pl/";
    $link2 = "https://www.youtube.com/";
    ?>

    <h1><?=$title;?></h1>
    <ol>
        <li><a href="<?="link1";?>">google</a></li>
    </ol>


</body>
</html>