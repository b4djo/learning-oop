<?php
// Autoloader classes
require __DIR__ . '/../app/AutoLoader.php';
$autoloader = new \app\AutoLoader();
$autoloader->register();
$autoloader->addNamespace('app\entities\Car', realpath(dirname(__DIR__)) . '\app\entities\Car');