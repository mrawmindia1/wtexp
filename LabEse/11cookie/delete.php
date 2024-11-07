<?php
// Expire the cookie by setting its expiration time to a past time
setcookie("user_theme", "", time() - 3600); // Setting the expiration time in the past deletes the cookie
header("Location: index.php"); // Redirect back to theme selection page
exit();
?>