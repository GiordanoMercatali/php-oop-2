<?php

require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/Food.php";
require_once __DIR__ . "/../models/Toy.php";

$dog = new Category ('dog', 'dog.png');

$cat = new Category ('cat', 'cat.png');

 /*$newProduct = new Product();
 $newProduct->setName('Anti-fleas Spray');
 $newProduct->setImage('spray.png');
 $newProduct->setPrice(20);
 $newProduct->setCategory($dog);
 $newProduct->addAmount(1);*/

$schesir = new Food ('Schesir', $cat, 4, 10, '20-12-2024');
$bone = new Toy ('Toy bone', $dog, 2, 1, 'rubber', 'squeaking toy');
