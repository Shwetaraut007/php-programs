// Define the strings
$string1 = "Hello, World! This is a test string.";
$string2 = "test";
$string3 = "example";

// Replace string 2 with string 3 in string 1
$replacedString = str_replace($string2, $string3, $string1);
echo "Replaced String:\n";
echo $replacedString . "\n";

// Reverse and display the replaced string
$reversedString = strrev($replacedString);
echo "Reversed String:\n";
echo $reversedString . "\n";


