<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "biblioteka";
// Kreiranje konekcije
$conn = new mysqli($server, $username, $password,$database);

// Provera konekcije connection
if ($conn->connect_error) {
   die("Konekcija nije uspela: " . $conn->connect_error);
}

?>