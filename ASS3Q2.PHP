// Initialize associative array
$associativeArray = array(
    "name" => "John",
    "age" => 25,
    "city" => "New York",
    "country" => "USA"
);

// Display elements along with keys
echo "Elements with Keys:\n";
print_r($associativeArray);

// Display size of array
echo "\nArray Size: " . count($associativeArray) . "\n";

// Delete element from array by key
unset($associativeArray["age"]);
echo "\nAfter deleting 'age' key:\n";
print_r($associativeArray);

// Reverse order of each element's key-value pair
$reversedArray = array_reverse($associativeArray, true);
echo "\nReversed Array:\n";
print_r($reversedArray);

// Traverse elements in random order
$randomKeys = array_keys($associativeArray);
shuffle($randomKeys);
echo "\nRandom Order:\n";
foreach ($randomKeys as $key) {
    echo "$key => $associativeArray[$key]\n";
}