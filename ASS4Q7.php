<?php

class Book {
    public $book_id;
    public $book_name;
    public $publication;
    public $author;
    public $book_price;

    // Constructor
    function __construct($book_id, $book_name, $publication, $author, $book_price) {
        $this->book_id = $book_id;
        $this->book_name = $book_name;
        $this->publication = $publication;
        $this->author = $author;
        $this->book_price = $book_price;
    }

    // Member function to accept book details
    function accept_book() {
        echo "Enter Book ID: ";
        $this->book_id = trim(fgets(STDIN));
        echo "Enter Book Name: ";
        $this->book_name = trim(fgets(STDIN));
        echo "Enter Publication: ";
        $this->publication = trim(fgets(STDIN));
        echo "Enter Author: ";
        $this->author = trim(fgets(STDIN));
        echo "Enter Book Price: ";
        $this->book_price = trim(fgets(STDIN));
    }

    // Member function to display book details
    function display_book() {
        echo "\nBook Details:\n";
        echo "Book ID: " . $this->book_id . "\n";
        echo "Book Name: " . $this->book_name . "\n";
        echo "Publication: " . $this->publication . "\n";
        echo "Author: " . $this->author . "\n";
        echo "Book Price: $" . $this->book_price . "\n";
    }
}

// Create object
$book = new Book("", "", "", "", 0);

// Accept book details
echo "Enter Book Details:\n";
$book->accept_book();

// Display book details
$book->display_book();

?>


Or if you want to create multiple book objects and store them in an array:


<?php

class Book {
    public $book_id;
    public $book_name;
    public $publication;
    public $author;
    public $book_price;

    // Constructor
    function __construct($book_id, $book_name, $publication, $author, $book_price) {
        $this->book_id = $book_id;
        $this->book_name = $book_name;
        $this->publication = $publication;
        $this->author = $author;
        $this->book_price = $book_price;
    }

    // Member function to accept book details
    function accept_book() {
        echo "Enter Book ID: ";
        $this->book_id = trim(fgets(STDIN));
        echo "Enter Book Name: ";
        $this->book_name = trim(fgets(STDIN));
        echo "Enter Publication: ";
        $this->publication = trim(fgets(STDIN));
        echo "Enter Author: ";
        $this->author = trim(fgets(STDIN));
        echo "Enter Book Price: ";
        $this->book_price = trim(fgets(STDIN));
    }

    // Member function to display book details
    function display_book() {
        echo "\nBook Details:\n";
        echo "Book ID: " . $this->book_id . "\n";
        echo "Book Name: " . $this->book_name . "\n";
        echo "Publication: " . $this->publication . "\n";
        echo "Author: " . $this->author . "\n";
        echo "Book Price: $" . $this->book_price . "\n";
    }
}

// Create array to store book objects
$books = array();

// Get number of books
echo "Enter number of books: ";
$num_books = trim(fgets(STDIN));

// Create book objects and store in array
for ($i = 0; $i < $num_books; $i++) {
    echo "\nEnter Book Details for Book " . ($i + 1) . ":\n";
    $book = new Book("", "", "", "", 0);
    $book->accept_book();
    array_push($books, $book);
}

// Display book details
foreach ($books as $book) {
    $book->display_book();
}

?>
