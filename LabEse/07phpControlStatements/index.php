<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Statements Example</title>
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

    <h1>Voting Eligibility and Favorite Color</h1>

    <?php
    // Predefined values
    $age = 20; // Example age
    $color = 'blue'; // Example favorite color
    
    // Output div for displaying results
    echo "<div class='output'>";

    // Control statement to check voting eligibility
    if ($age >= 18) {
        echo "<p>You are eligible to vote.</p>";
    } else {
        echo "<p>You are not eligible to vote.</p>";
    }

    // Control statement to display favorite color
    switch ($color) {
        case 'red':
            echo "<p>Your favorite color is Red.</p>";
            break;
        case 'blue':
            echo "<p>Your favorite color is Blue.</p>";
            break;
        case 'green':
            echo "<p>Your favorite color is Green.</p>";
            break;
        case 'yellow':
            echo "<p>Your favorite color is Yellow.</p>";
            break;
        default:
            echo "<p>You did not select a color.</p>";
            break;
    }

    // Control statement using for loop to display numbers
    echo "<h2>Numbers from 1 to your age:</h2>";
    for ($i = 1; $i <= $age; $i++) {
        echo $i . " ";
    }

    // Control statement using while loop
    echo "<h2>Counting down from your age:</h2>";
    $countdown = $age;
    while ($countdown > 0) {
        echo $countdown . " ";
        $countdown--;
    }

    echo "</div>"; // Closing output div
    ?>

</body>

</html>