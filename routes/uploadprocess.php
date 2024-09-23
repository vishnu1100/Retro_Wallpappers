<?php
// Handle the uploaded file
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['wallpaper'])) {
    $file = $_FILES['wallpaper'];
    $upload_dir = 'uploads/'; // Ensure this directory exists
    $upload_file = $upload_dir . basename($file['name']);

    // Validate file type (optional)
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowed_types)) {
        echo "Only JPG, PNG, and GIF files are allowed.";
        exit();
    }

    // Move the uploaded file
    if (move_uploaded_file($file['tmp_name'], $upload_file)) {
        echo "File uploaded successfully.";
    } else {
        echo "File upload failed.";
    }
}
?>
