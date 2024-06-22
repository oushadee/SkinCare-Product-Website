<?php
include 'connection.php';


$firstName_1 = "";
$lastName_1 = "";
$email_1 = "";
$password_1 = "";
$confirmPassword_1 = "";

    $firstName_1 = $_POST['firstName_1'];
    $lastName_1 = $_POST['lastName_1'];
    $email_1 = $_POST['email_1'];
    $password_1 = $_POST['password_1'];
    $confirmPassword_1 = $_POST['confirmPassword_1'];
    
  

    $sql = "INSERT INTO register (First_Name,Last_Name,Email,Password,Confirm_Password) VALUES ('$firstName_1','$lastName_1','$email_1','$password_1','$confirmPassword_1')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully.";
    } else {
        echo "Error: ";
    }
    mysqli_close($conn);
?>

