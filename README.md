## 1. HTML ME PHP LIKH SAKTE HAI PAR PHP ME HMTL NHI

## 2. http://localhost:3000/test/learning/variables.php aise vala url tab chlega jab index.php ke alawa variable.php compile karna ho

## 3. incase of index.php we can access the same at http://localhost:3000/test/learning


<h1> Variables: </h1>


## 4. Boolean Jhol

```
    $manish = 0;
    this means Manish is false
    this also means manish has an integer of value 0

        $manish = false;
        this means manish is a booleans who is having value as false

```


## 5. We can create a variable and can assign later too

e.g. 

```$suraj;
suraj = 5;
echo $suraj
// it will give output as 5
```

But for Good Practice we should not do this.
We should always assign anything.

FOr example: 
if you want to create an string start give them an empty value 
```
$suraj = "";
```

if you want to create an integer assign them a value as 0

```
$math_score = 0;
```

if you want to create a boolean, assing them a value as false during intializing :

```
$truth = false;
```



### 6. We can change the data type too, we have two method to change the data type

1st Method: 
```
$number = "10"; // string
$number = (int)$number; // casting to integer
echo $number; // outputs 10
```

2nd Method :
```
$number = "10"; // string
settype($number, "integer");
echo $number; // outputs 10
````


### 7. (a) Super Global Variable always starts with "_" and ends with "[]"

```
<?php
echo $_SERVER["DOCUMENT_ROOT"];
?>
```
Here are some sueper global variable 

<img src="./screenshot/server details.png >



### 8. how can you start a new line in php ?

```
echo "<br>";
```


<h2>GET Method to acccess all the parameters of an url</h2>

if hte url is ```http://localhost:3000/test/index.php?name=PHP&email=pandeyyysuraj@gmail.com```
then we can access the data as this ```$_GET["name"] $_GET["email"]```

even we can assign them and use them
like this :
```
$newName = $_GET["name"];
echo $newName

// output will be the same
```


Here are all the super global variable :

```
<?php
$_SERVER[""];
$_GET[""];
$_POST[""];
$_REQUEST[""];
$_FILES[""];
$_COOKIE [""];
$_SESSION[""];
$_ENV [""];
?>
```




