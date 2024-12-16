<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tablica_post.php" method="POST">
        <input type="e-mail" name="mail" placeholder="email"><br>
        <input type="date" name="data"><br>
        <input type="month" name="miesiac"><br>
        <input type="time" name="czas"><br>
        <input type="week" name="tydzien"><br>
        <input type="submit" value="wyślij">
    </form>
    <pre><?php print_r($_POST)?></pre>
</body>
</html>