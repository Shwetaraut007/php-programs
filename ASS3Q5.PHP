


// Define the strings
$string1 = "Hello, World! This is a test string.";
$string2 = "test";

// Convert each word of string 1 to lowercase and uppercase
$lowerCaseString = implode(' ', array_map('strtolower', explode(' ', $string1)));
$upperCaseString = implode(' ', array_map('strtoupper', explode(' ', $string1)));

echo "String 1 (lowercase): $lowerCaseString\n";
echo "String 1 (uppercase): $upperCaseString\n";

// Find the first occurrence of string 2 in string 1
$firstOccurrence = strpos($string1, $string2);
echo "First occurrence of '$string2' at index: $firstOccurrence\n";

// Find the last occurrence of string 2 in string 1
$lastOccurrence = strrpos($string1, $string2);
echo "Last occurrence of '$string2' at index: $lastOccurrence\n";

// Check if string 2 exists in string 1
if (strpos($string1, $string2) !== false) {
    echo "'$string2' exists in '$string1'\n";
} else {
    echo "'$string2' does not exist in '$string1'\n";
}
