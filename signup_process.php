<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$rollNumber = $_POST['rollNumber'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

// Check if the passwords match
if ($password !== $confirmPassword) {
    echo "<script>alert('Re-enter your password correctly');window.location.href='signup.php';</script>";
    exit;
}

// Check if the roll number already exists
$sql = "SELECT * FROM alldetails WHERE rollNumber='$rollNumber'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Account already exists');window.location.href='signup.php';</script>";
    exit;
}

// Insert user details into the database
$sql = "INSERT INTO alldetails (rollNumber, password) VALUES ('$rollNumber', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: qrmail.php?rollNumber=$rollNumber");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
