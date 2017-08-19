<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Prototype;

/**
 * Class Image
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class Image implements ImageInterface
{

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $width;

    /**
     * @inheritDoc
     */
    public function cloneObject(): Cloneable
    {
        return clone $this;
    }

    /**
     * @inheritDoc
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @inheritDoc
     */
    public function setHeight(int $height): ImageInterface
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @inheritDoc
     */
    public function setWidth(int $width): ImageInterface
    {
        $this->width = $width;

        return $this;
    }

}
