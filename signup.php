<?php
session_start();

if (filter_has_var(INPUT_POST, 'register')) {
    if ($_REQUEST['name'] == '' || $_REQUEST['email'] == '' || $_REQUEST['password'] == '') {
        echo "You are required to fill all the input fields";
        echo "<br>";
        echo "<a href='index.php'>Go Back</a>";
        return;
      } else {
        $user = $_REQUEST['email'];
        $db = file_get_contents('database.txt');
        $db= explode(",", $db);
        if(in_array($user, $db)){
          echo $user . " is a registered user";
          echo "<br>";
          echo "<a href='index.php'>Go Back</a>";
          echo "<br>";
          echo "<a href='login.php'>Login now</a>";
          return;
        } else {
          $username = $_REQUEST['name'];
          $email = $_REQUEST['email'];
          $password = $_REQUEST['password'];
          // $text =  "\$username\',' . \$email . ',' . \$password\" \n";
          $text = ($username . "," . $email . "," . $password . "," ."\n");
          $fp = fopen('database.txt', 'a+');
            if(fwrite($fp, $text))  {
              echo "Account created successfully";
              echo "<br>";
              echo "<a href='login.php'>Login now</a>";
              $_SESSION['email'] = $email;
              $_SESSION['password'] = $password;
            }
            fclose ($fp);
      }
    }
  }

  if (filter_has_var(INPUT_POST, 'login')) {
    if ($_REQUEST['email'] == '' || $_REQUEST['password'] == '') {
      echo "You are required to fill all the input fields";
      echo "<br>";
      echo "<a href='login.php'>return to Login page</a>";
      return;
    } else {
      $login_email = $_REQUEST['email'];
      $login_password = $_REQUEST['password'];
      $db = file_get_contents('database.txt');
      $db= explode(",", $db);
      
      if (in_array($login_email, $db) && in_array($login_password, $db)){

        $_SESSION['login_email'] = $login_email;
        $_SESSION['login_password'] = $login_password;
        header('location: welcome.php');
        return;
        
      } else {
        echo "You either entered an invalid email address or password, please try again";
        echo "<br>";
        echo "<a href='login.php'>return to Login page</a>";
      }
    }
  }

  if (filter_has_var(INPUT_POST, 'reset')) {
    if ($_REQUEST['email'] == '' || $_REQUEST['password'] == '') {
      echo "You are required to fill all the input fields";
      echo "<br>";
      echo "<a href='login.php'>return to Login page</a>";
      return;
    } else {
    
      $reset_email = $_REQUEST['email'];
      $reset_password = $_REQUEST['password'];
      $db = file_get_contents('database.txt');
      $db= explode(",", $db);
      if (!in_array($reset_email, $db)){
        echo "This email entered is not a registered user, please confirm the correct address";
        echo "<br>";
        echo "<a href='login.php'>return to Login page</a>";
      } else {
        $_SESSION['reset_password'] = $reset_password;
        $_SESSION['reset_email'] = $reset_email;
        
        // $db=implode("\n",file('database.txt'));
        // $fp=fopen('database.txt','w');
        // $str=str_replace($_SESSION['login_password'],$reset_password,$db);

        $db = file_get_contents('database.txt');
        $file_contents = str_replace($_SESSION['login_password'],$reset_password ,$db);
        $file = fopen('database.txt', 'w');
        file_put_contents($file,$file_contents);
        header('location: login.php');



        
      }
  
    }
  }