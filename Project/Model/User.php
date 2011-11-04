<?php
namespace Project\Model;

class User {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
}

