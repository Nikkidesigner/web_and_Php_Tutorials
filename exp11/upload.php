<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1; // Initialize upload status
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if the uploads directory exists, create it if not
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Check if file is a real file
if (isset($_POST["submit"])) {
    if (file_exists($_FILES["fileToUpload"]["tmp_name"])) {
        echo "File is a valid upload.<br>";
    } else {
        echo "File is not a valid upload.<br>";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}

// Check file size (limit to 5MB)
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}

// Allow certain file formats (you can modify the allowed formats)
$allowedFormats = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'txt'];

if (!in_array($fileType, $allowedFormats)) {
    echo "Sorry, only JPG, JPEG, PNG, GIF, PDF, DOC, DOCX, and TXT files are allowed.<br>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br>";
} else {
    // Attempt to upload the file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}
?>
