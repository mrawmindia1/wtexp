<!-- Experiment 9
Program on PHP form creation and data handling. -->

<?php
// Initialize variables for feedback messages
$submitted = false;
$name = "";
$email = "";
$errorMessage = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Invalid email format";
    } else {
        $submitted = true; // Mark the form as submitted
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            margin: 0;
            background-color: #f9f9f9;
        }
        .form-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color: white;
            width: 300px; /* Fixed width for the form */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            margin-top: 10px;
            display: block;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        .button-container {
            display: flex; /* Use flexbox for button layout */
            justify-content: space-between; /* Space between buttons */
            margin-top: 10px; /* Space above buttons */
        }
        input[type="submit"], input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            flex: 1; /* Make buttons grow equally */
            margin: 0 2px; /* Space between buttons */
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Contact Form</h2>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required value="<?php echo $name; ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="<?php echo $email; ?>">

            <div class="button-container">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset" onclick="resetForm()">
            </div>
        </form>

        <?php if ($submitted): ?>
            <h3 class="success">Submitted Data:</h3>
            <p>Name: <?php echo $name; ?></p>
            <p>Email: <?php echo $email; ?></p>
        <?php elseif ($errorMessage): ?>
            <p class="error"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
    </div>

    <script>
        function resetForm() {
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
        }
    </script>
</body>
</html>
