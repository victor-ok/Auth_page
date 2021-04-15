<?php session_start();
// echo "<span>Welcome ".$_SESSION['reset_email']."</span>";
// echo "<span>Your new password is ".$_SESSION['reset_password']."</span>";
// echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
<div>
    <h1>Login</h1>
    <form action="signup.php" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email?">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your Password?">

        <input type="submit" name="login" value="Login">
        <p>Don't have an account? <a href="index.php">Register</a></p>
        <p>Forgot your password? <a href="reset.php">Reset Password</a></p>
    </form>
</div>
</body>
</html>