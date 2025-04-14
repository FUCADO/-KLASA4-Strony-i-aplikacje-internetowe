<?php
// Połączenie z bazą danych
$con = mysqli_connect("localhost", "fkwiecien", "1234", "fkwiecien");

// Sprawdzenie połączenia
if (mysqli_connect_errno()) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

// Poprawione zapytanie SQL – bez SELECT *
$sql = "
SELECT 
    Sygnatura,
    Tytul,
    nazwisko,
    imie,
    Wydawnictwo,
    Rok_wyd,
    Cena
FROM ksiazki
WHERE (Wydawnictwo LIKE 'PWN' OR Wydawnictwo LIKE 'HELION')
AND Rok_wyd > 1990
ORDER BY Rok_wyd ASC
";

$result = $con->query($sql);

// Wyświetlenie wyników w tabeli HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania</th>
        <th>Cena</th>
      </tr>";
?>
<?php
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Sygnatura']}</td>
                <td>{$row['Tytul']}</td>
                <td>{$row['nazwisko']} {$row['imie']}</td>
                <td>{$row['Wydawnictwo']}</td>
                <td>{$row['Rok_wyd']}</td>
                <td> EXPLODE('.', $row['Cena'])[0] zł  EXPLODE('.', $row['Cena'])[1] gr</td>
              </tr>"; ?>
              <?php
    }
} else {
    echo "<tr><td colspan='6'>Brak danych</td></tr>";
}
echo "</table>";

$con->close();
?>
