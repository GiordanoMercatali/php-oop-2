<?php

require_once __DIR__ . "/Product.php";

class Kennel extends Product{
    
    public $size;

    public function __construct($_name, $_image, $_category, $_price, $_size){
        
        parent::__construct($_name, $_image, $_category, $_price);
        $this->size = $_size;
        
    }
}