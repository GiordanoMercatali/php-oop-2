<?php

require_once __DIR__ . "/Product.php";

class Kennel extends Product{
    
    public $size;

    public function __construct($_name, $_image, $_category, $_price, $_size){
        
        parent::__construct($_name, $_image, $_category, $_price);
        $this->size = $_size;
        
    }

    // SIZE

    public function setSize($_size){
        
            $this->size = $_size;
    }

    public function getSize(){
       return $this->size;
    }
}