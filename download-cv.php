<?php
 $servername = "localhost";
    $username = "id21907878_cv";
    $password = "Emerdrix!23";
    $dbname = "id21907878_emerdrix";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch CV file from the database
$stmt = $conn->prepare("SELECT file_name, file_type, file_content FROM cv_files ORDER BY id DESC LIMIT 1");
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Bind result variables
    $stmt->bind_result($fileName, $fileType, $fileContent);
    $stmt->fetch();

    // Set headers for file download
    header("Content-Type: $fileType");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Send file content to the browser
    echo $fileContent;
} else {
    echo "CV file not found.";
}

$stmt->close();
$conn->close();
?>
