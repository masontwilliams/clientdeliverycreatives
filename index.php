<?php
session_start(); // Start the session

// Hardcoded password (update later)
$valid_password = 'password'; // Use a secure password in production

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    // Validate the password
    if ($password === $valid_password) {
        $_SESSION['authorized'] = true; // Set session variable to mark the user as authorized
        header("Location: gallery.php"); // Redirect to the gallery page
        exit();
    } else {
        $error = "Invalid password!"; // Show error if password is incorrect
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Virtual Art Gallery</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="login-container">
        <h1>Login to View Gallery</h1>

        <!-- Display error message if login fails -->
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <!-- Login form -->
        <form method="POST" action="">
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>






