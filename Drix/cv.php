<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["uploaded_cv"])) {
    // Check for upload errors
    if ($_FILES["uploaded_cv"]["error"] !== UPLOAD_ERR_OK) {
        die("Upload failed with error code " . $_FILES["uploaded_cv"]["error"]);
    }

    // Database connection
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

    // Prepare data for insertion
    $fileName = $_FILES["uploaded_cv"]["name"];
    $fileTmpName = $_FILES["uploaded_cv"]["tmp_name"];
    $fileType = $_FILES["uploaded_cv"]["type"];

    // Read file data
    $fileContent = file_get_contents($fileTmpName);

    // Delete all previously uploaded files
    $sql_delete = "DELETE FROM cv_files";
    $conn->query($sql_delete);

    // Insert file data into database
    $stmt_insert = $conn->prepare("INSERT INTO cv_files (file_name, file_type, file_content) VALUES (?, ?, ?)");
    $stmt_insert->bind_param("sss", $fileName, $fileType, $fileContent);
    $stmt_insert->execute();

    // Check if insertion was successful
    if ($stmt_insert->affected_rows > 0) {
        echo "<script>alert('Upload successful');</script>";
    } else {
        echo "<script>alert('Upload failed');</script>";
    }

    $stmt_insert->close();

    // Close connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <title>CV Upload</title>
    <style>
        body {
            font-family: "Protest Riot", sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-image: url('Asset/asd.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
   
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 150px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background: url('giphy.gif') center center/cover no-repeat;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.9); /* Add shadow effect */
        }
        .btn {
            width: auto; /* Change width to auto */
            padding: 15px 30px; /* Adjust padding for better size */
            font-size: 32px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease; /* Add transition for transform and box-shadow */
        }
        .btn:hover {
            background-color: #0056b3;
            transform: scale(1.1); /* Enlarge the button */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Add box shadow */
        }
        label.btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        .download-link {
            font-size: 28px;
            text-decoration: none;
        }
        .download-link:hover {
            background-color: #0056b3; /* Same hover color as the upload button */
        }
        .note {
            font-size: 24px;
            color: #777;
            margin-top: 10px;
        }
        #fileInput {
            display: none;
        }
        #fileDetails {
            margin-top: 10px;
            font-size: 24px;
        }

        @media only screen and (max-width: 600px) {
            .container {
                padding: 30px;
            }
            .btn {
                font-size: 24px;
                padding: 20px;
            }
            .download-link {
                font-size: 22px;
            }
            .note {
                font-size: 20px;
            }
        }
        @keyframes moveUpDown {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        h1 {
            animation: moveUpDown 2s infinite;
        }
    </style>
</head>
<body>
<header>
    <?php include 'header.html'; ?> 
</header>

<div class="container">
    <h1>Download CV</h1>
   <form method="post" enctype="multipart/form-data" id="uploadForm">
      <!--  <label for="fileInput" class="btn">Choose File</label>-->
        <input type="file" id="fileInput" name="uploaded_cv" accept=".doc, .docx, .pdf">
        <button type="submit" class="btn" id="submitButton" style="display: none;">Submit</button>
    </form>
    <div id="fileDetails"></div>
    <a href="download-cv.php" class="btn download-link">Download CV</a>
</div>

<script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const fileInput = event.target;
        const fileDetails = document.getElementById('fileDetails');
        const submitButton = document.getElementById('submitButton');

        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            const fileSize = (fileInput.files[0].size / 1024).toFixed(2); // in KB
            const fileType = fileInput.files[0].type;

            fileDetails.innerHTML = `<p>File Name: ${fileName}</p><p>File Size: ${fileSize} KB</p><p>File Type: ${fileType}</p>`;
            submitButton.style.display = 'inline-block';
        } else {
            fileDetails.innerHTML = '';
            submitButton.style.display = 'none';
        }
    });
</script>

</body>
</html>
