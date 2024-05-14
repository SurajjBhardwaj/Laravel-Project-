<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


function duplicate($array){
    // Sort the array
    sort($array);
    
    // Initialize the variable to store duplicate
    $duplicate = null;
    
    // Iterate through the sorted array
    for($i = 1; $i < sizeof($array); $i++){
        // Check if current element is equal to previous element
        if($array[$i] === $array[$i-1]){
            $duplicate = $array[$i];
            break;
        }
    }
    
    return $duplicate;
}

$array = [1,2,3,4,5,1];

// Find a duplicate (assuming there's only one duplicate)
$db = duplicate($array);
echo $db;

?>




</body>


</html>