<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\PrivateClassData;

/**
 * Class MainClass
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class MainClass
{

    /**
     * @var DataClass
     */
    private $dataClass;

    /**
     * MainClass constructor.
     *
     * @param string $attribute1
     * @param int $attribute2
     * @param float $attribute3
     */
    public function __construct(string $attribute1, int $attribute2, float $attribute3)
    {
        $this->dataClass = new DataClass($attribute1, $attribute2, $attribute3);
    }

    /**
     * @return DataClass
     */
    public function getDataClass(): DataClass
    {
        return $this->dataClass;
    }

}
