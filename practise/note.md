### 1. This line of code will insure that, this function will be called only if the post request is made so that the variable defined after this will never get depricated.

```
 if ($_SERVER["REQUEST_METHOD"] == "POST") 
```