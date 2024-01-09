<?php

class Kennel extends Product{
    
    public $size;

    public function __construct($_name, $_image, $_category, $_size){
        
        parent::__construct($_name, $_image, $_category);

        
    }
}