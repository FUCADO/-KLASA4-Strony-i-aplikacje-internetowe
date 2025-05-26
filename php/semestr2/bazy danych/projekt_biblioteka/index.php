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

            echo "<h2>Zawartość tabeli: " . htmlspecialchars($tabela) . "</h2>";

            $query = "SELECT * FROM `$tabela`";
            $result = mysqli_query($conn, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<table>";
                    
                    echo "<tr>";
                    while ($fieldinfo = mysqli_fetch_field($result)) {
                        echo "<th>" . htmlspecialchars($fieldinfo->name) . "</th>";
                    }
                    echo "</tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        foreach ($row as $cell) {
                            echo "<td>" . htmlspecialchars($cell) . "</td>";
                        }
                        echo "</tr>";
                    }

                    echo "</table>";
                } else {
                    echo "Tabela jest pusta.";
                }
            } else {
                echo "Błąd zapytania: " . mysqli_error($conn);
            }
        } else {
            echo "<h2>Strona główna</h2>";
            echo "<p>Wybierz tabelę z menu po lewej stronie, aby wyświetlić dane.</p>";
        }
        ?>
  </div>
</div>
</body>
</html>