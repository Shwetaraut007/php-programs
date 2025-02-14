
// Define the strings
$string1 = "Hello, World!";
$string2 = "hello";
$string3 = "HELLO";

// Compare string 2 with string 3
if ($string2 === $string3) {
    echo "String 2 and String 3 are equal.\n";
} else {
    echo "String 2 and String 3 are not equal.\n";
}

// Convert all strings to uppercase
$string1Upper = strtoupper($string1);
$string2Upper = strtoupper($string2);
$string3Upper = strtoupper($string3);

echo "String 1 (uppercase): $string1Upper\n";
echo "String 2 (uppercase): $string2Upper\n";
echo "String 3 (uppercase): $string3Upper\n";

// Convert all strings to lowercase
$string1Lower = strtolower($string1);
$string2Lower = strtolower($string2);
$string3Lower = strtolower($string3);

echo "String 1 (lowercase): $string1Lower\n";
echo "String 2 (lowercase): $string2Lower\n";
echo "String 3 (lowercase): $string3Lower\n";