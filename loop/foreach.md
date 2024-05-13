### example 1:


```
$student_scores = [
    'Alice' => 85,
    'Bob' => 90,
    'Charlie' => 78
];

foreach ($student_scores as $student => $score) {
    echo "$student scored $score marks.<br>";
}
```

Output
```
Alice scored 85 marks.
Bob scored 90 marks.
Charlie scored 78 marks.


```

### example 2:

```
$users = [
    ['id' => 1, 'name' => 'John', 'age' => 25],
    ['id' => 2, 'name' => 'Jane', 'age' => 30],
    ['id' => 3, 'name' => 'Doe', 'age' => 28]
];

foreach ($users as $user) {
    echo "User ID: {$user['id']}, Name: {$user['name']}, Age: {$user['age']}<br>";
}
```

Output:
```
User ID: 1, Name: John, Age: 25
User ID: 2, Name: Jane, Age: 30
User ID: 3, Name: Doe, Age: 28
```


### example 3:

```
class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person1 = new Person('Alice', 25);
$person2 = new Person('Bob', 30);
$person3 = new Person('Charlie', 28);

$people = [$person1, $person2, $person3];

foreach ($people as $person) {
    echo "{$person->name} is {$person->age} years old.<br>";
}

```


output:

```
Alice is 25 years old.
Bob is 30 years old.
Charlie is 28 years old.
```

