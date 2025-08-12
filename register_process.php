<?p
  
$conn = new mysqli("localhost", "root", "", "collab_db");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    die("Passwords do not match.");
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful! <a href='login.php'>Login here</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
