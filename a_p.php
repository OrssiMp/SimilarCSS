<?php
include "config.php";
?>

<div class="container bg-section rounded p-4 mt-4 shadow-sm">
    <h2>Tableau de bord</h2>
    <p>Bienvenue sur le tableau de bord de SimilarCSS. Ici, vous pouvez gérer vos contributions et suivre l'évolution du projet.</p>
    <div class="contributeurs">
        <h3>Liste des Contributeurs</h3>
        <ul>
            <div class="content table-responsive rounded alert alert-info p-8">
                <?php
// Affichage des tables et données existantes
try {
    $stmt = $pdo->query("SELECT name FROM sqlite_master WHERE type='table'");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);

    if ($tables) {
        foreach ($tables as $table) {
            echo "<h3>Table: $table</h3>";
            $rows = $pdo->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_ASSOC);
            if ($rows) {
                echo "<table border='2'><tr>";
                // En-têtes
                foreach (array_keys($rows[0]) as $col) {
                    echo "<th>$col</th>";
                }
                echo "</tr>";
                // Données
                foreach ($rows as $row) {
                    echo "<tr>";
                    foreach ($row as $cell) {
                        echo "<td>" . htmlspecialchars($cell) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Aucune donnée dans cette table.<br>";
            }
        }
    } else {
        echo "Aucune table trouvée dans la base de données.";
    }
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des données : " . $e->getMessage();
}
?>

</div>
</ul>
</div>
<div class="message bg-light container rounded p-3 mt-4 shadow-sm">
<?php
// Affichage des messages des contacts
echo "<h3>Messages des Contacts</h3>";
$row_message = $pdo->query("SELECT name, email, message, created_at FROM contact ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
if ($row_message) {
    foreach ($row_message as $msg) {
        echo "<div class='contact-message'>";
        echo "<strong>Nom:</strong> " . htmlspecialchars($msg['name']) . "<br>";
        echo "<strong>Email:</strong> " . htmlspecialchars($msg['email']) . "<br>";
        echo "<strong>Message:</strong> " . nl2br(htmlspecialchars($msg['message'])) . "<br>";
        echo "<em>Envoyé le: " . htmlspecialchars($msg['created_at']) . "</em>";
        echo "<hr>";
        echo "</div>";
    }
} else {
    echo "Aucun message reçu.";
}
?>
</div>
  <?php $motDePasseCorrect = '333'; // À personnaliser ?>
</div>