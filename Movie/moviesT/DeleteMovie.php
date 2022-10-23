<?php
include '../includes/db.inc.php';
$id = $_GET['deleteid'];
if($id){
  $sql = "Delete from `movies` where id = $id";
  $result = mysqli_query($connection, $sql);

  if($result){
    header('Location: DisplayDetail.php');
  }
  else{
    die(mysqli_error($connection));
  }
}else {
    echo "hello";
}
?>