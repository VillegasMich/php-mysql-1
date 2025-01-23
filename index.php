
<?php
require 'db.php'; // Include the database connection

// Fetch all names
$stmt = $pdo->query('SELECT * FROM user_names');
$names = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored Names</title>
</head>
<body>
    <h1>Enter Your Name</h1>
    <form action="saved_names.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>

    <h2>Stored Names</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php foreach ($names as $name): ?>
            <tr>
                <td><?= htmlspecialchars($name['id']); ?></td>
                <td><?= htmlspecialchars($name['name']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
