<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product{
    
    public $material;
    public $type;

    public function __construct($_name, Category $_category, $_price, $_amount, $_material, $_type){
        
        parent::__construct($_name, $_category, $_price, $_amount);

        $this->material = $_material;
        $this->type = $_type;
        
    }
}