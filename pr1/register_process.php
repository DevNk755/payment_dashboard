<?php
include 'config.php';

$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password)
        VALUES ('$name', '$email', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration Successful. <a href='login.php'>Login करें</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
