<?php
class Category {
    // public $name;
    // public $icon;

    private $name;
    private $icon;

    /**
     * @param mixed $_name
     * @param mixed $_icon
     */
    
    public function __construct($_name, $_icon){
        // $this->setName = $_name;
        // $this->setIcon = $_icon;
        $this->name = ucfirst($_name);
        $this->icon = $_icon;
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }

    public function setIcon($_icon){
        $this->icon = $_icon;
    }

    public function getIcon(){
        return $this->icon;
    }
}