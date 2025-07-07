<?php

// Connection details
$servername = "localhost"; 
$username = "root"; // Your MySQL username
$password = "test"; // Your MySQL password
$dbname = "journal"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['journalEntry'])) {
    $title = $conn->real_escape_string(trim($_POST['titleInput'])); // Get the title
    echo "<br>";
    $text = $conn->real_escape_string(trim($_POST['journalEntry']));
    
    // Insert journal entry into the database
    $sql = "INSERT INTO journals (title, content) VALUES ('$title', '$text')";
    if ($conn->query($sql) === TRUE) {
        echo "new journal entry created";
        //redirect back to the Journal
        header("Location: Journal.php"); // Redirect after successful insertion
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>