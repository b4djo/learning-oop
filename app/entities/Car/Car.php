<?php

namespace entities\Car;

/**
 * Автомобиль
 * Class Car
 * @package entities\Car
 */
class Car
{
    /**
     * Двигатель
     * @var Engine
     */
    private $engine;

    /**
     * Колеса
     * @var Wheel
     */
    private $wheel;

    /**
     * Car constructor.
     * @param Engine $engine
     * @param Wheel $wheel
     */
    public function __construct(Engine $engine, Wheel $wheel)
    {
        if (!$engine || !$wheel) {
            throw new \DomainException('Автомобиль должен быть оснащен двигателем и колесами.');
        }

        $this->engine = $engine;
        $this->wheel = $wheel;
    }
}
