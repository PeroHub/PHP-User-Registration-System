<?php include('server.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraton</title>
</head>
<body>
    <div class="container">

    <h2>Registration</h2>

        <form action="registration.php" method="post">
            <div class="username">
                <label for="username">Username</label>
                <input type="text" name="username" require>

            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="text" name="email" required>
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type="text" name="password" required>
            </div>

            <div class="password2">
                <label for="password2">Password2</label>
                <input type="text" name="password2" required>
            </div>
            <button type="submit" name="register-user">Submit</button>

                <p>Already a user?<a href="login.php"><b>Log in</b></a></p>
        </form>
        
    </div>
</body>
</html>