
<?php 
include "db.php";

    $email = $_POST['email'];
  
    $sql = "INSERT INTO learner(Email) VALUE(?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
?>