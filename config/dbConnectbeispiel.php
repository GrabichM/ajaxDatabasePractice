<?php

$hostname = ""; // normalerweise localhost
$username = ""; // Ihr MySQL-Benutzername
$password = ""; // Ihr MySQL-Passwort
$database = ""; // Ihr Datenbankname

// Erstellen der Verbindung
$conn = new mysqli($hostname, $username, $password, $database);

echo $conn->error;