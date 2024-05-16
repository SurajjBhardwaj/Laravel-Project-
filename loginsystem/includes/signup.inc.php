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

            $errors = [];



            if(is_input_empty($username, $email, $password)){

                $errors["message"] = "Please fill in all the fields.";
                exit();
                
            }

            if (is_email_invalid($email)) {

                                $errors["message"] = "invalid email";

                
            }

            if(is_username_taken($pdo,$username)){
                                $errors["message"] = "username is already taken";

                
            }

            if (is_email_registered($pdo, $username)) {

                                $errors["message"] = "eamil alreay in user";

            }

            require_once("config_session.inc.php");

            if($errors){

                $_SESSION["errors_signup"] = $errors;
                header("location: ../index.php");
                

                
            }

            else{


                // let's save the data now
            }

            
            


            

            


            
        } catch (PDOException $e) {
            //throw $th;

            die("Query failed: " . $e->getMessage();
            
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