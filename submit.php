<?php
$servername = "remotleetest.crwm2qa60dbe.us-east-1.rds.amazonaws.com"; // RDS Endpoint
$username = "remotlee";  // RDS Username
$password = "Remotlee$123";  // RDS Password
$dbname = "trial"; // Your Database Name

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get Form Data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert Data
$sql = "INSERT INTO contacts (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn->close();
?>
