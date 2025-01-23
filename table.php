<?php

require 'db.php';

$table = $pdo->query('CREATE TABLE user_names (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);');
