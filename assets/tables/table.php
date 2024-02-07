<?php

$sql = "SELECT id, vorname, nachname FROM beispielTabelle";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ausgabe der Daten
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["vorname"] . " " . $row["nachname"] . "<br>";
    }
} else {
    echo "0 Ergebnisse";
}
$conn->close();
