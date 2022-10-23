<?php 
include './includes/db.inc.php';
session_start();
if(isset($_POST['submit'])){

if($_POST['password'] != $_POST['cpassword']){
    echo "Password do not match";
    die();
}

$Fname = mysqli_real_escape_string($connection, $_POST['first']);
$Lname = mysqli_real_escape_string($connection, $_POST['last']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = md5($_POST['password']);
$cpassword = md5($_POST['cpassword']);
$phonenumber = mysqli_real_escape_string($connection, $_POST['phonenumber']);


$select = "SELECT * FROM users WHERE email ='$email'";

$result = mysqli_query($connection, $select);
if (mysqli_num_rows($result) > 0) {
    echo "Email already exists";
    $error[] = 'user already exists';
} else{
    if($password != $cpassword){
        $error[] = 'password not matched';
    }
    else{
        $insert = "INSERT into `users` (first_name, last_name, Email, `Password`, Phonenumber) VALUES ('$Fname', '$Lname','$email','$password','$phonenumber')";
        $insertResult = mysqli_query($connection, $insert);
        if($insertResult){
        echo "Registration Successful";
        header('location: Login.php');
        }else{
        echo "Registration failed";
        }
    //  print_r($insert);
    //  die();
    }
}
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css"
</head>
<body>
    <div class="container">
    <h1>REGISTRATION FORM</h1>
    <form method="POST" action="Register.php">
        <label id="Myform">First Name</label>
        <input class="name" type="text" name="first" placeholder="First Name" required />
        <br>
        <label>Last Name</label>
        <input class="name" type="text" name="last" placeholder="Last Name"required />
        <br>
        <label>Email</label>
        <input class="name" type="email" name="email" required />
        <br>
        <label>Password</label>
        <input class="name" name="password" type="password" placeholder="enter 8 or more words">
        <br>
        <label>Confirm Password</label>
        <input class="name" name="cpassword" type="password">
        <br>
        <label for="phone">Phone Number</label> 
        <input type="number" class="name" name="phonenumber" id="phone">
        <br>
        <br>
        <button class="button" type="submit" name="submit">Submit</button>
        <br>
        
        <p>Click here if you have account</p><a href="Login.php">Login</a>
        </div>
    </form>
</body>
</html>