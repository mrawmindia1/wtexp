<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Operations Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .output {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

    <h1>PHP String Operations</h1>

    <?php
    // Sample string
    $originalString = "Hello, World!";

    // String Concatenation
    $additionalString = " Welcome to PHP programming.";
    $concatenatedString = $originalString . $additionalString;

    // String Length
    $length = strlen($concatenatedString);

    // Find a Substring
    $substring = "World";
    $position = strpos($concatenatedString, $substring);

    // String Replacement
    $replacedString = str_replace("World", "PHP", $concatenatedString);

    // Changing Case
    $uppercaseString = strtoupper($originalString);
    $lowercaseString = strtolower($originalString);

    // Output results
    echo "<div class='output'>";
    echo "<p><strong>Original String:</strong> $originalString</p>";
    echo "<p><strong>Concatenated String:</strong> $concatenatedString</p>";
    echo "<p><strong>Length of Concatenated String:</strong> $length characters</p>";

    if ($position !== false) {
        echo "<p><strong>Position of '$substring':</strong> $position</p>";
    } else {
        echo "<p><strong>Substring '$substring' not found.</strong></p>";
    }

    echo "<p><strong>Replaced String:</strong> $replacedString</p>";
    echo "<p><strong>Uppercase String:</strong> $uppercaseString</p>";
    echo "<p><strong>Lowercase String:</strong> $lowercaseString</p>";
    echo "</div>";
    ?>

</body>

</html>