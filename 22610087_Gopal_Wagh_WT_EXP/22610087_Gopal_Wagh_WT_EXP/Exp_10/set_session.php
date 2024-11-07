<?php
// Start the session
session_start();

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set session variables
    $_SESSION["username"] = htmlspecialchars(trim($_POST['username']));
    $_SESSION["email"] = htmlspecialchars(trim($_POST['email']));
    
    // Redirect to the page to display session variables
    header("Location: get_session.php");
    exit();
} else {
    echo "Invalid request.";
}
?>
