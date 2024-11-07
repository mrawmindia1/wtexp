<!-- experiment 8 -->
<!-- program on php string operations   -->

<?php
// Function to demonstrate string concatenation
function concatenateStrings($str1, $str2) {
    return $str1 . " " . $str2;
}

// Function to find a substring
function findSubstring($str, $substring) {
    $position = strpos($str, $substring);
    return $position !== false ? "Substring found at position: $position" : "Substring not found.";
}

// Testing the functions
$str1 = "Hello";
$str2 = "World";

echo "Concatenation: " . concatenateStrings($str1, $str2) . "\n";
echo "Length of '$str1': " . strlen($str1). "\n";


echo "Uppercase: " . strtoupper($str1). "\n";
echo "Lowercase: " . strtolower($str1) . "\n";


echo "Substring (from position 1, length 3): '" . substr($str1, 1, 3) . "'\n";

$searchString = "lo";
echo findSubstring($str1, $searchString) . "\n";
?>
