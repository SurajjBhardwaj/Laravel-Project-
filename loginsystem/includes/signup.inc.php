<?php

if($_SERVER["request_method"] == "POST"){
    

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    
    // let's hash the password
    $salt = bin2hex((random_bytes(8)));
    $pepper = "myNameIsPepper";

    $before = $password . $salt . $pepper;
    $hash = hash("sha256", $before);

    
    try {
        require_once("dbh.inc.php");
        



        
    } catch (PDOException $e) {
        //throw $th;
        die("Query failed: " . $e->getMessage());
    }
    
    

}


else {
    header("location: ../index.php");
    exit();
}



?>