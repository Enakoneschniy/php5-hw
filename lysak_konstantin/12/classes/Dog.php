<?php

final class Dog extends Animal{
    protected $color;
    protected $breed;//порода

    public function __construct($name, $age, $color, $breed){
        parent::__construct($name, $age);
        $this->setColor($color);
        $this->setBreed($breed);

    }
    public function getInfo(){
        return parent::getInfo().', Color: '.$this->color.', Breed: '. $this->breed;
    }

    public function setColor($color){
        $this->color = $color;
        return $this;
    }

    public function setBreed($breed){
        $this->breed = $breed;
        return $this;
    }

}