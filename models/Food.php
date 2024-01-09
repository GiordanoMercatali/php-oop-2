<?php

class Food extends Product{
    
    public $expire;

    public function __construct($_name, $_image, $_expire){
        
        parent::__construct($_brand, $_model, 4, $_price, $_fuel_type);

        if(date('Y-m-d') < $_expire ){
            $this->expire = $_expire;
        }
    }

    // public function setExpire($_expire){
    //     if(date('Y-m-d') < $_expire ){
    //         $this->expire = $_expire;
    //     }
    // }
}