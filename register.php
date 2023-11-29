<?php require("script.php")?>
<!--to access our script.php--> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <form action="script.php" method=post>
        <p>
            <label for=fname>Name:</label>
            <input type=text placeholder=first_name id=fname required name=name>
        </p>

        <p>
            <label for=uname>Username:</label>
            <input type=text placeholder=username id=uname required name=username>
        </p>

        <p>
            <label for=email>email:</label>
            <input type=email placeholder=email id=email required name=email>
        </p>

        <p>
            <label for=pass>Password:</label>
            <input type=password placeholder=password id=pass required name=password>
        </p>

        <button>Register</button name=submit>

        <p class=error><?php echo @$error?>
        <p class=success><?php echo @$success?>

    </form>
    
</body>
</html>