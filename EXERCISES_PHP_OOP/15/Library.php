<?php


class Books
{

    public $title;
}
class Library
{

    public $books = [];

    public function __construct(array $books = [])
    {
        $this->books = $books; // Assign the array of books, if any
    }

    public function addBook(Books $books)
    {
        $this->books[] = $books;
    }

    public function printBooks()
    {
        foreach ($this->books as $book) {
            echo $book->title . "\n";
        }
    }

    public function searchBook($title)
    {
        foreach ($this->books as $book) {
            if ($book->title == $title) {
                return $book;
            }
        }
        return null;
    }
}

$book1 = new Books();
$book1->title = 'Book 1';
$book2 = new Books();
$book2->title = 'Book 2';
$book3 = new Books();
$book3->title = 'Book 3';
$book4 = new Books();
$book4->title = 'Book 4';

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);
$library->addBook($book4);

$library->printBooks();

$searchResult = $library->searchBook('Book 2');
$searchResult2 = $library->searchBook('Popay');

if ($searchResult !== null) {
    echo " Found books :" . $searchResult->title;
} else {
    echo "Book not found";
}
if ($searchResult2 !== null) {
    echo " Found books :" . $searchResult->title;
} else {
    echo "Book not found";
}
