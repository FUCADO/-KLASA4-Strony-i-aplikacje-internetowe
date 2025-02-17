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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'] ?? '';
    $haslo = $_POST['haslo'] ?? '';
    if ($login === 'admin' && $haslo === 'password') {
        $_SESSION['login'] = $login;
        $_SESSION['haslo'] = $haslo;
        $_SESSION['zalogowany'] = true;
        echo "<p>Zalogowano pomyślenie!</p>";
    } else {
        echo "<p>Błędny login lub hasło</p>";
    }
}
?>

<form method="post">
<input type="text" name="login" id="login">
<label for="login">Login:</label>
<br>
<input type="password" name="haslo" id="haslo">
<label for="haslo">Hasło:</label>
<input type="submit" value="Zaloguj">
<?php include 'print_r.php' ?>
</form>
</body>
</html>