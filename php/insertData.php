<?php
include '../config/dbConnect.php'; // Pfad anpassen

$nachname = $_POST['nachname'];
$vorname = $_POST['vorname'];

// SQL zum Einfügen der Daten vorbereiten
$sql = "INSERT INTO beispielTabelle (vorname, nachname) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $vorname, $nachname);

if ($stmt->execute()) {
    echo "Neuer Datensatz erfolgreich erstellt";
} else {
    echo "Fehler: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>