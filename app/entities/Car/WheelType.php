<?php
namespace app\entities\Car;

class WheelType
{
    const TYPE_CAST     = 'cast';
    const TYPE_STAMPED  = 'stamped';

    /**
     * @var string
     */
    private $type;

    /**
     * Список типов
     * @var array
     */
    public static $listTypes = [
        self::TYPE_CAST     => 'Литые',
        self::TYPE_STAMPED  => 'Штампованные'
    ];

    /**
     * WheelType constructor.
     * @param $type
     * @throws \Exception
     */
    public function __construct($type)
    {
        if (!in_array($type, array_keys(self::$listTypes))) {
            throw new \Exception('Не правильно выбран тип дисков');
        }

        $this->type = $type;
    }
}