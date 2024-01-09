<?php
class Category {
    public $name; //dogs and cats
    public $icon;

    /**
     * @param mixed $_name
     * @param mixed $_icon
     */
    
    public function __construct($_name, $_icon){
        // $this->setName = $_name;
        // $this->setIcon = $_icon;
        $this->Name = $_name;
        $this->Icon = $_icon;
    }

    // public function getName(){
    //     return $this->name;
    // }
}