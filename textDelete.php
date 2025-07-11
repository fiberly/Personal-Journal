<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connection details
$servername = "localhost"; 
$username = "root"; // Your MySQL username
$password = "test"; // Your MySQL password
$dbname = "journal"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check a connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Check if ID is set
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Prevent SQL injection

    // Delete journal text
    $sql = "DELETE FROM journals WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: Journal.php"); // Redirect after successful deletion
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID provided.";
}

$conn->close();
?>