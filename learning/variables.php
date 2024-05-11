<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    // Scalar types (contains one value)
    
    $string = "Daniel";
    $int = 12354353;
    $float = 2.5678;
    $event = true;
    $manish = 0;
    $aaditya = 5;

    echo $string;

    echo $int
    ?>
    <p>

        <?php

        echo $float;

        ?>

    </p>

    <p>
        <?php
        if ($event) {
            echo "This is true";
        } else {
            echo "This is false";
        }

        ?>

    </p>
    <?php

    if ($manish) {
        echo "Manish is true";
    } else {
        echo "Manish is false ";
        echo $aaditya - $manish;
    }

    ?>
    </p>


    <p>

        <?php
    // Array type
        $array = array("Daniel", "Bella");
        echo "this is the first array : ", $array[0];
        echo " ", $array[1];

        // second method of creating an array

        $names = ["Daniel", "Bella", "Frida"];
        echo " this is second array ", $names[2];
        

    
    ?>

    </p>
</body>

</html>