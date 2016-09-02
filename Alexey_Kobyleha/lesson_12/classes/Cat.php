<?php

class Cat extends Animal
{
    protected $color;
    protected $home = true;
    protected $catchesMouse = true;

    public function __construct($name, $age, $color, $home, $catchesMouse)
    {
        parent::__construct($name, $age);
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setHome($home)
    {
        $this->home = $home;
        return $this;
    }

    public function setCatchesMouse(bool $catchesMouse)
    {
        $this->catchesMouse = $catchesMouse;
        return $this;
    }

    public function getInfo()
    {
        if ($this->catchesMouse === true) {
            $catchesMouse = 'Да';
        } else {
            $catchesMouse = 'Нет';
        }
        if ($this->home === true) {
            $home = 'Да';
        } else {
            $home = 'Нет';
        }
        return parent::getInfo() . ', Цвет: ' . $this->color . ', Домашняя: ' . $home . ', Ловит мышей: ' . $catchesMouse;

    }

}