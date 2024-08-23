<?php

require_once('Author.php');
require_once('Book.php');


$author = new Author('John Doe');
$book = new Book('The Great Gatsby', $author);
echo $book->info();

$book2 = new Book('The Catcher in the Rye', $author);
echo $book2->info();

$book3 = new Book('Alice\'s Adventures in Wonderland', $author);

echo $book3->info();
