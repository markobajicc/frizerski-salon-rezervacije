<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>

<div class="signup-container">
    <h3 class="signup-title">Sign up</h3>
    <form action="../src/auth/signup/signup.src.php" method="post" class="signup-form">
        <input type="text" name="uname" placeholder="Username" class="signup-input"><br>
        <input type="password" name="pwd" placeholder="Password" class="signup-input"><br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password" class="signup-input"><br>
        <input type="email" name="email" placeholder="E-mail" class="signup-input"><br>
        <button type="submit" name="submit" class="signup-button">SIGN UP</button>
    </form>
</div>

    
</body>
</html>