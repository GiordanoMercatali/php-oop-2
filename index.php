<?php
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Toy.php";
require_once __DIR__ . "/models/Kennel.php";

$dog = new Category ('dog', 'dog.png');
var_dump($dog);

$cat = new Category ('cat', 'cat.png');
var_dump($cat);

$anti_fleas = new Product ('anti-fleas', 'anti-fleas.png', 'dog', 40 );
var_dump($anti_fleas);

$wood_kennel = new Kennel ('wood kennel', 'wood-kennel.png', 'dog', 100, 'big' );
var_dump($wood_kennel);

$stuffed_mouse = new Toy ('stuffed mouse', 'stuffed-mouse.png', 'cat', 3, 'polyester', 'stuffed animal' );
var_dump($stuffed_mouse);

$salmon_tin = new Food ('salmon tin', 'salmon-tin.png', 'cat', 5 );
var_dump($salmon_tin);