<?php
// Call by Value
function swap_by_value($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Inside swap_by_value function: a = $a, b = $b\n";
}

// Call by Reference
function swap_by_reference(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Inside swap_by_reference function: a = $a, b = $b\n";
}

// Test Call by Value
$a = 5;
$b = 10;
echo "Before swap_by_value: a = $a, b = $b\n";
swap_by_value($a, $b);
echo "After swap_by_value: a = $a, b = $b\n";

// Test Call by Reference
$a = 5;
$b = 10;
echo "\nBefore swap_by_reference: a = $a, b = $b\n";
swap_by_reference($a, $b);
echo "After swap_by_reference: a = $a, b = $b\n";
?>