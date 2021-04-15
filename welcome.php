<?php
session_start();

echo "<span>Welcome ".$_SESSION['login_email']."</span>";
echo "<br>";
echo "<a href='logout.php'>Logout</a>";