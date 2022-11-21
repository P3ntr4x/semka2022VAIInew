<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName );

if (!$conn) {
    die("Nepodarilo sa pripojit: " . mysqli_connect_error());
}