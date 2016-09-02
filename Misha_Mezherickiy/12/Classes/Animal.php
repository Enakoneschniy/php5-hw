<?php

/**
 * Created by PhpStorm.
 * User: MIXA
 * Date: 02.09.2016
 * Time: 20:51
 */
class Animal
{
    protected $name;
    protected $age;

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}