<?php

// Database credentials
$host = 'localhost'; // Or your server's IP address
$dbname = 'memoweb'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// // Retrieve form data
// $title = $_POST['title'];
// $email = $_POST['note'];

// // Insert data into the database
// $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
// $stmt = $conn->prepare("insert into memo(title, note) values(?, ?)");
// $stmt->bind_param("ss", $name, $email);

// if ($stmt->execute()) {
//     echo "Registration successful!";
// } else {
//     echo "Error: " . $conn->error;
// }

// Close the connection
// $stmt->close();
// $conn->close();

?>