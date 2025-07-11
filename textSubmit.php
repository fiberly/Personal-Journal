<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error_message = "";

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
    $image_path = "";

// image upload logic
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) { 
        // determine where to store the image
        $target_dir = "photoUploads/";
      //  $target_file = $target_dir . basename($_FILES['image']['name']);

        $original_filename = basename($_FILES["image"]["name"]);
        $file_extension = strtolower(pathinfo($original_filename, PATHINFO_EXTENSION));

            // sanitize the filename to avoid special characters
        $sanitized_filename = preg_replace("/[^a-zA-Z0-9-_\.]/", "-", $original_filename);

        // create a unique filename to avoid overwriting files
        $target_file = $target_dir . uniqid() . '-' . $sanitized_filename;
        

        // check if the image is a valid image file
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            //halt execution if the check is false
            //die(json_encode(['error' => "File is not an image and needs to be an image."]));
            $error_message = "File is not an image and needs to be an image.";
            echo "File needs to be an image";
        }

        // Validate file size 10mb limit
        if ($_FILES["image"]["size"] > 10000000) { 
             //die(json_encode(['error' => "file size is too large, the file must be 10 megabytese or under."]));
            $error_message = "File size is too large, the file must be 10 megabytese or under.";
            echo "File size is too large, the file must be 10 megabytese or under.";

        }

        // proceed with upload if the checks pass
        
            if (empty($error_message) && move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image_path = $target_file; // save the path for immediate use
            } else {
                //halt execution if there is an error
                 //die(json_encode(['error' => "Apologies, there was an error when trying to upload the file."]));
                $error_message = "Apologies, there was an error when trying to upload the file.";
                echo "<br>";
                echo "Apologies, there was an error when trying to upload the file.";
            }
            } else {

                $error_message = "Error in the file upload, Please try again, with the upload.";
                echo "Error in the file upload, Please try again, with the upload.";
            } 
    
        

    

    // Insert journal entry into the database
if (empty($error_message)) {
    $sqlStatement = $conn->prepare("INSERT INTO journals (title, content, image_path) VALUES (?, ?, ?)");
    $sqlStatement->bind_param("sss", $title, $text, $image_path);
    
   if ($sqlStatement->execute()) {
    echo "New journal entry created successfully";
    //redirect back to the Journal
    header('Location: Journal.php'); // Redirect after successful insertion
    exit();
   } else {
        $error_message = "Error inserting data: " . $sqlStatement->error;
        
   }
  }  
}   




$conn->close();
?>