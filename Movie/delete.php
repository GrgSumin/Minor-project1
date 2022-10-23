<?php
include 'db.inc.php';
session_start();
if(isset($_GET['deleteid']))   //we can acess parameter from url with GET
{
    $id = $_GET['deleteid'];
    
    $sql = "DELETE FROM `users` where id = '$id'";
    $result = mysqli_query($connection, $sql);
    if($result){
    header('location:display.php');
}
else {
    die(mysqli_error($connection));
}
}
?>