## 1. Two methods of initializing an array

1st method
```
$name = ("suraj", "niraj", "raja ji");
```

2nd method 
```
$name = ["suraj", "niraj" , "raja ji"];
```



## 2. Accessing an element of an array is quite similar of others.
### 3. Note :

```
$name = ["suraj", "niraj" , "raja ji"];
$name[] = "prabhash"
```

## 4. Changing a value 

```
$name[1] = "raja";

```


## 5. You can store value in the term of value and pair
e.g.
```
It is an assosiative array: 
<?php
$tasks = [
"laundry" => "Daniel",
"trash" => "Frida",
"vacuum" => "Basse",
"dishes" => "Bella"
];
echo $tasks["laundry"];
?>
```

Insert in to an associative array :
```
$tasks["new"] = "radhe";
```


## 6. Functions on an Array

```
print_r($nameOfArray)
count($nameOfArray)
sort($nameOfArray) // it will update the array 
array_push($nameOfArray, "whatDoYouWantToPush") // push in an array, it will push the value in to the last
```


## 7. Nesting an array inside of an array 

```
<?php
$fruits = ["apple", "banana", "cherry" ];
$test = ["Mango", "Strawberry"];
array_splice($fruits, 2, 0, $test);
print_r($fruits);
?>
```


## 8. Multi dimentional Array

```
<?php
$food = [
array("apple", "mango"),
"banana",
"cherry"
];
echo $food[0][b];
?>
```

## 9. Associative array within an associative array is possible 

e.g.
```
<?php
$food = [
"fruits" => array("apple", "banana", "cherry"),
"meat" => array("chicken", "fish"),
"vegetables" => array("cucumber", "carrot"),
echo $food ["vegetables"][0];
?>
```

## 10. 
