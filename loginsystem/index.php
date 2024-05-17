<!DOCTYPE html>
<html lang="en">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
</head>

<head>


<body>
    <h2>Submit Form</h2>
    <form action="includes/signup.inc.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    

 require_once "includes/signup_view.inc.php";
    require_once "include/config_session.inc.php";

    check_signup_errors();
    ?>
</body>

</html>