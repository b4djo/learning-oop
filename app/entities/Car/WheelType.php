<?php
namespace app\entities\Car;

class WheelType
{
    const TYPE_CAST     = 'cast';
    const TYPE_STAMPED  = 'stamped';

    private $type;

    public static $listTypes = [
        self::TYPE_CAST     => 'Литые',
        self::TYPE_STAMPED  => 'Штампованные'
    ];

    public function __construct($value)
    {
        $this->type = $value;
    }
}