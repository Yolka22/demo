<?php

$host = "localhost";
$dbname = "calendar";
$username = "root";
$password = "root";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming your table is named 'your_table'
$query = "UPDATE tasks SET task = 'Wycieczka: Karkonosze' WHERE data = '2020-11-03'";

// Execute the query
$conn->query($query);
