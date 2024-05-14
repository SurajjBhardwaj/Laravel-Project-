<?php


// handle the form submission

if($_SERVER["REQUEST_METHOD"] == "POST" ){

       $username = $_POST["username"];
         $email = $_POST["email"];
            $pwd = $_POST["pwd"];

            // check if the data is correct or not 

            echo $dbusername;   
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $pwd;
            echo "<br>";

            // connect to the database

           

            // second method to include it 
            // include_once "db/dbh-inc.php";
            
            // third method to include it
            // require "db/dbh-inc.php";

            // fourth method to include it
            // include "db/dbh-inc.php";

            // check if the connection is established or not

            /*

$query = "INSERT INTO users (username, pwd, email) VALUES
(?, ?, ?);";
$stmt = $pdo->prepare($query);
$stmt->execute([$username, $pwd, $email]);| I


            */

            try {
                //code...

require_once "../db/dbh-inc.php";
         $query = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?)";
        $statement = $pdo->prepare($query);
        $statement->execute([$username, $email, $pwd]);

        // Check if the data was inserted successfully
        if ($statement->rowCount() > 0) {
            echo "Data inserted successfully";
        } else {
            echo "Data not inserted";
        }

            // close the connection
    $pdo = null;


//


                
            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
            }


           // exir the code
    // header("Location: ../first/index.php");

    die();
        

    // 2nd method 
    // exit();

}

else{

    header("Location: ../first/index.php");
    
}