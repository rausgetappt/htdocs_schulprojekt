<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kontakt";

try {
    // 3. Datenbankverbindung herstellen
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbindung erfolgreich! ";

    // 4. Überprüfen, ob das Formular über POST übermittelt wurde
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 5. Formulardaten sicher behandeln
        $anrede = htmlspecialchars(trim($_POST["anrede"]));
        $nachname = htmlspecialchars(trim($_POST["nachname"]));
        $vorname = htmlspecialchars(trim($_POST["vorname"]));
        $emailAdresse = htmlspecialchars(trim($_POST["emailadresse"]));
        $telefonnummer = htmlspecialchars(trim($_POST["telefonnummer"]));
        $fachbereich = htmlspecialchars(trim($_POST["fachbereich"]));
        $terminZeit = htmlspecialchars(trim($_POST["terminZeit"]));
        $krankenkassenNr = htmlspecialchars(trim($_POST["krankenkassenNr"]));
        $anliegen = htmlspecialchars(trim($_POST["anliegen"]));
        $versicherungsart = htmlspecialchars(trim($_POST["versicherungsart"]));

        // 6. SQL-Statement vorbereiten
        $stmt = $pdo->prepare("INSERT INTO kontakt2 (anrede, nachname, vorname, emailadresse, telefonnummer, fachbereich, terminZeit, krankenkassenNr, anliegen, versicherungsart)
                               VALUES (:anrede, :nachname, :vorname, :emailadresse, :telefonnummer, :fachbereich, :terminZeit, :krankenkassenNr, :anliegen, :versicherungsart)");

        // 7. SQL-Parameter binden und ausführen
        $stmt->bindParam(':anrede', $anrede);
        $stmt->bindParam(':nachname', $nachname);
        $stmt->bindParam(':vorname', $vorname);
        $stmt->bindParam(':emailadresse', $emailAdresse);
        $stmt->bindParam(':telefonnummer', $telefonnummer);
        $stmt->bindParam(':fachbereich', $fachbereich);
        $stmt->bindParam(':terminZeit', $terminZeit);
        $stmt->bindParam(':krankenkassenNr', $krankenkassenNr);
        $stmt->bindParam(':anliegen', $anliegen);
        $stmt->bindParam(':versicherungsart', $versicherungsart);

        // 8. SQL-Statement ausführen und Erfolgsmeldung zurückgeben
        $stmt->execute();
        echo "Daten erfolgreich in die Datenbank eingefügt!";
    }

} catch (PDOException $e) {
    echo "Fehler: " . $e->getMessage();
}

?>
