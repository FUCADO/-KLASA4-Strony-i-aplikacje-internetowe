<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'menu.php'; 
    if ($_SESSION['zalogowany'] ?? false) {
        include 'print_r.php';
    }else{
        echo"<p>Nie masz dostępu do tej strony. Zaloguj sie!</p>";
    }
    ?>
</body>
</html>