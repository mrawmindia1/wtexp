<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Variables</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            margin: 0;
            background-color: #2c3e50; /* Dark background color */
            color: white; /* White text for contrast */
        }
        .container {
            background-color: #34495e; /* Slightly lighter dark color */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            padding: 30px;
            width: 400px; /* Fixed width for the container */
            text-align: center; /* Center the text */
        }
        h2 {
            margin-bottom: 20px;
            color: #ecf0f1; /* Light text color */
        }
        p {
            margin: 15px 0; /* Space above and below paragraphs */
            color: #ecf0f1; /* Light text color */
        }
        a {
            display: inline-block; /* Inline block for better styling */
            margin-top: 20px; /* Space above the link */
            padding: 10px 15px;
            background-color: #1abc9c; /* Teal background for the link */
            color: white;
            text-decoration: none; /* Remove underline */
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #16a085; /* Darker teal on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Session Variables</h2>
        <?php
        // Check if session variables are set
        if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
            // Welcome message
            echo "<p>Welcome, " . htmlspecialchars($_SESSION["username"]) . "!</p>";
            echo "<p>Email: " . htmlspecialchars($_SESSION["email"]) . "</p>";
            
            // Logout option
            echo '<a href="end_session.php">Logout</a>';
        } else {
            echo "<p>No session variables are set.</p>";
            echo '<a href="form.php">Go to the form</a>';
        }
        ?>
    </div>
</body>
</html>
