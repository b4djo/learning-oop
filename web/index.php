<?php
ini_set('display_errors', 1);

require __DIR__ . '/../app/bootstrap.php';

$car = new \app\entities\Car\Car(
    new \app\entities\Car\Engine(350, 4.0, true),
    new \app\entities\Car\Wheel(
        new \app\entities\Car\WheelType(\app\entities\Car\WheelType::TYPE_CAST), 21, 'black'
    )
);

echo "<pre>";
var_dump($car);
echo "</pre>";
