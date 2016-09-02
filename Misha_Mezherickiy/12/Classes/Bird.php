<?php


class Bird extends Animal
{
    protected $canFly;
    protected $size;

    public function __construct($name,$age,$size,$canFly)
    {
        $this->setAge($age);
        $this->setCanFly($canFly);
        $this->setSize($size);
        $this->setName($name);
    }

    public function setCanFly($canFly)
    {
        $this->canFly = $canFly;
        return $this;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sing()
    {
        $name = $this->getName();
        echo "My name is $name";
    }
}