<?php
$conn = mysqli_connect('localhost','root','','baza');

if (isset($_POST['data']) && isset($_POST['osoby']) && isset($_POST['telefon'])) {
    $data = $_POST['data'];
    $osoby = $_POST['osoby'];
    $telefon = $_POST['telefon'];
    $sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data', '$osoby', '$telefon')";
    mysqli_query($conn, $sql);
    echo "Dodano rezerwację do bazy";
} else {
    echo "Brak danych z formularza!";
}

mysqli_close($conn);
?>