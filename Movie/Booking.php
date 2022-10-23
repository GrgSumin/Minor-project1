<?php
include_once './includes/db.inc.php';
session_start();
print_r($_SESSION);
if(isset($_SESSION['id'])){
    if(isset($_POST['booking_btn'])){
        print_r($_POST);
        die();
        $id = $_SESSION['id'];
        $user_id = $_SESSION['id'];
        $Seats = $_POST['seat_no'];
        $Price = $_POST['Price'];
        $Status = $_POST['Status'];
        $movie_id = $_POST['Movie_id'];
        $sql = "insert into `booking` (user_id, Seats, Price, Status, Movie_id) values('$user_id', '$Seats', '$Price','$Status','$movie_id')";
        $result = mysqli_query($connection,$sql);
        if($result){
           
        }
        else{
            echo "failed";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gurung Cinema</title>
    <link rel="stylesheet" type="text/css" href="./css/movie.css">
    <script src="./js/Booking.js" defer></script>
</head>
<body>

    <header id="heads">
         <h1 class="headers">Gurung Cinema</h1>
    </header>
    <div class="section">
        <a href="Logout.php" class="btn">logout</a>
        <a href="User.php" class="btn">Home</a>
    </div>
    <div class="movie-container">
        <form action="" method="post">
        <div class="row">
            <input class="seat"  name="seat_no[]" value="a1">A1</div>
            <div class="seat"  name="seat_no[]" value="a2">A2</div>
            <div class="seat"  name="seat_no[]" value="a3">A3</div>
            <div class="seat"  name="seat_no[]" value="a4">A4</div>
            <div class="seat"  name="seat_no[]" value="a5">A5</div>
            <div class="seat"  name="seat_no[]" value="a6">A6</div>
            <div class="seat"  name="seat_no[]" value="a7">A7</div>
        </div>
        <div class="row">
            <div class="seat"  name="seat_no[]" value="b1">B1</div>
            <div class="seat"  name="seat_no[]" value="b2">B2</div>
            <div class="seat"  name="seat_no[]" value="b3">B3</div>
            <div class="seat"  name="seat_no[]" value="b4">B4</div>
            <div class="seat"  name="seat_no[]" value="b5">B5</div>
            <div class="seat"  name="seat_no[]" value="b6">B6</div>
            <div class="seat"  name="seat_no[]" value="b7">B7</div>
        </div>
        <div class="row">
            <div class="seat"  name="seat_no[]" value="c1">C1</div>
            <div class="seat"  name="seat_no[]" value="c2">C2</div>
            <div class="seat"  name="seat_no[]" value="c3">C3</div>
            <div class="seat"  name="seat_no[]" value="c4">C4</div>
            <div class="seat"  name="seat_no[]" value="c5">C5</div>
            <div class="seat"  name="seat_no[]" value="c6">C6</div>
            <div class="seat"  name="seat_no[]" value="c7">C7</div>
        </div>
        <div class="row">
            <div class="seat"  name="seat_no[]" value="d1">D1</div>
            <div class="seat"  name="seat_no[]" value="d2">D2</div>
            <div class="seat"  name="seat_no[]" value="d3">D3</div>
            <div class="seat"  name="seat_no[]" value="d4">D4</div>
            <div class="seat"  name="seat_no[]" value="d5">D5</div>
            <div class="seat"  name="seat_no[]" value="d6">D6</div>
            <div class="seat"  name="seat_no[]" value="d7">D7</div>
        </div>
        <div class="row">
            <div class="seat"  name="seat_no[]" value="e1">E1</div>
            <div class="seat"  name="seat_no[]" value="e2">E2</div>
            <div class="seat"  name="seat_no[]" value="e3">E3</div>
            <div class="seat"  name="seat_no[]" value="e4">E4</div>
            <div class="seat"  name="seat_no[]" value="e5">E5</div>
            <div class="seat"  name="seat_no[]" value="e6">E6</div>
            <div class="seat"  name="seat_no[]" value="e7">E7</div>
        </div>
        <div class="row">
            <div class="seat"  name="seat_no[]" value="f1">F1</div>
            <div class="seat"  name="seat_no[]" value="f2">F2</div>
            <div class="seat"  name="seat_no[]" value="f3">F3</div>
            <div class="seat"  name="seat_no[]" value="f4">F4</div>
            <div class="seat"  name="seat_no[]" value="f5">F5</div>
            <div class="seat"  name="seat_no[]" value="f6">F6</div>
            <div class="seat"  name="seat_no[]" value="f7">F7</div>
        </div>
    </div>
        <p class="text">you have selected <span id="count">0</span> seats for price of $ <span id="total">0</span></p>
    <button class="button"  name="booking_btn">Book now</button>
    </form>
    <ul class="shown">
        <li>
            <small >N/a</small>
            <div class="seat"></div> 
        </li>
        <li>
            <small >Selected</small>
            <div class="seat selected"> </div>      
        </li>
        <li>
        <small>Booked</small>
            <div class="seat Booked"></div> 
        </li>
    </ul>


    <!-- <footer class="footer">
        <p>Copyright &copy; 2022 Contact : 9816649863,9846756702 & 9819199305</p>
    </footer> -->



    </body>
    </html>

<?php
}else {
    header("HTTP/1.0 404 Not Found");

}
?>