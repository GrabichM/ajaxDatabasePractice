<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX & database</title>
    <!-- CSS-Dateien -->
    <!-- Bootstrap-CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1>Interaktives PHP-Projekt zur Verwaltung und Darstellung von Daten</h1>
    <container class="container text-center">
        <div class="row">
            <div class="col">
            <p>Eine erste Tabelle mit Daten aus einer Datenbank:</p>
            <div class="table-responsive">
                <?php
                include '../config/dbConnect.php';
                include '../assets/tables/table.php';
                ?>
            </div>
            </div>
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="nachname" class="form-label">Nachname:</label>
                        <input type="text" class="form-control" id="nachname" name="nachname">
                    </div>
                    <div class="mb-3">
                        <label for="vorname" class="form-label">Vorname:</label>
                        <input type="text" class="form-control" id="vorname" name="vorname">
                    </div>
                    <button type="submit">neuen Datensatz erstellen</button>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </container>
    <!-- JavaScript-Dateien -->
    <!-- Bootstrap 5.2.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- script.js -->
    <script src="js/script.js"></script>
</body>

</html>