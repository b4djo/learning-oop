<?php
ini_set('display_errors', 1);
require_once dirname(__DIR__) . '/app/bootstrap.php';
require_once dirname(__DIR__) . '/app/entities/Car/Car.php';
require_once dirname(__DIR__) . '/app/entities/Car/Engine.php';
require_once dirname(__DIR__) . '/app/entities/Car/Wheel.php';
require_once dirname(__DIR__) . '/app/entities/Car/WheelType.php';

$car = new \entities\Car\Car(
    new \entities\Car\Engine(350, 4.0),
    new \entities\Car\Wheel(\entities\Car\WheelType::TYPE_CAST, 21, 'black')
);

echo "<pre>";
var_dump($car);
echo "</pre>";
