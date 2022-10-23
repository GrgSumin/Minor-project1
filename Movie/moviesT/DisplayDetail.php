<?php
include '../includes/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="container">
        <button class="btn btn-primary my-5"><a href="InsertMovie.php" class="text-light">Add Movie</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Time</th>
      <th scope="col">Release_Date</th>
      <th scope="col">Duration</th>
      <th scope="col">Descrition</th>
      <th scope="col">Cast</th>
      <th scope="col">Director</th>
      <th scope="col">Rating</th>
      <th scope="col">Operation</th>
      

    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from `movies`";
    $result = mysqli_query($connection,$sql);
    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            $Id = $row['Id'];
            $Name = $row['Name'];
            $Showtime = $row['Time'];
            $Release_Date = $row['Release_Date'];
            $Duration = $row['Duration'];
            $Description = $row['Description'];
            $Cast = $row['Cast'];
            $Director = $row['Director'];
            $Rating = $row['Ratings'];
            echo '<tr>
            <th scope="row">'.$Id.'</th>
            <td>' .$Name.'</td>
            <td>' .$Showtime.'</td>           
            <td>'.$Release_Date.'</td>
            <td>'.$Duration.'</td>
            <td>'.$Description.'</td>
            <td>'.$Cast.'</td>
            <td>'.$Director.'</td>
            <td>'.$Rating.'</td>
            
            <td><button class="btn btn-primary"><a href="UpdateDetail.php?Updateid='.$Id.' " class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="DeleteMovie.php?deleteid='.$Id.'" class="text-light">Delete</a></button></td>
            </tr>';
        }
    }
    ?>
  
    
  </tbody>
</table>
    
</body>
</html>