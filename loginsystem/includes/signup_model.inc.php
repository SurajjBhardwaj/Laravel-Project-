<?php

// strict type true will help us to get rid of the type juggling
declare(strict_types= 1);

function get_username(object $PDO, string $username){


    $query = "SELECT username FROM users WHERE username =$username";
    
    // secure way to prepare the query
    $stmt = $PDO->prepare($query);

    $stmt->bindParam("", $username);
    $stmt->execute();

    
    $result = $stmt->fetc(PDO::FETCH_ASSOC);
    return $result;
    
}