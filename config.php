<?php
$host = '127.0.0.1'; // Use 'mysql' if connecting to a containerized MySQL
$user = 'root'; // Default MySQL user
$password = ''; // Default MySQL password (or set your password)
$dbname = 'contact'; // Replace with your database name

$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";
?>
