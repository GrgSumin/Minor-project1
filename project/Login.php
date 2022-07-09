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

 
    <form id="myform" method="POST" action="Login.php">
        <label>Email or Phonenumber</label>
        <input  class="name" type="text" name="email" required>
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

        <?php 
        include './php/databaseconnection.php';
        if(isset($_POST['email'])){
            echo $_POST['email'];
            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $password = md5($_POST['password']);
            $select = "SELECT * FROM register WHERE (email ='$email' || phonenumber='$email') && password='$password'";
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
                echo "\n Invalid Credentials";
                $error[] = 'incorrect email or password';
            }
        }
        ?>

    </form>

    
</body>
</html>