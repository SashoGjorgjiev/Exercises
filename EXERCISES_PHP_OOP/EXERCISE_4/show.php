<?php

require_once('Animal.php');
require_once('Dog.php');
require_once('Cat.php');


$animal = new Animal();
$animal->makeSound();


$dog = new Dog();
$dog->makeSound();


$cat = new Cat();
$cat->makeSound();
