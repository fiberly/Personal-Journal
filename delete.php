<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

// connection details
$servername = "localhost";
$username = "root";
$password = "test";
$dbname = "journal";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

//check if ID is set
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // converts integer to prevent sql injection

    // texts is backwards should be tasks, still works though
    // prepare delete statement
    $sql = "DELETE FROM texts WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        //redirect  to main page
        header("Location: Journal.php");
        exit();
    } else { 
        echo "Error deleting record: " . $conn->error;
    }
} else { 
    echo "No ID provided";

}

// close database connection
$conn->close();
?>
