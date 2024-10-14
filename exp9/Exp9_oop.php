<?php
// Declaring a class
class Books
{
    /* Member variables */
    var $price;
    var $title;

    /* Member functions */
    function setPrice($par)
    {
        $this->price = $par;
    }

    function getPrice()
    {
        echo $this->price . "<br/>";
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . "<br/>";
    }
}

// Creating Objects in PHP
$physics = new Books;

// Calling Mesmber Functions
$physics->setTitle("Physics for High School<br>");
$physics->setPrice(10);

// Calling member functions to get the values
$physics->getTitle();
$physics->getPrice();
?>
