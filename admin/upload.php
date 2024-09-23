
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Wallpaper</title>
    <link href="../assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="../assets/admin/styles.css">
</head>
<body style="margin-top: 300px;">

<form action="../routes/uploadprocess.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="folder">
            <div class="front-side">
                <div class="tip"></div>
                <div class="cover"></div>
            </div>
            <div class="back-side cover"></div>
        </div>
        <label class="custom-file-upload">
        <input class="title" type="file" name="wallpaper[]" required multiple /> <!-- Updated to accept multiple files -->

            Choose wallpapers to upload
        </label>
    </div>
    <button type="submit">Upload</button> <!-- Submit button -->
</form>

</body>
</html>
