<?php

namespace app\entities\Car;

class Wheel
{
    /**
     * @var WheelType
     */
    private $type;

    /**
     * Радиус
     * @var int
     */
    private $radius;

    /**
     * Цвет
     * @var string
     */
    private $color;

    /**
     * Количество колес
     * @var int|null
     */
    private $number = 4;

    /**
     * Wheel constructor.
     * @param $type
     * @param $radius
     * @param $color
     * @param null|int $number
     * @throws \Exception
     */
    public function __construct(WheelType $type, $radius, $color, $number = null)
    {
        $this->type     = $type;
        $this->radius   = $radius;
        $this->color    = $color;
        if ($number) {
            $this->number = $number;
        }
    }
}
