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
        require_once("signup_model.inc.php");
        require_once("signup_controller.inc.php");

        try {
            //code...

            if(is_input_empty($username, $email, $password)){
                header("location: ../index.php?error=emptyinput");
                exit();
            }

            if (is_email_invalid($email)) {

                

                
            }
            


            

            


            
        } catch (\Throwable $th) {
            //throw $th;
        }
        



        
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