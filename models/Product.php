<?php

class Product{
    public $name;
    protected $price;
    public $image;
    public $category;

    public function __construct($_name, $_image, $_category){
        $this->name = $_name;
        $this->image = $_image;
        $this->category = $_category;
    }


    public function setPrice($_price){
        if($_price > 0){
            $this->price = $_price;
            }
    }

    public static function checkPrice($price){
        if($_price > 0){
            return true;
        } else {
            return false;
        }
    }
        
    public static function checkCategory($category) {
        if (strcmp($category,"dog") || strcmp($category,"cat")) {
            return true;
        } else {
            return false;
        }
    }
}
    