<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
            border: dotted 1px black;

        }
        td{
            border-collapse:collapse;
            border: dotted 1px black; 
        }
    </style>
</head>
<body>
    <?php $movies = array("Skazani na Shawshank" => "dramat",
    "Nietykalni" => "biograficzny",
    "Władca Pierścieni: Powrót króla" => "fantasy",
    "Pulp Fiction" => "gangsterski",
    "Siedem" => "kryminał",
    "Podziemny krąg" => "thriller",
    "Django" => "western",
    "Król Lew" => "animacja",
    "Avengers: Wojna bez granic" => "akcja",
    "Dobry, zły i brzydki" => "western"); ?>
   <table><caption>Sortowanie malejąco według wartości arsort</caption>
    <tr><th>Klucz</th><th>Wartość</th></tr>
   <?php arsort($movies);

foreach ($movies  as $key => $value) {
     echo "<tr><td>$key</td><td>$value</td></tr>";
 }?></table><br><table><caption>Sortowanie rosnąco według wartości asort</caption><tr><th>Klucz</th><th>Wartość</th></tr>
 <?php krsort($movies);

foreach ($movies  as $key => $value) {
     echo "<tr><td>$key</td><td>$value</td></tr>";
 }?></table><br><table><caption>Sortowanie malejąco według kluczy krsort</caption><tr><th>Klucz</th><th>Wartość</th></tr>
 <?php asort($movies);

foreach ($movies  as $key => $value) {
     echo "<tr><td>$key</td><td>$value</td></tr>";
 }?></table><br><table><caption>Sortowanie rosnąco według wartości ksort</caption><tr><th>Klucz</th><th>Wartość</th></tr>
 <?php ksort($movies);

foreach ($movies  as $key => $value) {
     echo "<tr><td>$key</td><td>$value</td></tr>";
 }?>
 </table>
</body>
</html>