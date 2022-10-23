<?php
include 'databaseconnection.php';
session_start();
if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phonenumber = $_POST['Phonenumber'];
    $Password = $_POST['Password'];

    $sql = "insert into `users` (Name, Email, Phonenumber, Password) values ('$Name', '$Email', '$Phonenumber', '$Password')";
    $result = mysqli_query($connection,$sql);
    if($result){
        echo " .$Name, .$Email, .$Phonenumber, .$Password";
        header("Location:display.php");
    }
    else{
        die(mysqli_error($connection));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="your name" name="Name">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="Email" class="form-control" placeholder="Your mail" name="Email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">phone number</label>
    <input type="text" class="form-control" placeholder="enter more than 10 numbers" name="Phonenumber">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="Password" class="form-control" placeholder="enter more tha 8 charater" name="Password" required>
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> 
    </div>
   
  </body>
</html>