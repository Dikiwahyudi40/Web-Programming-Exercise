<?php
$databaseHost = 'localhost';
$databaseName = 'game';
$databaseUsername = 'root';
$databasePassword = '';

$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

function addPemain($nama, $email, $score){
    $sql = "INSERT INTO hasil (nama, email, score) VALUES('".$nama."', '".$email."', '".$score."')";
    if (mysqli_query($GLOBALS['koneksi'], $sql)) {
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['koneksi']);
      }
    mysqli_close($GLOBALS['koneksi']);
}
?>