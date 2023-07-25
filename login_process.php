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

// Check if the roll number and password match
$sql = "SELECT * FROM alldetails WHERE rollNumber='$rollNumber' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: qrmail.php?rollNumber=$rollNumber");
exit;

    exit;
} else {
    echo "<script>alert('Invalid Details');window.location.href='login.php';</script>";
    exit;
}

$conn->close();
?>
