<?php


include('DB.php');

$firstName = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];






if (isset($_POST['login'])) {

    $firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "INSERT INTO users (firstName, lastName, email)VALUES ('$firstName', '$lastname', '$email')";

    include('valid.php');

    $Result = mysqli_query($conn, $sql);
    
}


?>