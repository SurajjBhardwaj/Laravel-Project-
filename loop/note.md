# Loops in PHP

## Introduction

Loops are used in programming to execute a block of code repeatedly as long as a specified condition is true. PHP supports several types of loops, each with its own purpose and syntax.

## Function List

1. **for loop**: Executes a block of code a specified number of times.

2. **while loop**: Executes a block of code as long as a specified condition is true.

3. **do-while loop**: Executes a block of code once, and then repeats the execution as long as a specified condition is true.

4. **foreach loop**: Iterates over arrays or objects.

## Usage Examples

### for loop

```php
for ($i = 0; $i < 5; $i++) {
    echo "The number is: $i <br>";
}
```

### While Loop

```
$b = 0;
while($b <= 5){
    echo $b;
    $b++;
}
```

### do-while loop

```
$num = 1;
do {
    echo "The number is: $num <br>";
    $num++;
} while ($num <= 5);
```

### foreach loop

```
$colors = ["red", "green", "blue"];
foreach ($colors as $color) {
    echo "$color <br>";
}
```
