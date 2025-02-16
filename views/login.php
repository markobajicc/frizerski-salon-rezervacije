<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/style.css">
</head>

<body>
    <div class="login-container">
        <h3 class="login-title">Login</h3>
        <form action="../src/auth/login/login.src.php" method="post" class="login-form">
            <input type="text" name="uname" placeholder="Username" class="login-input"><br>
            <input type="password" name="pwd" placeholder="Password" class="login-input"><br>
            <button type="submit" name="submit" class="login-button">LOGIN</button>
        </form>
    </div>

</body>

</html>