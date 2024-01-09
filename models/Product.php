<?php



class Product{
    public $name;
    public $image;
    protected $category;
    protected $price;

    public function __construct($_name, $_image, $_category){
        $this->name = $_name;
        $this->image = $_image;
        $this->category = $_category;
        // $this->price = $_price;
    }


    public function setPrice($_price){
        if($_price > 0){
            $this->price = $_price;
        }
    }

    public function getPrice(){
       return $this->price;
    }

    /* public static function checkPrice($price){
        if($_price > 0){
            return true;
        } else {
            return false;
        }
    } */
        
    public static function checkCategory($category) {
        if (strcmp($category,"dog") || strcmp($category,"cat")) {
            return true;
        } else {
            return false;
        }
    }
}
    