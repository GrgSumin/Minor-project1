<?php
include_once './includes/db.inc.php';
session_start();
$id  = $_GET['Updateid'];
$sql = "SELECT * FROM `users` where id=$id";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);
            $Name = $row['first_name'].' ' . $row['last_name'];
            $Email = $row['Email'];
            $Phonenumber = $row['Phonenumber'];
            $password = $row['password'];
if(isset($_POST['submit'])){
    $Name = $_POST['first_name'].' ' . $row['last_name'];
    $Email = $_POST['Email'];
    $Phonenumber = $_POST['Phonenumber'];
    $Password = $_POST['Password'];

    $sql = "update `users` set id = $id, Name = '$Name', Email = '$Email', Phonenumber= '$Phonenumber', Password = '$Password' where id = '$id'";
    $result = mysqli_query($connection,$sql);
    if($result){
      header('location:display.php');
        
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
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder="your name" name="Name" value=<?php echo  $Name; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="your name" name="Name" value=<?php echo  $Name; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="Email" class="form-control" placeholder="Your mail" name="Email" autocomplete="off" value=<?php echo  $Email; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">phone number</label>
    <input type="text" class="form-control" placeholder="enter more than 10 numbers" name="Phonenumber" value=<?php echo  $Phonenumber; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="Password" class="form-control" placeholder="enter more tha 8 charater" name="Password" required value=<?php echo  $password; ?>>
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form> 
    </div>
   
  </body>
</html>