<?php

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

//handle form submission
if ($_SERVER["REQUEST_METHOD"] ==  "POST") {
    $text = trim($conn->real_escape_string($_POST['taskInput']));

    

// insert submitted data into the database journal
$sql = "INSERT INTO texts (content) VALUES ('$text')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created";
        //redirect back to the journal
        header("Location: Journal.php");
        exit();
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$conn->close();




?>