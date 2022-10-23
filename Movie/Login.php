<?php
include './includes/db.inc.php';
session_start();
if(isset($_POST['email'])){
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['password']);
    $select = "SELECT * FROM users WHERE (email ='$email' || phonenumber='$email') && password='$password'";
    $result = mysqli_query($connection, $select);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION['id'] = $row['Id'];
            header("Location: movies.php");
        }
    }
    else{
        echo "\n Invalid Credentials";
        $error[] = 'incorrect email or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css"
 
</head>

<body>
 
    <div class="container">
    <h2 class="Gurung">GURUNG CINEMA</h2>

    <form id="myform" method="POST" action="Login.php">
        
        <label class="mail">Email or Phonenumber</label>
        <input  class="name" type="text" name="email" required>
        <br>
        <label class="mail">Password</label>
        <input class="name" type="password" name="password" required>
        <br>
        <label class="mail">show password</label>
        <input type="checkbox" name="cjeckpassword">
        <br>
        <div class="gg">
        <button  class="btn"type="submit">Sign in</button>
        <br>
        <a href="Register.php">Sign up</a>
        <br>
        <a href=>Forgot Password?</a>
        </div>
    </form>
    </div>

    
</body>
</html>