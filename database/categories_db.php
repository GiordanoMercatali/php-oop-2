<?php

require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/Food.php";
require_once __DIR__ . "/../models/Toy.php";
require_once __DIR__ . "/../models/Kennel.php";

$dog = new Category ('dog', 'fa-solid fa-dog');

$cat = new Category ('cat', 'fa-solid fa-cat');

/*
    $newProduct = new Product();
    $newProduct->setName('Anti-fleas Spray');
    $newProduct->setImage('spray.png');
    $newProduct->setPrice(20);
    $newProduct->setCategory($dog);
    $newProduct->addAmount(1);
*/
$item_list = [
    $schesir = new Food ('Schesir', $cat, 4, 10, '2024-01-09', 'tuna'),
    $bone = new Toy ('Toy bone', $dog, 2, 1, 'rubber', 'squeaking toy'),
    $wood_kennel = new Kennel ('Wood kennel', $dog, 100, 1, 'big'),
];

$mouse = new Toy ('Toy mouse', $cat, 2, 1, 'polyester', 'stuffed animal');

try {
    $result = $mouse->removeAmount(2);
    echo "Thanks for your purchase!";
} catch (Exception $e) {
    echo "Error! Not enough pieces of this article.";
}

/*
    $bone = new Toy();
    $bone->setName('Toy bone');
    $bone->setCategory($dog);
    $bone->setPrice(2);
    $bone->setAmount(1);
    $bone->setMaterial('rubber');
    $bone->setType('squeaking toy');
*/
