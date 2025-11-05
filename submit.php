<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback (name, email, course, feedback)
        VALUES ('$name', '$email', '$course', '$feedback')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Thank you for your feedback!</h2>";
  echo "<a href='index.html'>Go Back</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
