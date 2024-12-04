<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kontakt";

try {
    // Datenbankverbindung herstellen
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Überprüfen, ob das Formular über POST übermittelt wurde
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Formulardaten sicher behandeln
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

        // Terminverfügbarkeit prüfen
        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM kontakt2 WHERE terminZeit = :terminZeit");
        $checkStmt->bindParam(':terminZeit', $terminZeit);
        $checkStmt->execute();
        $existingEntries = $checkStmt->fetchColumn();

        if ($existingEntries > 0) {
            // Termin ist bereits belegt
            echo "Dieser Termin ist leider schon vergeben. Bitte wählen Sie einen anderen.";
            exit;
        }

        // SQL-Statement vorbereiten
        $stmt = $pdo->prepare("INSERT INTO kontakt2 (anrede, nachname, vorname, emailadresse, telefonnummer, fachbereich, terminZeit, krankenkassenNr, anliegen, versicherungsart)
                               VALUES (:anrede, :nachname, :vorname, :emailadresse, :telefonnummer, :fachbereich, :terminZeit, :krankenkassenNr, :anliegen, :versicherungsart)");

        // SQL-Parameter binden und ausführen
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

        // SQL-Statement ausführen und Erfolgsmeldung zurückgeben
        $stmt->execute();
        echo "Ihr Termin wurde erfolgreich gebucht!";
    }

} catch (PDOException $e) {
    // Fehler melden
    echo "Fehler: " . $e->getMessage();
}
?>
