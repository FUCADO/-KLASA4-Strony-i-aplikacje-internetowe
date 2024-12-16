<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tablica_get.php" method="GET">
    <label id=login  for="log">Login:</label>    
    <input id=login  name="log" type="text"><br>
    <label id=haslo  for="pass">Hasło:</label>    
    <input id=haslo  name="pass" type="text" ><br>
    
    <input type="submit" value="wyślij">
    </form>
    <pre><?php print_r($_GET)?></pre>
</body>
</html>