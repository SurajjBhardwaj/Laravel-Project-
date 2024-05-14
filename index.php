<?php

echo "Welcome to PHP's world, ";

?>




<?php

$data = "suraj !";

echo $data;

echo "<br>";

echo "<h3> accessing data using GET method </h3>";

$newname = $_GET["name"];
echo "name is: " ,$newname;

echo "<br>";

echo "email is : ", $_GET["email"];
echo "<br>";

?>



<!-- accessing data using REQUEST method -->

<?php

// using request method we can access data, method and cookies as well

echo "<h3> accessing data using REQUEST method </h3>";
echo "name is : ", $_REQUEST["name"];




?>


<!-- FIles Super GLoabal keyword -->

njjj
<?php

echo $_FILES["name"];
echo "<br>";

?>



<!-- session -->
<?php

// set yoour sesssiion variables

$_SESSION["name"] = "raj";
echo $_SESSION["name"]

?>