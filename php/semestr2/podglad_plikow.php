<?php
// Konfiguracja
$directory = isset($_GET['dir']) ? realpath(__DIR__ . '/' . $_GET['dir']) : __DIR__;
if (strpos($directory, __DIR__) !== 0) {
    die("Nieprawidłowa ścieżka.");
}

$files = scandir($directory);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Menadżer plików</te>
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
                    <a href="file.php?file=<?php echo urlencode($filePath); ?>"> <?php echo htmlspecialchars($file); ?></a>
                    (<?php echo is_file($filePath) ? filesize($filePath) . ' B' : 'Katalog'; ?>)
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>
