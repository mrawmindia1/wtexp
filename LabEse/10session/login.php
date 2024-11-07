<?php
session_start(); // Start the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the user's name in session
    $_SESSION['username'] = htmlspecialchars(trim($_POST['username']));
        header("Location: login.php"); // Redirect to welcome page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            padding-top: 50px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="username">Enter your name:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>

</body>

</html>