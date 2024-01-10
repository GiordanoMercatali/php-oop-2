<?php

require_once __DIR__ . "/Category.php";

class Product{

    protected $name;
    // protected $image;
    protected $category;
    protected $price;
    protected $amount = 0;

    public function __construct($_name, /*$_image,*/ Category $_category, $_price, $_amount){
        $this->name = $_name;
        // $this->image = $_image;
        $this->category = $_category;
        $this->price = $_price;
        $this->amount = $_amount;
    }

    // NAME

    public function setName($_name){
        if(strlen($_name) < 20)
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }

    // IMAGE

    /*public function setImage($_image){
        
        $this->image = $_image;
    }

    public function getImage(){
        return $this->image;
    }*/

    // CATEGORY

    public function setCategory($_category){
        $this->category = $_category;
    }

    public function getCategory(){
        return $this->category;
    }

    // PRICE

    public function setPrice($_price){
        if($_price > 0){
            $this->price = $_price;
        }
    }

    public function getPrice(){
       return $this->price;
    }

    // AMOUNT

    // public function setAmount($_amount){
    //     $this->amount = $_amount;
    // }

    public function getAmount(){
        return $this->amount;
    }

    public function addAmount($amount_to_add){
        $this->amount += $amount_to_add;
    }

    public function removeAmount($amount_to_remove){
        if($this->amount >= $amount_to_remove){
            $this->amount -= $amount_to_remove;
        } else {
            return "Error. Not enough products";
        }
    }

    public function isAvailable($amount){
        if($this->amount >= $amount){
            return true;
        } else {
            return false;
        }
    }

    /* public static function checkPrice($price){
        if($_price > 0){
            return true;
        } else {
            return false;
        }
    } */
        
    // public static function checkCategory($category) {
    //     if (strcmp($category,"dog") || strcmp($category,"cat")) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
    