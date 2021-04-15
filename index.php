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
    <h1>Welcome, Register Your Details.</h1>
    <form action="signup.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name?"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email?"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Your Password?"><br>

        <input type="submit" name="register" id="register" value="Sign Up">

        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
</div>
</body>
</html>