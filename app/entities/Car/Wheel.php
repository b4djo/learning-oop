<?php

namespace entities\Car;

class Wheel
{
    private $type;
    private $radius;
    private $color;
    private $number = 4;

    public function __construct($type, $radius, $color, $number = null)
    {
        if (!in_array($type, array_keys(WheelType::$listTypes))) {
            throw new \Exception('Не правильно выбран тип дисков');
        }

        $this->type = $type;
        $this->radius = $radius;
        $this->color = $color;
        if ($number) {
            $this->number = $number;
        }
    }

    private function setType()
    {
        $this->type = new WheelType($this->type);
    }
}
