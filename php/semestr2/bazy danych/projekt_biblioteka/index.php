<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "include/db_connection.php"; ?>
    <nav></nav>

    <main>
    <?php if (isset($_GET['page']))
        {
            if (file_exists('pages/' . $_GET['page'] . '.php'))
            {
                include 'pages/' . $_GET['page'] . '.php';
            }
            else
            {
                echo '<h1>Nie znaleziono żądanej strony</h1>';
            }
        }
        else
        {
            include 'pages/strona_glowna.php';
        } ?>
    </main>
   
</body>
</html>