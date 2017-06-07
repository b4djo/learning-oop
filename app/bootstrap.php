<?php
function myAutoLoad($className)
{
    $class_pieces = explode('\\', $className);
    switch ($class_pieces[1]) {
        case 'core':
            require_once dirname(__DIR__) . '/app/entities/Car/' . $class_pieces[2] . '.php';
            break;
    }

}
spl_autoload_register('myAutoLoad');
