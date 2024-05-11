<?php


// lEt's Grab the data from the form
// var_dump($_SERVER["REQUEST_METHOD"]);


if($_SERVER["REQUEST_METHOD"] == "POST"){


    // bad practise
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $favPet = $_POST["favPet"];


    // best Practice to check whether it is a html special charector or not
    // otherwise anyone can send malious code to the server

    // good practise
    
    $firstName = htmlspecialchars($firstName);
    $lastName = htmlspecialchars($lastName);
    $favPet = htmlspecialchars($favPet);
    

    // check if it's null or empty
    
    if(empty($firstName) || empty($lastName) || empty($favPet)){
        echo "Please fill all the fields";
        return;
    }

    echo "First Name: ", $firstName;
    echo "<br>";
    
    echo "Last Name: ", $lastName;
    echo "<br>";
    echo "fav pet :", $favPet;
    echo "<br>";
    echo "Thank you for submitting the form";
    echo "<br>";
    echo "We will get back to you soon";
    echo "<br>";
    echo "Have a great day ahead";
    echo "<br>";
    echo "Stay safe and healthy";
    echo "<br>";
    echo "Take care of yourself";
    echo "<br>";
    echo "Goodbye";
    echo "<br>";

    // redirect user to index.php page
    header("Location: ../form/index.php");
    
    
}


else{
     // redirect user to index.php page
    header("Location: ../form/index.php");
}