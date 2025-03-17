<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    // Pobranie danych z formularza
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $age_range = $_POST['age_range'] ?? '';
    $message = trim($_POST['message']);
    $consent = isset($_POST['consent']) ? true : false;
    
    // Walidacja imienia i nazwiska (min. 2 wyrazy)
    if (str_word_count($full_name) < 2) {
        $errors['full_name'] = "To pole musi zawierać co najmniej dwa wyrazy";
    }
    
    // Walidacja adresu email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Podaj poprawny adres email";
    }
    
    // Walidacja przedziału wiekowego
    $valid_age_ranges = ['25', '50', '75', 'above_75'];
    if (!in_array($age_range, $valid_age_ranges)) {
        $errors['age_range'] = "Wybierz swój przedział wiekowy";
    }
    
    // Walidacja wiadomości (min. 10 znaków, bez samych spacji)
    if (strlen($message) < 10 || trim($message) == '') {
        $errors['message'] = "Wiadomość musi zawierać co najmniej 10 znaków";
    }
    
    // Walidacja zgody
    if (!$consent) {
        $errors['consent'] = "Potwierdź swoją zgodę";
    }
    
    // Jeśli brak błędów, zapisujemy dane do pliku
    if (empty($errors)) {
        $data = date("Y-m-d H:i:s") . "\n";
        $data .= print_r([
            'full_name' => $full_name,
            'email_address' => $email,
            'age_range' => $age_range,
            'message_content' => $message,
            'consent' => $consent
        ], true);
        
        file_put_contents("formularz_kontaktowy.txt", $data . "\n\n", FILE_APPEND);
        
        echo "<p>Dane z formularza zostały zapisane do pliku formularz_kontaktowy.txt</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz Kontaktowy</title>
    <style>
        body { font-family: Arial, sans-serif;
        padding: 5px}
        .error { color: red; font-size: 0.9em; }
        .input-error { border: 1px solid red; }
        form{
            background-color:lightblue;
            padding: 5px;   
        }
        a{
            color: red;
        }
    </style>
</head>
<body>  
    <form action="" method="post">
        <label>Imię i nazwisko <a>*</a></label><br>
        <input type="text" name="full_name" value="<?= htmlspecialchars($_POST['full_name'] ?? '') ?>" class="<?= isset($errors['full_name']) ? 'input-error' : '' ?>">
        <div class="error"> <?= $errors['full_name'] ?? '' ?> </div><br>
        
        <label>Adres email <a>*</a></label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" class="<?= isset($errors['email']) ? 'input-error' : '' ?>">
        <div class="error"> <?= $errors['email'] ?? '' ?> </div><br>
        
        <label>Przedział wiekowy <a>*</a></label><br>
        <select name="age_range" class="<?= isset($errors['age_range']) ? 'input-error' : '' ?>">
            <option value="">Wybierz</option>
            <option value="25" <?= ($_POST['age_range'] ?? '') == '25' ? 'selected' : '' ?>>25-50 lat</option>
            <option value="50" <?= ($_POST['age_range'] ?? '') == '50' ? 'selected' : '' ?>>50-75 lat</option>
            <option value="75" <?= ($_POST['age_range'] ?? '') == '75' ? 'selected' : '' ?>>powyżej 75</option>
        </select>
        <div class="error"> <?= $errors['age_range'] ?? '' ?> </div><br>
        
        <label>Wiadomość <a>*</a></label><br>
        <textarea name="message" class="<?= isset($errors['message']) ? 'input-error' : '' ?>"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
        <div class="error"> <?= $errors['message'] ?? '' ?> </div><br>
        
        <input type="checkbox" name="consent" value="1" <?= isset($_POST['consent']) ? 'checked' : '' ?>> Zgoda na przetwarzanie danych <a>*</a>
        <div class="error"> <?= $errors['consent'] ?? '' ?> </div><br>
        
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>

