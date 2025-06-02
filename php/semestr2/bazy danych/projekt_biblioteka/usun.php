<?php
// Połączenie z bazą danych
require_once 'db_connection.php';

// Sprawdź, czy ID zostało przesłane w URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Przygotowanie zapytania
    $stmt = $conn->prepare("DELETE FROM twoja_tabela WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Sukces – przekieruj z komunikatem
        header("Location: index.php?status=usunieto");
        exit();
    } else {
        echo "Błąd przy usuwaniu rekordu: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Nieprawidłowe ID!";
}
?>