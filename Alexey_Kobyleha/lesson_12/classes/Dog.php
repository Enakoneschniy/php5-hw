<?php

final class Dog extends Animal
{
    protected $color;
    protected $breed;

    public function __construct($name, $age, $color, $breed)
    {
        parent::__construct($name, $age);
        $this->setColor($color);
        $this->setBreed($breed);
    }


    public function setBreed($breed)
    {
        $this->breed = $breed;
        return $this;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getInfo()
    {
        return parent::getInfo() . ', Порода: ' . $this->breed . ', Цвет: ' . $this->color;
    }

}