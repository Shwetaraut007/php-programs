// Initialize index arrays
$array1 = array(1, 3, 5, 7);
$array2 = array(2, 4, 6, 8);

// Union of two arrays
$unionArray = array_unique(array_merge($array1, $array2));
echo "Union of Array 1 and Array 2:\n";
print_r($unionArray);

// Traverse array elements in random order
echo "\nArray elements in random order:\n";
shuffle($unionArray);
print_r($unionArray);

// Alternate way to traverse array elements in random order
echo "\nArray elements in random order (alternate method):\n";
$randomKeys = array_keys($unionArray);
shuffle($randomKeys);
foreach ($randomKeys as $key)
 {
    echo $unionArray[$key] . "\n";
}


