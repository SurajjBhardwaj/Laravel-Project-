// connection to the database


<?php

// Example usage:
$dsn = "mysql:host=localhost;dbname=mydatabase";
$dbusername = "root";
$dbpassword = "";

try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        // die("connection failed: " . $e->getMessage());
        echo "Connection failed: " . $e->getMessage();
        return null;
    }


    


?>