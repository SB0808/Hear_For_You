<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hfy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a table
$sql = "CREATE TABLE IF NOT EXISTS contact_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT,
    contact_number VARCHAR(15),
    email VARCHAR(255) NOT NULL,
    message TEXT
)";

// Execute query
// if ($conn->query($sql) === TRUE) {
//     echo "Table created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// Close connection
// $conn->close();
?>