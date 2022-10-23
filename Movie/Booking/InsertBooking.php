<?php
include '../../db.inc.php';
session_start();
if(isset($_POST['submit'])){
    $userid = $_POST['userid'];
    $showid = $_POST['showid'];
    $Seats = $_POST['Seats'];
    $Price = $_POST['Price'];
    $Status = $_POST['Status'];

    $sql = "insert into `booking` (userid, showid, Seats, Price, Status) values ($userid, $showid, '$Seats', '$Price'";

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
    <label class="form-label">user_id</label>
    <input type="text" class="form-control" name="user_id">
  </div>
  <div class="mb-3">
    <label class="form-label">show_id</label>
    <input type="text" class="form-control" name="Show_id">
  </div>
  <div class="mb-3">
    <label class="form-label">Seats</label>
    <input type="text" class="form-control" name="Seats">
  </div>
  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="Price">
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
    </div>