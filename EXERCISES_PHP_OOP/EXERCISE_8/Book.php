<?php

class Book
{
    public static $totalBooks = 0;
    public $title;
    public $author;
    public $price;


    public function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        self::$totalBooks++;
    }
}

$book1 = new Book('The Hobbit', 'J.R.R. Tolkien', 19.99);
$book2 = new Book('The Lord of the Rings', 'J.R.R. Tolkien', 29.99);
$book3 = new Book('The Lord of the Rings', 'J.R.R. Tolkien', 29.99);

echo "Total books: " . Book::$totalBooks;
