<?php

class Book
{
    public $title;
    public $yearPublished;

    public function __construct($title, $yearPublished)
    {
        $this->title = $title;
        $this->yearPublished = $yearPublished;
    }
    public function info()
    {
        echo $this->title . ' ' . $this->yearPublished;
    }

    public function getTitle()
    {
        return $this->title;
    }

    // Getter for the year published
    public function getYearPublished()
    {
        return $this->yearPublished;
    }
}
