<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$directory = __DIR__;

// Tryb wyświetlania listy plików
if (!isset($_GET['file'])) {
    $files = scandir($directory);
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Menadżer plików</title>
        <style>
            body { font-family: Arial, sans-serif; }
            .file-list { list-style: none; padding: 0; }
            .file-list li { padding: 5px; border-bottom: 1px solid #ccc; }
        </style>
    </head>
    <body>
        <h2>Zawartość katalogu: <?php echo htmlspecialchars($directory); ?></h2>
        <ul class="file-list">
            <?php foreach ($files as $file): ?>
                <?php if ($file !== '.' && $file !== '..'): ?>
                    <li>
                        <?php $filePath = "$directory/$file"; ?>
                        <a href="?file=<?php echo urlencode($file); ?>"> <?php echo htmlspecialchars($file); ?></a>
                        (<?php echo is_file($filePath) ? filesize($filePath) . ' B' : 'Katalog'; ?>)
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </body>
    </html>
    <?php
    exit;
}

// Tryb edycji pliku
$file = realpath($directory . '/' . $_GET['file']);
if (strpos($file, $directory) !== 0 || !is_file($file)) {
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
    <a href="?">Powrót</a>
</body>
</html>
