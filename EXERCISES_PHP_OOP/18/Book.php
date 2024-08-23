<?php

class Book
{
    public string $title;
    public string $author;
    public string $isbn;
    public bool $availability;

    public function __construct(string $title, string $author, string $isbn, bool $availability)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->availability = $availability;
    }
}

class Library
{
    public array $books = [];

    public function __construct(array $books)
    {

        $this->books = $books;
    }

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $book): void
    {
        $key = array_search($book, $this->books, true);
        if ($key !== false) {
            unset($this->books[$key]);
            $this->books = array_values($this->books);
        } else {
            echo "Book not found";
        }
    }

    public function lendBook(Book $book): void
    {
        if ($book->availability) {
            $book->availability = false;
            echo "Book lent successfully {$book->title} by {$book->author}";
        } else {
            echo "Book not found";
        }
    }

    public function searchBook(string $title, string $author): ?Book
    {
        foreach ($this->books as $book) {
            if ($book->title === $title && $book->author === $author) {
                return $book;
            }
        }
        echo "Book not found\n";
        return null;
    }
}
$book1 = new Book('The Great Gatsby', 'F. Scott Fitzgerald', '9780743273565', true);
$book2 = new Book('1984', 'George Orwell', '9780451524935', true);
$book3 = new Book('To Kill a Mockingbird', 'Harper Lee', '9780061120084', true);

$library = new Library([$book1, $book2]);

$library->addBook($book3);
$library->addBook($book1);
$library->addBook($book2);
// $library->removeBook($book2);

$library->lendBook($book1);
$library->lendBook($book2);
$library->lendBook($book3);
$foundBook = $library->searchBook('To Kill a Mockingbird', 'Harper Lee');
if ($foundBook) {
    echo " Book Found: " . $foundBook->title . " by " . $foundBook->author . "\n";
}
