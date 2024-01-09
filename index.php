<?php
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Toy.php";
require_once __DIR__ . "/models/Kennel.php";

$dog = new Category ('cane', 'dog.png');
// $dog->setName('cane');
// $dog->setIcon('dog.png');

// var_dump($dog->getName());
var_dump($dog);