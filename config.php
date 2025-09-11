<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
// Connexion à la base de données
try {
    $pdo = new PDO('sqlite:./contribute.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p class='alert alert-success'>Connexion réussie à la base de données.</p>";
} catch (PDOException $e) {
    echo "<p class='alert alert-error'>Erreur de connexion : " . $e->getMessage() . "</p>";
}

// Récupération et insertion des données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    try {
        // Crée la table si elle n'existe pas
        $pdo->exec("CREATE TABLE IF NOT EXISTS contact (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            email TEXT NOT NULL,
            message TEXT NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )");
        // Insère les données du formulaire
        $stmt = $pdo->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $message]);
        echo "<p class='alert alert-success'>Données du formulaire enregistrées !</p>";
    } catch (PDOException $e) {
        echo "<p class='alert alert-error'>Erreur lors de l'insertion : " . $e->getMessage() . "</p>";
    }
}
