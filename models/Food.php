<?php

require_once __DIR__ . "/Product.php";

class Food extends Product{
    
    protected $expiration_date;
    protected $flavor;

    public function __construct($_name, /*$_image,*/ Category $_category, $_price, $_amount, $_expiration_date, $_flavor){
        
        parent::__construct($_name, /*$_image,*/  $_category, $_price, $_amount);
        $this->setExpired($_expiration_date);
        $this->flavor = $_flavor;
    }

     public function setExpired($_expiration_date){
         if(date('Y-m-d') < $_expiration_date ){
            $this->expiration_date = $_expiration_date;
         } else {
            return $this->expiration_date = "Expired";
         }
     }

     public function getExpired(){
        return $this->expiration_date;
     }

     public function setFlavor($_flavor){
            $this->flavor = $_flavor;
    }

    public function getFlavor(){
       return $this->flavor;
    }
}