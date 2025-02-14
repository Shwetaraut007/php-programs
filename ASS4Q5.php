<?php
   class Fruit 
{
    private $name;
    private $color;
    private $price;

    // Constructor
    function __construct() {}

    // Member function to accept fruit details
    function accept($name, $color, $price)
   {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    // Member function to display fruit details
    function display()
     {
        echo "Fruit Details:\n";
        echo "Name: " . $this->name . "\n";
        echo "Color: " . $this->color . "\n";
        echo "Price: $" . $this->price . "\n";
     }
}

// Create an object of Fruit class
$fruit = new Fruit();

// Accept fruit details
$fruit->accept("Apple", "Red", 1.99);

// Display fruit details
$fruit->display();
 ?>
