<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the user's ID from the session
session_start();
$user_id = $_SESSION['user_id'];

// Get the user's name from the database
$sql = "SELECT name FROM users WHERE id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $row['name'];

// Get the current date and time
$date = date('Y-m-d');
$time = date('H:i:s');

// Check if the user has already clocked in today
$sql = "SELECT * FROM attendance WHERE user_id = $user_id AND date = '$date'";
$result = $conn->query($sql);

// If the user has already clocked in, show a message
if ($result->num_rows > 0) {
  echo "You have already clocked in today.";
} else {
  // Clock the user in
  $sql = "INSERT INTO attendance (user_id, date, time_in) VALUES ($user_id, '$date', '$time')";

  if ($conn->query($sql) === TRUE) {
    echo "You have successfully clocked in.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>