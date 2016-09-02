<?php

class Bird extends Animal
{
    protected $wings;
    protected $fly_distance;

    public function __construct($name, $age, $color, $breed, $wings, $fly_distance)
    {
        parent::__construct($name, $age);
        $this->setColor($color);
        $this->setBreed($breed);
        $this->setWings($wings);
        $this->setFly_distance($fly_distance);
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
        return $this;
    }

    public function setWings($wings)
    {
        $this->wings = $wings;
        return $this;
    }

    public function setFly_distance($fly_distance)
    {
        $this->fly_distance = $fly_distance;
        return $this;
    }
}