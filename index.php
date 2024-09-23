<?php
// Define the folder containing images
$folder = "routes/uploads"; // Change to your folder name

// Get all image files from the folder
$images = glob($folder . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);

$galleryImages = '';
if (count($images) > 0) {
    foreach ($images as $image) {
        // Add each image to the gallery with a default width
        $galleryImages .= '<div class="col-lg-3 col-md-4">
                              <div class="gallery-item">
                                  <a href="' . $image . '" download>
                                      <img src="' . $image . '" class="img-fluid" style="width: 500px;" alt="Wallpaper"> <!-- Set width here -->
                                  </a>
                              </div>
                           </div>';
    }
} else {
    $galleryImages = '<p>No images found in the folder.</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Aesthetic Wallpapers</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">    
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center me-auto me-xl-0">
        <i class="bi bi-camera"></i>
        <h1 class="sitename">RETRO</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="https://github.com/vishnu1100/Retro_Wallpappers" target="_blank">Contribute</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2><span class="underlight">Collect moments, not things. But if you collect things, make them beautiful."</span></h2>
            <p>:- Strange Pussy</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center" id="galleryContainer">
          <?php echo $galleryImages; ?>
        </div>
      </div>
    </section>
  </main>

  <script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-storage.js"></script>
</body>
</html>
