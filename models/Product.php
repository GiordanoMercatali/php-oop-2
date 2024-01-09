<?php

class Product{
    public $name;
    public $price;
    public $image;
    public $category;

    public function __construct($_name, $_image){
        $this->Name = $_name;
        $this->Image = $_image;
    }


    public function setPrice($_price){
        if($_price > 0){
            $this->price = $_price;
            }
        }
        
}
    