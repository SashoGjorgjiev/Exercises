<?php

class Author
{

    public $name;
    public $books = [];
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function printBooks()
    {
        echo "Author: " . $this->name . "\n";
        echo "Books:\n";
        foreach ($this->books as $book) {
            $book->info() . '<br>';
        }
    }
    public function getName()
    {
        return $this->name;
    }
}
