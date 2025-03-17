<?php
// Plik: file.php - Wyświetlanie i edycja plików
if (isset($_GET['file'])) {
    $file = realpath($_GET['file']);
    if (strpos($file, __DIR__) !== 0 || !is_file($file)) {
        die("Nieprawidłowy plik.");
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['content'])) {
        file_put_contents($file, $_POST['content']);
    }
    $content = file_get_contents($file);
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Edytor plików</title>
        <style>
            textarea { width: 100%; height: 300px; }
        </style>
    </head>
    <body>
        <h2>Edytor pliku: <?php echo htmlspecialchars(basename($file)); ?></h2>
        <form method="post">
            <textarea name="content"><?php echo htmlspecialchars($content); ?></textarea><br>
            <button type="submit">Zapisz</button>
        </form>
        <a href="ok.php">Powrót</a>
    </body>
    </html>
    <?php
}
