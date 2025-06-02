<?php
$host = "localhost";
$user = "kwiecien";
$password = "1234";
$database = "kwiecien"; // <- Upewnij się, że się zgadza

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}
?>