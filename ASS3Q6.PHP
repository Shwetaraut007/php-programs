


// Initialize associative arrays
$array1 = array("a" => 5, "b" => 2, "c" => 8);
$array2 = array("d" => 3, "e" => 6, "f" => 4);

function displayMenu() {
    echo "\nAssociative Array Operations\n";
    echo "---------------------------\n";
    echo "1. Sort Array 1 by values (ascending)\n";
    echo "2. Sort Array 1 by values (descending)\n";
    echo "3. Sort Array 1 by values (without changing keys)\n";
    echo "4. Find intersection of Array 1 and Array 2\n";
    echo "5. Find union of Array 1 and Array 2\n";
    echo "6. Display Array 1\n";
    echo "7. Display Array 2\n";
    echo "8. Exit\n";
    echo "Enter your choice: ";
}

while (true) {
    displayMenu();
    $choice = trim(fgets(STDIN));
    switch ($choice) {
        case 1:
            asort($array1);
            echo "Array 1 sorted by values (ascending):\n";
            print_r($array1);
            break;
        case 2:
            arsort($array1);
            echo "Array 1 sorted by values (descending):\n";
            print_r($array1);
            break;
        case 3:
            uasort($array1, function($a, $b) {
                return $a <=> $b;
            });
            echo "Array 1 sorted by values (without changing keys):\n";
            print_r($array1);
            break;
        case 4:
            $intersection = array_intersect($array1, $array2);
            echo "Intersection of Array 1 and Array 2:\n";
            print_r($intersection);
            break;
        case 5:
            $union = array_merge($array1, $array2);
            echo "Union of Array 1 and Array 2:\n";
            print_r($union);
            break;
        case 6:
            echo "Array 1:\n";
            print_r($array1);
            break;
        case 7:
            echo "Array 2:\n";
            print_r($array2);
            break;
        case 8:
            exit();
        default:
            echo "Invalid choice! Please try again.\n";
    }
}
