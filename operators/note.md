## 1. Concatinate (.)
conctenation of two strings:
```
$c = $name1 . $name2;
echo $c;
echo "<br>";
```


concateation of two strings with space:

```
$d = $name1 . " " . $name2;
echo $d
```


## 2. All aithematic operations (+, - , * , /, %)

## 3. Power 

```
10 ** 3
```

## 4. All Bodmas rules are applied
## 5. assign operator (=) 

```
$a = 5;
$a = $a +2; or $a+=2
```

## 6. Comparision operator

```
$a = 6;
$b = 7;

if($a == $b){
    echo "equal values"
}

Note: comparision operator will give true or false.
NOte: it will not check the data type is same or not, it will just focus on values.

Not Equal to

$a = 6;
$b = 8;

if($a != $b){
    echo "not same";
}
```

Best thing, we can also check whether the data type and values are same or not using three (===)

```
$a = 2;
$b = "2";

if($a === $b){
    echo "data types of both variable are same and values are equal";
}

if($a !== $b){
    echo "not same data type not eqal value";
}
```

## 7. Logical Operator

& 
```
if(true & true){
    echo "both of the conditions are true";
}
```

or (||)

```
if(true || false){
    echo "anyone will true"
}
```


## 8. Increment Operators or Decrement Operator

```
$a = 1;
$b = ++a;

// now b is having value 2


works same as other languages like c++, js.

```


### 9. Conditional Operators

```
<?php
$bool = true;
$a = 1;
$b = 4;
if ($a < $b && !$bool) {
echo "First condition is true!";||
} elseif ($a < $b && $bool) {
echo "Second condition is true!";
}
?>
```


### 10. Switch 

```
$a = 1;
$b = 4;
switch ($a) {
case 1:
echo "The first case is correct!";
break;
case 3:
echo "The second case is correct!";
break;
default:
echo "None of the conditions were true!";
}
```

### 11. Match

```
$a = "1";
$b 4;
$result = match ($a) {
1, 3, 5 => "Variable a is equal to one!",
2 => "Variable a is equal to two!",
default => "None were a match",
echo $result;


// Output will be
Variable a is equal to one!
```






 


