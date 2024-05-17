<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    
    

    try {
        require_once("dbh.inc.php");
        require_once("signup_model.inc.php");
        require_once("signup_controller.inc.php");

        $errors = [];

        if (is_input_empty($username, $email, $password)) {
            $errors[] = ["message" => "Please fill in all the fields."];
        }

        elseif (is_email_invalid($email)) {
            $errors[] = ["message" => "Invalid email."];
        }

        elseif (is_username_taken($pdo, $username)) {
            $errors[] = ["message" => "Username is already taken."];
        }

        elseif (is_email_registered($pdo, $email)) {
            $errors[] = ["message" => "Email already in use."];
        }

        else {

            // Let's hash the password
    $salt = bin2hex(random_bytes(8));
    $pepper = "myNameIsPepper";

    $before = $password . $salt . $pepper;
    $hash = hash("sha256", $before);

        }

        require_once("config_session.inc.php");

        if (!empty($errors)) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
            exit();
        } else {
            // Insert the new user into the database
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password, salt) VALUES (?, ?, ?, ?)");
            $stmt->execute([$username, $email, $hash, $salt]);

            // Redirect to a success page or login page
            header("Location: ../success.php");
            exit();
        }

    } catch (PDOException $e) {
        header("Location: ../index.php");
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    exit();
}