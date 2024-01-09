<?php

class Food extends Product{
    
    protected $expire;

    public function __construct($_name, $_image, $_category){
        
        parent::__construct($_name, $_image, $_category);
    }

     public function setExpire($_expire){
         if(date('Y-m-d') < $_expire ){
             $this->expire = $_expire;
         }
     }
}