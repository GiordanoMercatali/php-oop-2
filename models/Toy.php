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

    // MATERIAL

    public function setMaterial($_material){
        
            $this->material = $_material;
    }

    public function getMaterial(){
       return $this->material;
    }

    // TYPE

    public function setType($_type){
        
            $this->type = $_type;
    }

    public function getType(){
       return $this->type;
    }
}