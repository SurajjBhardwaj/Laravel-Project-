<?php

// to set the session
$_SESSION["username"] = "suraj";


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // to unset the session 
    // unset($_SESSION["username"]);
    
    echo $_SESSION["username"];

    ?>


</body>

</html>