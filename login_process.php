<?php

$conn = new mysqli("localhost", "root", "", "collab_db");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "Login Successful!";
} else {
    echo "Invalid Login.";
}

$conn->close();

?>

