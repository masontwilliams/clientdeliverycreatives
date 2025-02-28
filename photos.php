<?php
session_start(); // Start the session

// Check if the user is authorized
if (!isset($_SESSION['authorized']) || $_SESSION['authorized'] !== true) {
    header("Location: index.php"); // Redirect to the login page if not authorized
    exit();
}

// Load the JSON file with artwork data
$artworks = json_decode(file_get_contents('galleryj.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Download Images - Virtual Art Gallery</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to the CSS file -->
</head>
<body>
    <h1>All Photos</h1>

    <!-- Gallery Grid for Images -->
    <div class="gallery-container">
        <!-- Loop through the artworks and display them -->
        <?php foreach ($artworks as $artwork): ?>
            <div class="gallery-item">
                <img src="<?php echo htmlspecialchars($artwork["image"]); ?>" alt="Art" class="gallery-image">
                <p><strong>Artist:</strong> <?php echo htmlspecialchars($artwork["artist"]); ?></p>
                <p><strong>Description:</strong> <?php echo htmlspecialchars($artwork["description"]); ?></p>
                <a href="<?php echo htmlspecialchars($artwork["image"]); ?>" download class="download-link">Download</a> <!-- Link to download the image -->
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>Created and managed by Mason Williams</p>
    </footer>
</body>
</html>

