
<?php
require 'db.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';

    if (!empty($name)) {
        $stmt = $pdo->prepare('INSERT INTO user_names (name) VALUES (:name)');
        $stmt->execute(['name' => $name]);

        // echo "Name saved successfully!";
    } else {
        // echo "Please provide a valid name.";
    }
}
header('Location: index.php');
exit;
?>
