<?php

class Toy extends Product{
    
    public $material;
    public $type;

    public function __construct($_name, $_image, $_category, $_material, $_type){
        
        parent::__construct($_name, $_image, $_category);

        $this->material = $_material;
        $this->type = $_type;
        
    }
}