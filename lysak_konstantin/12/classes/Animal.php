<?php

 abstract class Animal {
    protected $canMove = true;
    protected $name;
    protected $age;


    public function __construct($name, $age){
        $this->setName($name);
        $this->setAge($age);
    }


    public function setAge($age){
        $this->age = $age;
        return $this;
    }

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getInfo(){
        return 'Name: '.$this->name . ', Age: '.$this->age;
    }
}