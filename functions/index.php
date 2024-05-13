<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    
    // first function
    function sayHello(){

        echo "Hello world <br>";
    };


    sayHello();
    

    // function with parameter

    function sayHello2($name){
        echo "Hello $name <br>";
    };


    sayHello2("raja");


    // function with return type 
    function add($a, $b){
        return $a + $b;
    };



    
    $a = 10;
    $b = 14;

    $c = add($a,$b);

    echo $c;


    // function with default parameter


    function sayHello3($name = "suraj"){
        echo "Hello $name <br>";
    };


    sayHello3("rani");

    echo "<br>";
    echo "function without parameter <br>";

    sayHello3();



    echo "<br>";

?>




</body>

</html>