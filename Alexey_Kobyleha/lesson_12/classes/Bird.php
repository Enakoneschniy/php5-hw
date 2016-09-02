<?php

class Bird extends Animal
{
    protected $color;
    protected $subClass;
    protected $canFly = true;

    public function __construct($name, $age, $color, $subClass, $canFly)
    {
        parent::__construct($name, $age);
        $this->setColor($color);
        $this->setSubClass($subClass);
        $this->setCanFly($canFly);
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setSubClass($subClass)
    {
        $this->subClass = $subClass;
        return $this;
    }

    public function setCanFly(bool $canFly)
    {
        $this->canFly = $canFly;
        return $this;
    }

    public function getInfo()
    {
        if ($this->canFly === true) {
            $fly = 'Да';
        } else {
            $fly = 'Нет';
        }
        return parent::getInfo() . ', Цвет: ' . $this->color . ', Подкласс: ' . $this->subClass . ', Может летать: ' . $fly;

    }

}