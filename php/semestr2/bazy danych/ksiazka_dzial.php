<?php
$con = mysqli_connect("localhost", "fkwiecien", "1234", "fkwiecien");


if (!$con) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

$sql = "SELECT tytul, imie, nazwisko, wydawnictwo, miejsce_wyd, rok_wyd, objetosc_ks, cena FROM ksiazki";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista książek</title>
</head>
<body>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Książka <i>„" . htmlspecialchars($row["tytul"]) . "”</i> została napisana przez <b>" . htmlspecialchars($row["imie"]) . " ". htmlspecialchars($row["nazwisko"]) . " ". htmlspecialchars($row["wydawnictwo"]) . " ". htmlspecialchars($row["miejsce_wyd"]) . " ". htmlspecialchars($row["rok_wyd"]) . " rok ". htmlspecialchars($row["objetosc_ks"]) . " stron cena: ". htmlspecialchars($row["cena"]) . "  zł ". "</b>.</p>";
        }
    } else {
        echo "<p>Brak wyników.</p>";
    }

    $con->close();
    ?>
</body>
</html>