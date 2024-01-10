<?php

require_once __DIR__ . "/Product.php";

class Food extends Product{
    
    protected $expire;
    protected $flavor;

    public function __construct($_name, /*$_image,*/ Category $_category, $_price, $_amount, $_expire, $_flavor){
        
        parent::__construct($_name, /*$_image,*/  $_category, $_price, $_amount);
        $this->expire = $_expire;
        $this->flavor = $_flavor;
    }

     public function setExpire($_expire){
         if(date('d/m/y') > $_expire ){
            $this->expire = $_expire;
         } else {
            return "Expired";
         }
     }

     public function getExpire(){
        return $this->expire;
     }

     public function setFlavor($_flavor){
            $this->flavor = $_flavor;
    }

    public function getFlavor(){
       return $this->flavor;
    }
}