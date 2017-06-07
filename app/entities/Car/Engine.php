<?php

namespace entities\Car;

class Engine
{
    private $power;
    private $capacity;

    public function __construct($power, $capacity)
    {
        $this->power = $power;
        $this->capacity = $capacity;
    }
}