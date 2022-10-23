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
    <title>Gurung Cinema</title>
    <link rel="stylesheet" type="text/css" href="./css/movie.css">
    <script src="./js/movie.js" defer></script>
</head>
<body>

    <header id="heads">
         <h1 class="headers">Gurung Cinema</h1>
    </header>
    <div class="section">
        <a href="Logout.php" class="btn">logout</a>
        <a href="index.php" class="btn">Home</a>
    </div>
    <div class="Screen1"></div>
    <div class='whole'>
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
         $Image = $row['image'];
         $Description = $row['Description'];
         $Cast = $row['Cast'];
         $Director = $row['Director'];
         $Rating = $row['Ratings'];
          echo "
        <div class='movieSelect'>
            <div class='photo' >
                <img class='image' src='./assests/$Image'/ onclick='selectMovie($Id);'>
            </div>
            <div class='moviename'>
                <div class='time' onclick='selectMovie($Id);'>Time: $Showtime</div>
                <div class='name'>Name: $Name</div>
                <div class='duration'>Duration: $Duration</div>
                <div class='date'>Release-Date: $Release_Date</div>
                <div class='detail'>Description: $Description</div>
                <div class='cast'>Cast: $Cast</div>
                <div class='director'>Direction: $Director</div>
                <div class='rating'>Rating: $Rating</div>
            </div>
        </div>";
     }
    }
    ?>
    </div>
</body>
</html>