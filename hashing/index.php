<?php

// hashing the password 

$password = "1234";
$salt = bin2hex((random_bytes(8))); 
$pepper = "myNameIsPepper";

echo "<br>";
echo "salt: " . $salt . "<br>";


echo "<br>";
echo "pepper: " . $pepper . "<br>";

$hasshedPassword = $password . $salt . $pepper;
$hash = hash("sha256", $hasshedPassword);


echo "<br>";
echo "original Password: " . $password . "<br>";


echo "<br>";
echo "hassed Password: " . $hash . "<br>";


// checking the password using hashed password
$pass = "1234";
// $pepper = "myNameIsPepper";


$hasshedPassword = $pass . $salt . $pepper;
$verified = hash("sha256", $hasshedPassword);

if($verified === $hash){
    echo "password is correct";

}else{
    echo "password is incorrect";
    echo "<br> " . $verified;
}

echo "<br>";




?>