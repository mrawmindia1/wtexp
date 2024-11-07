<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Display a message
echo "You have logged out. <a href='index10.php'>Start a new session</a>.";
?>
