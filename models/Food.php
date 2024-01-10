<?php

require_once __DIR__ . "/Product.php";

class Food extends Product{
    
    protected $expire;

    public function __construct($_name, /*$_image,*/ Category $_category, $_price, $_amount, $_expire){
        
        parent::__construct($_name, /*$_image,*/  $_category, $_price, $_amount);
        $this->expire = $_expire;
    }

     public function setExpire($_expire){
         if(date('d-m-Y') < $_expire ){
             $this->expire = $_expire;
         } else {
            return "Expired";
         }
     }

     public function getExpire(){
        return $this->expire;
     }
}