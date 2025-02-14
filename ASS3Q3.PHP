
// Declare a multidimensional array
$multidimensionalArray = array(
    array("id" => 1, "name" => "John", "age" => 25),
    array("id" => 2, "name" => "Jane", "age" => 30),
    array("id" => 3, "name" => "Bob", "age" => 35),
    array("id" => 4, "name" => "Alice", "age" => 20)
);

// Display the multidimensional array
echo "Multidimensional Array:\n";
print_r($multidimensionalArray);

// Search and display a specific element from the multidimensional array
$searchId = 2;
foreach ($multidimensionalArray as $row) {
    if ($row["id"] == $searchId) {
        echo "\nSpecific Element (ID: $searchId):\n";
        print_r($row);
        break;
    }
}

// Search and display all elements with a specific age
$searchAge = 30;
echo "\nElements with Age $searchAge:\n";
foreach ($multidimensionalArray as $row) {
    if ($row["age"] == $searchAge) {
        print_r($row);
    }
}


