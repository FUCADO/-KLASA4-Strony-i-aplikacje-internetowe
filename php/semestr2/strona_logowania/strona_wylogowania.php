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
    <?php
    include 'menu.php';
    if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
        session_unset();
        session_destroy();
        echo "<p>Wylogowano pomyślnie!</p>";

    }
    ?>
    <form method="post">
        <input type="submit" value="Wyloguj">
    </form>
    <?php include 'print_r.php'; ?>
</body>
</html>