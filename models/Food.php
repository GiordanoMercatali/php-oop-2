<?php

require_once __DIR__ . "/Product.php";

class Food extends Product{
    
    protected $expire;

    public function __construct($_name, $_image, $_category, $_price){
        
        parent::__construct($_name, $_image, $_category, $_price);
    }

     public function setExpire($_expire){
         if(date('Y-m-d') < $_expire ){
             $this->expire = $_expire;
         }
     }
}