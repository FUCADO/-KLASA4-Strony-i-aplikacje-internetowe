<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Strona</title>
    <link rel="stylesheet" href="strona_glowna.css">
</head>
<body > <?php
include "include/db_connection.php"

?>
<div class="row">
  <div class="columnone">
    <h2>Strony:</h2>
    <div class="links">
            <a href="?page=strona_glowna.php">Strona główna</a>
            <a href="?tabela=czytelnicy">Tabela <i>czytelnicy</i></a>
            <a href="?tabela=dzialy">Tabela <i>działy</i></a>
            <a href="?tabela=ksiazki">Tabela <i>książki</i></a>
            <a href="?tabela=pracownicy">Tabela <i>pracownicy</i></a>
            <a href="?tabela=stanowiska">Tabela <i>stanowiska</i></a>
            <a href="?tabela=wypozyczenia">Tabela <i>wypożyczenia</i></a>
        </div>
  </div>
  
  <div class="columntwo">
    <div>
    <?php
    if (isset($_GET['tabela'])) {
        $tabela = $_GET['tabela'];

        include "include/db_connection.php";

        // MAPA KLUCZY GŁÓWNYCH
        $primaryKeys = [
            'czytelnicy' => 'Nr_czytelnika',
            'dzialy' => 'Id_dzial',
            'ksiazki' => 'Sygnatura',
            'pracownicy' => 'Id_pracownika',
            'stanowiska' => 'Id_stanowisko',
            'wypozyczenia' => 'Nr_transakcji'
        ];

        $id_column = isset($primaryKeys[$tabela]) ? $primaryKeys[$tabela] : 'id';
        

        // USUWANIE
        if (isset($_GET['delete'])) {
            $id = intval($_GET['delete']);
            $sql = "DELETE FROM `$tabela` WHERE `$id_column` = $id";
if (mysqli_query($conn, $sql)) {
    echo "<p style='color:green'>✅ Rekord został usunięty.</p>";
} else {
    echo "<p style='color:red'>❌ Nie można usunąć rekordu – są powiązane dane w innych tabelach.</p>";
}
        }

        // WYŚWIETLENIE TABELI
        $query = "SELECT * FROM `$tabela`";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table border='1'><tr>";
            while ($fieldinfo = mysqli_fetch_field($result)) {
                echo "<th>" . htmlspecialchars($fieldinfo->name) . "</th>";
            }
            echo "<th>Akcje</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $val) {
                    echo "<td>" . htmlspecialchars($val) . "</td>";
                }
                echo "<td>
                        <a href='?tabela=$tabela&delete=" . $row[$id_column] . "' onclick='return confirm(\"Na pewno usunąć?\")'>Usuń</a>
                      </td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Tabela pusta lub błąd: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<h2>Strona główna</h2><p>Wybierz tabelę z lewej strony.</p>";
    }
    ?>
    </div>
</div>
</body>
</html>