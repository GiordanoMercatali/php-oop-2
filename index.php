<?php
include 'models/Category.php';

$dog = new Category ('cane', 'dog.png');
// $dog->setName('cane');
// $dog->setIcon('dog.png');

var_dump($dog->getName());