<?php
include '../includes/db.inc.php';
session_start();
$id  = $_GET['Updateid'];
if(isset($_POST['submit'])){
  $Showtime = $_POST['Time'];
  $Name = $_POST['Name'];
  $Release_Date = $_POST['Release_Date'];
  $Duration = $_POST['Duration'];
  $Image = $_POST['image'];
  $Description = $_POST['Description'];
  $Cast = $_POST['Cast'];
  $Director = $_POST['Director'];
  $Rating = $_POST['Ratings'];

  $sql = "update `movies` set Time = '$Showtime', Name = '$Name', Release_Date = '$Release_Date', Duration='$Duration', image='$Image', Description = '$Description', Cast = '$Cast',Director = '$Director', Ratings = '$Rating';";
  $result = mysqli_query($connection, $sql);

  if($result){
    header('location:DisplayDetail.php');
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
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
    <form method="POST" action="">
    <div class="mb-3">
    <label class="form-label">Showtime</label>
    <input type="text" class="form-control" placeholder="time" name="Time">
  </div>
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Movie name" name="Name">
  </div>
  <div class="mb-3">
    <label class="form-label">ReleaseDate</label>
    <input type="Date" class="form-control" name="Release_Date">
  </div>
  <div class="mb-3">
    <label class="form-label">Duration</label>
    <input type="text" class="form-control" name="Duration">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="text" class="form-control" name="image">
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <input type="text" class="form-control" name="Description" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Cast</label>
    <input type="text" class="form-control" name="Cast" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Director</label>
    <input type="text" class="form-control"  name="Director" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Ratings</label>
    <input type="text" class="form-control" name="Ratings" required>
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form> 
    </div>
   
  </body>
</html>