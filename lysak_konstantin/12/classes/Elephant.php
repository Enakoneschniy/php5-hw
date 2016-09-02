<?php



class Elephant extends Animal
{
    protected $weight;
    protected $ears;
    protected $tail;

    public function __construct($name, $age, $weight, $ears, $tail)
{
    parent::__construct($name, $age);
    $this->setWeight($weight);
    $this->setEars($ears);
    $this->setTail($tail);

    }

        public function setWeight($weight)
    {
        $this->weight = $weight;
    }
        public function setEars($ears){
        $this ->ears = $ears;
        return $this;
    }
        public function setTail($tail){
            $this ->tail = $tail;
            return $this;
        }


}