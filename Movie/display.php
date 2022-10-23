<?php
include './includes/db.inc.php';
session_start();
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
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add users</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phonenumber</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from `users`";
    $result = mysqli_query($connection,$sql);
    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            $Id = $row['Id'];
            $Name = $row['first_name'].' '.$row['last_name'];
            $Email = $row['Email'];
            $Phonenumber = $row['Phonenumber'];
            $password = $row['password'];
            echo '<tr>
            <th scope="row">'.$Id.'</th>
            <td>' .$Name.'</td>
            <td>' .$Email.'</td>
            <td>'.$Phonenumber.'</td>
            <td>'.$password.'</td>
            <td><button class="btn btn-primary"><a href="update.php?Updateid='.$Id.' " class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$Id.'" class="text-light">Delete</a></button></td>
            </tr>';
        }
    }
    ?>
  
    
  </tbody>
</table>
    
</body>
</html>