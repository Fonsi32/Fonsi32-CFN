<?php
session_start();

// Connect to the database (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfn";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM cfn;";
$result = $conn->query($sql);

// Store the retrieved data in a session variable
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['id'];
    $_SESSION['Name'] = $row['Name'];
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['Comment'] = $row['Comment'];
} else {
    echo "Hello, " . $_SESSION['comment'] = $row['Comment'];
}

// Close the database connection

$conn->close();
?>
