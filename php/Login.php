<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
 
</head>

<body>
    <h2>GURUNG CINEMA</h2>

 
    <form id="myform" method="POST" action="php/loging.php">
        <label>Username or Phonenumber</label>
        <input  class="name" type="text" name="username" required>
        <br>
        <label>Password</label>
        <input class="name" type="password" name="password" required>
        <br>
        <label>show password</label>
        <input type="checkbox" name="cjeckpassword">
        <br>
        <button type="submit">Sign in</button>
        <br>
        <a href="Register.php">Sign up</a>
        <br>
        <a href=>Forgot Password?</a>
    </form>

    
</body>
</html>