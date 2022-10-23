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
            <?php
        if(isset($_SESSION['id'])){
            echo '
            <a href="Booking.php" class="btn">Book Now</a>
            <a href="Logout.php" class="btn">logout</a>';
        }else {
            echo '
            <a href="Login.php" class="btn">login</a>
            ';
        }
        ?>
        <a href="Register.php" class="btn">Sign up</a>
         <a class="btn">About us</a>
        </div>
        <div class="Screen"></div>
        <div id="movies-container">
           <h3>Chose a movie</h3>
           <a class="bra">Brahmstra</a>
           <a class="one">OnepieceRed</a>
           <a class="ka">kabadi4</a>
        <!-- <footer class="footer">
            <p>Copyright &copy; 2022 
                <br> : 9816649863,9846756702 & 9819199305</p>
        </footer> -->

 

    </body>
</html>