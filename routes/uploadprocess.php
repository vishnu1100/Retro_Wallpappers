<?php
// Handle the uploaded files
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['wallpaper'])) {
    $files = $_FILES['wallpaper'];
    $upload_dir = 'uploads/'; // Ensure this directory exists

    // Loop through each uploaded file
    for ($i = 0; $i < count($files['name']); $i++) {
        $file = [
            'name' => $files['name'][$i],
            'type' => $files['type'][$i],
            'tmp_name' => $files['tmp_name'][$i],
            'error' => $files['error'][$i],
            'size' => $files['size'][$i],
        ];

        $upload_file = $upload_dir . basename($file['name']);

        // Validate file type (optional)
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($file['type'], $allowed_types)) {
            echo "Only JPG, PNG, and GIF files are allowed for " . $file['name'] . ".<br>";
            continue; // Skip this file
        }

        // Move the uploaded file
        if (move_uploaded_file($file['tmp_name'], $upload_file)) {
            echo "File uploaded successfully: " . $file['name'] . "<br>";
        } else {
            echo "File upload failed for " . $file['name'] . ".<br>";
        }
    }
}
?>
