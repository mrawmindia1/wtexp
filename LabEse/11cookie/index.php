<?php
// Set cookie expiration time (1 day from now)
$cookie_expiration = time() + (86400 * 1); // 86400 seconds = 1 day

// Check if a form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the theme selection from the form
    $theme = $_POST['theme'];
    // Set the cookie for the selected theme
    setcookie("user_theme", $theme, $cookie_expiration);
    // Refresh the page to apply the selected theme
    header("Location: index.php");
    exit();
}

// Retrieve the theme from the cookie if it exists
$current_theme = isset($_COOKIE["user_theme"]) ? $_COOKIE["user_theme"] : "light"; // Default theme is light

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Theme Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:
                <?php echo $current_theme == "dark" ? "#333" : "#f4f4f4"; ?>
            ;
            color:
                <?php echo $current_theme == "dark" ? "#fff" : "#000"; ?>
            ;
        }

        .container {
            max-width: 300px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            border: 1px solid #ccc;
            background-color:
                <?php echo $current_theme == "dark" ? "#444" : "#fff"; ?>
            ;
        }

        button {
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Select Theme</h2>
        <form method="post" action="">
            <button type="submit" name="theme" value="light">Light Theme</button>
            <button type="submit" name="theme" value="dark">Dark Theme</button>
        </form>
        <p>Current Theme: <strong><?php echo ucfirst($current_theme); ?></strong></p>
    </div>

</body>

</html>