<?php


class Shark extends Animal
{
    protected $fins;
    protected $speed;
    protected $teeth;

    public function __construct($name, $age, $fins, $speed, $teeth){
        parent::__construct($name, $age);
        $this->setFins($fins);
        $this->setSpeed($speed);
        $this ->setTeeth($teeth);
    }

    function setFins($fins){
        $this->fins = $fins;
        return $this;
    }


    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

        public function setTeeth($teeth)
    {
        $this->teeth = $teeth;
        return $this;
    }

}