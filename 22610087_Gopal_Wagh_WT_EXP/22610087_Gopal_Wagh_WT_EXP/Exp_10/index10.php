<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Management Form</title>
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
        .form-container {
            background-color: #34495e; /* Slightly lighter dark color */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            padding: 30px;
            width: 350px; /* Fixed width for the form */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ecf0f1; /* Light text color */
        }
        label {
            margin-top: 10px;
            display: block;
            font-weight: 700; /* Bold labels */
            color: #ecf0f1; /* Light text for labels */
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin: 5px 0 15px 0; /* Space above and below inputs */
            border: 1px solid #7f8c8d; /* Gray border */
            border-radius: 5px;
            transition: border-color 0.3s;
            background-color: #95a5a6; /* Light gray background for inputs */
            color: #2c3e50; /* Dark text for input */
        }
        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #1abc9c; /* Teal border color on focus */
            outline: none; /* Remove default outline */
        }
        input[type="submit"] {
            background-color: #1abc9c; /* Teal button color */
            color: white;
            border: none;
            padding: 12px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #16a085; /* Darker teal on hover */
        }
        @media (max-width: 450px) {
            .form-container {
                width: 90%; /* Full width on small screens */
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Session Management Form</h2>
        <form method="POST" action="set_session.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
