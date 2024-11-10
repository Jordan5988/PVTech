<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PVTech";

// Créer une connexion

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $Nom = htmlspecialchars($_POST['Nom']);
    $Email = htmlspecialchars($_POST['Email']);
    $MotDePasse = htmlspecialchars($_POST['MotDePasse']);

    // Préparer et exécuter la requête
    $stmt = $conn->prepare("SELECT * FROM superviseurs WHERE Nom = ? AND Email = ? AND Id_signature = ?");
    $stmt->bind_param("sss", $Nom, $Email, $MotDePasse);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Vérifier le mot de passe
            header("Location: Projets.php");
        }exit();
    } else {
        echo "<h1>Erreur</h1>";
        echo "<p>Les informations fournies ne correspondent pas à celles enregistrées dans la base de données.</p>";
        echo "<p>Nom: $Nom</p>";
        echo "<p>Email: $Email</p>";
        echo "<p>Mot de passe: $MotDePasse</p>";
    }

    $stmt->close();

$conn->close();
?>
