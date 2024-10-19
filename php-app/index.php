<?php
$servername = "mysql-container";  // The container name of the MySQL service
$username = "sampleuser";
$password = "samplepass";
$database = "sampledb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample query
$sql = "SELECT 'Hello, Docker!'";
$result = $conn->query($sql);

// Fetch result
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["'Hello, Docker!'"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>
