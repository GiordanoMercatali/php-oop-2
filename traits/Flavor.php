<?php

trait Flavor {
    private $flavor;

    public function setFlavor($_flavor) {
        if(strlen($_flavor) < 20) {
            $this->flavor = $_flavor;
        }
    }

    public function getFlavor() {
        return $this->flavor ;
    }
}