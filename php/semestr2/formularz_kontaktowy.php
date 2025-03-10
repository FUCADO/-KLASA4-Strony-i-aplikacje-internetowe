<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        background-color:lightblue;
    }
</style>
<body>
<form method="post">
    Imię i nazwisko: <input type="text" name="full_name" required><br><br>
    Adres email: <input type="email" name="email_address" required><br><br>
    Przedział wiekowy:
    <select name="age_range" required>
        <option value="0-25">0-25</option>
        <option value="25-50">25-50</option>
        <option value="50-75">50-75</option>
        <option value="75+">75+</option>
    </select><br><br>
    Wiadomość: <textarea name="message_content" required></textarea><br><br>
    <input type="checkbox" name="consent" required> Zgoda na przetwarzanie danych<br>
    <input type="submit" value="Wyślij">
</form>

</body>
</html>