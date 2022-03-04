<?php
class Program1
{
    private $number;
    
    public function __construct($number)
    {
        $this->number = $number;
    }

    public function modulus($divisor) 
    {
        if($divisor > $this->number) 
        {
            throw new \InvalidArgumentException("Divisor should not greater than dividend");
        }
        else if(!is_numeric($divisor)) 
        {
            throw new \InvalidArgumentException("Divisor is not a number");
        }

        return $this->number % $divisor;
    }
}