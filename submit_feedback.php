<?php
// Establish a connection to the MySQL database
// (Replace "your_server_name", "your_username", "your_password", and "your_database_name" with your actual values)
$servername = "127.0.0.1";
$username = "dev2";
$password = "dev";
$dbname = "feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Retrieve the submitted form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mailid = $_POST['mailid'];
$country = $_POST['country'];
$feedback = $_POST['feedback'];

// Execute a SQL query to insert the form data into the database
$sql = "INSERT INTO feedback (firstname, lastname, mailid, country, feedback) VALUES ('$firstname', '$lastname', '$mailid', '$country', '$feedback')";

if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection to the MySQL database
$conn->close();
?>