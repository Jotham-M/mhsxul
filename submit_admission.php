<?php
// Database connection
$host = "localhost";
$dbname = "mhs_database";
$username = "root";
$password = ""; // or your actual password

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$program = $_POST['program'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO admissions (fullname, email, program, message)
        VALUES ('$fullname', '$email', '$program', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Application submitted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>