<?php
include '../databaseconnection.php';
session_start();

if (isset($_POST['submit'])){
  $Name = $_POST['Name'];
  $Seats = $_POST['Seats'];
  $Status = $_POST['Status'];

  $sql = "Insert into `theater` (Name, Seats, Status) values ($name, $Seats, $Status)";
  $result = mysqli_query($connection, $sql);
  if($result){
    echo " .$Name, .$Seats, .$Status";
    header("Location:display.php");
}
else{
    die(mysqli_error($connection));
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label class="form-label"> TheaterName</label>
    <input type="text" class="form-control" placeholder="Theater name" name="Name">
  </div>
  <div class="mb-3">
    <label class="form-label">Total Seats</label>
    <input type="text" class="form-control" name="Seats">
  </div>
  <div class="mb-3">
    <label class="form-label">Status</label>
    <input type="text" class="form-control" name="Status">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
    
</body>
</html>

