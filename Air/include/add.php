
<?php 
include "db.php";



    $Email = $_POST['Email'];
    $FirstName = $_POST['FirstName'];
    $MiddleName = $_POST['MiddleName'];
    $LastName = $_POST['LastName'];
    $Suffix = $_POST['Suffix'];
    $Birthdate = $_POST['Birthdate'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];
    $School = $_POST['School'];
    $StudentId = $_POST['StudentId'];
    $SchoolAdd = $_POST['SchoolAdd'];
  
    $sql = "INSERT INTO student(Email,FirstName,MiddleName,LastName,Suffix,Birthdate,Age,Gender,Address,ContactNum,School,SchoolAdd,StudentId) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssssssssssss', $Email, $FirstName, $MiddleName, $LastName, $Suffix, $Birthdate, $Age, $Gender, $Address,        $Contact, $School, $SchoolAdd, $StudentId);
$stmt->execute();
?>