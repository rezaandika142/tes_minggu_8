<?php 

namespace App;
use App\Shape;


class Circle extends Shape
{
    private $radius=10;
    
    public function getArea()
    {
        define("PHI",22/7);
        return M_PI*$this->radius*$this->radius;
    }   
}

