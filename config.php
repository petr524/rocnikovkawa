<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydatabase";

// Vytvoření připojení
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola připojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

