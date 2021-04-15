<?php 
session_start();

?>

<body>
<div>
    <h1>Reset Password</h1>
    <form action="signup.php" method="post">
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email?">

        <label for="password">New Password</label>
        <input type="password" id="password" name="password" placeholder="Your Password?">

        <input type="submit" name="reset" value="reset">
    </form>
</div>
</body>
</html>