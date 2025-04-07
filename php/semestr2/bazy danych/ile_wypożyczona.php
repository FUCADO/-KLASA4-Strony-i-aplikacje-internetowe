<?php
// Połączenie z bazą danych
$con = mysqli_connect("localhost", "fkwiecien", "1234", "fkwiecien");

// Sprawdzenie połączenia
if ($con->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

// Zapytanie SQL
$sql = "
SELECT 
    nr_transakcji,
    data_wypozyczenia,
    data_zwrotu,
    DATEDIFF(
        IFNULL(data_zwrotu, NOW()),
        data_wypozyczenia
    ) AS liczba_dni
FROM wypozyczenia
ORDER BY liczba_dni ASC
";

$result = $con->query($sql);

// Wyświetlenie wyników w tabeli HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Nr_transakcji</th>
        <th>Data_wypozyczenia</th>
        <th>Data_zwrotu</th>
        <th>Liczba dni</th>
      </tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nr_transakcji']}</td>
                <td>{$row['data_wypozyczenia']}</td>
                <td>{$row['data_zwrotu']}</td>
                <td>{$row['liczba_dni']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>Brak danych</td></tr>";
}
echo "</table>";

$con->close();
?>