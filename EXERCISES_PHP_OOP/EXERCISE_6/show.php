<?php

require_once('Author.php');
require_once('Book.php');


$author = new Author('John Doe');
$book1 = new Book("1984", 1949);
$book2 = new Book("Animal Farm", 1945);
$author->addBook($book1);
$author->addBook($book2);
$author->printBooks();


$author2 = new Author('Martin Jhones');
$book3 = new Book('The Hobbit', 1937);

$book4 = new Book('The Fellowship of the Ring', 1954);
$author2->addBook($book3);
$author2->addBook($book4);
$author2->printBooks();
