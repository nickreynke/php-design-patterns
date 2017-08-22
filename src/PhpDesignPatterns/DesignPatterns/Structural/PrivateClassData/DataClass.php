<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\PrivateClassData;

/**
 * Class DataClass
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class DataClass
{

    /**
     * @var string
     */
    private $attribute1;

    /**
     * @var int
     */
    private $attribute2;

    /**
     * @var float
     */
    private $attribute3;

    /**
     * DataClass constructor.
     *
     * @param string $attribute1
     * @param int $attribute2
     * @param float $attribute3
     */
    public function __construct(string $attribute1, int $attribute2, float $attribute3)
    {
        $this->attribute1 = $attribute1;
        $this->attribute2 = $attribute2;
        $this->attribute3 = $attribute3;
    }

    /**
     * @return string
     */
    public function getAttribute1(): string
    {
        return $this->attribute1;
    }

    /**
     * @return int
     */
    public function getAttribute2(): int
    {
        return $this->attribute2;
    }

    /**
     * @return float
     */
    public function getAttribute3(): float
    {
        return $this->attribute3;
    }

}
