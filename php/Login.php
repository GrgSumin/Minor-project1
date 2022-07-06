<?php 
include 'databaseconnection.php';
if(isset($_POST['submit'])){
    $Fname = mysqli_real_escape_string($connection, $_POST['first']);
    $Lname = mysqli_real_escape_string($connection, $_POST['Last']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $phonenumber = mysqli_real_escape_string($connection, $_POST['phonenumber']);
    $user_type = mysqli_real_escape_string($connection, $_POST['user_type']);

    $select = "SELECT * FROM register WHERE email ='$email' && password= '$password' ";
    $result = mysqli_query($connection, $select);
    
    if (mysqli_num_rows($result) > 0) {

       $row = mysqli_fetch_array($result);
       if($row['user_type']=='admin') {
        $_SESSION['admin_name'] = $row['name'];
    header("Location:Admin.php");
       }
       else if($row['user_type']=='user') {
    
         $_SESSION['user_name'] = $row['user'];
     header("Location:User.php");
       }
    }
    else{
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
 
</head>

<body>
    <h2>GURUNG CINEMA</h2>

 
    <form id="myform" method="POST" action="">
        <label>Username or Phonenumber</label>
        <input  class="name" type="text" name="username" required>
        <br>
        <?php 
        if(isset($error)){
            foreach($error as $error){
               echo '<span class="msg">'.$error.'</span>'; 
            }
        }
        ?>
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