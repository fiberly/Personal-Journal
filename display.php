<?php

//connection details
$servername = "localhost";
$username = "root";
$password = "test";
$dbname = "journal";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

//fetch text from database
$sql = "SELECT * FROM texts ORDER BY created_at DESC";
$result = $conn->query($sql);

echo "<ul>";

if ($result) {
if ($result->num_rows > 0) {
//output data of each row
while($row = $result->fetch_assoc()) {
    echo "<p>" . htmlspecialchars($row["content"]) . " <small>(" . $row["created_at"] . ")</small></p>";

    echo "<a href='delete.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this task?');\">Delete</a></li>";
    }
} else { 
    echo "<br>";
    }
} else {
    echo "Error fetching results: " . $conn->error;
}

$conn->close();
?>