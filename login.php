<?php include('server.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

<h2>Log in</h2>

    <form action="login.php" method="post">
        <div class="username">
            <label for="username">Username</label>
            <input type="text" name="username" required>

        </div>
        
        <div class="password">
            <label for="password">Password</label>
            <input type="text" name="password" required>
        </div>

        <button type="submit" name="login-user">Log in</button>

            <p>Not a user? Sign up here <a href="registration.php"><b>Register</b></a></p>
    </form>
    
</div>
</body>
</html>