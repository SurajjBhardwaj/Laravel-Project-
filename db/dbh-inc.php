<?php

function connectToDatabase($dsn, $dbusername, $dbpassword) {
    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}

// Example usage:
$dsn = "mysql:host=localhost;dbname=mydatabase";
$dbusername = "root";
$dbpassword = "";

$pdo = connectToDatabase($dsn, $dbusername, $dbpassword);
if ($pdo) {
    echo "Connected to the database";
    // You can now use $pdo for database operations
    // For example: $pdo->query("SELECT * FROM table_name");
}