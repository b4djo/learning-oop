<?php

namespace app\entities\Car;

/**
 * Class Engine
 * @package app\entities\Car
 */
class Engine
{
    /**
     * Мощность
     * @var
     */
    private $power;

    /**
     * Объем двигателя
     * @var
     */
    private $capacity;

    /**
     * Оснащен ли турбиной
     * @var
     */
    private $isTurbo;

    /**
     * Engine constructor.
     * @param $power
     * @param $capacity
     * @param $isTurbo
     */
    public function __construct($power, $capacity, $isTurbo)
    {
        $this->power = $power;
        $this->capacity = $capacity;
        $this->isTurbo = $isTurbo;
    }
}
