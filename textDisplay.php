<?php

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

// Display entr(y)(ies)


echo "<ul style='list-style-type: none'>";

$sql = "SELECT * FROM journals ORDER BY created_at DESC";  // Fetch from tasks table
$result = $conn->query($sql);
if ($result) {
    if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) {
        
        echo "<div class='box'>";
        
        echo "<h3>" . htmlspecialchars($row["title"]) . "</h3>";
        $title = $conn->real_escape_string(trim($_POST['titleInput'])); // Get the title
        echo "<small class='entry-date'><em>" . htmlspecialchars($row["created_at"]) . "</em></small>"; // Date below the content
        echo "<p>" . htmlspecialchars($row["content"]) . "</p>"; // Journal content
        
        // check if there is an image path and if the file exists
        if (!empty($row["image_path"]) && file_exists($row["image_path"])) {
            echo "<img src='" . htmlspecialchars($row["image_path"]) . "' alt='Image' width='300'><br>";

        } else { 
            echo "<p>No image found for this journal entry.</p>";
        }


        echo " <a href='textDelete.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this journal entry?');\">Delete</a></li><br><br><br><br>";
        echo "<br>";
        echo "</div>";
    }
} else {
    echo "";
}
}
echo "</ul>";

$conn->close();
?>