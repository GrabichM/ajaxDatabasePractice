# PHP & MySQL Datenbankprojekt

Dieses Repository beinhaltet ein interaktives PHP-Projekt zur Verwaltung und Darstellung von Daten aus einer MySQL-Datenbank. Ziel ist es, praktische Erfahrungen mit PHP, MySQL und AJAX für CRUD-Operationen (Create, Read, Update, Delete) zu sammeln.

## Start

Um das Projekt zu starten, klonen Sie das Repository und richten Sie Ihre lokale Umgebung mit einem Server (z.B. XAMPP) und MySQL ein.

## Nutzung
### Anpassung der Datenbankverbindung
Passen Sie `dbConnectbeispiel.php` entsprechend Ihrer Datenbank an, um eine Verbindung zur Datenbank herzustellen.

### Tabelle und Beispieldaten
Erstellen Sie eine Beispieltabelle: 
CREATE TABLE beispielTabelle (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vorname VARCHAR(50) NOT NULL,
    nachname VARCHAR(50) NOT NULL,
    erstellungsdatum TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Erstellung von Musterdaten in der Tabelle:
INSERT INTO beispielTabelle (vorname, nachname) VALUES 
('Max', 'Mustermann'),
('Erika', 'Musterfrau'),
('John', 'Doe'),
('Jane', 'Doe');

## Beitrag

Beiträge sind willkommen! Bitte erstellen Sie für jede Änderung einen neuen Branch und senden Sie einen Pull Request.

## Lizenz

Dieses Projekt ist unter der MIT-Lizenz lizenziert - siehe die [LICENSE.md](LICENSE) Datei für Details.
