<?php

declare(strict_types=1);

function check_signup_errors()
{
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];
        foreach ($errors as $error) {
            echo "<p class='error'>" . htmlspecialchars($error["message"], ENT_QUOTES, 'UTF-8') . "</p>";
        }
    }
}