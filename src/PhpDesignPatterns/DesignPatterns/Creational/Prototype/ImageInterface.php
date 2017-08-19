<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Prototype;

/**
 * Interface ImageInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface ImageInterface extends Cloneable
{

    /**
     * @return int
     */
    public function getHeight(): int;

    /**
     * @param int $height
     *
     * @return ImageInterface
     */
    public function setHeight(int $height): ImageInterface;

    /**
     * @return int
     */
    public function getWidth(): int;

    /**
     * @param int $width
     *
     * @return ImageInterface
     */
    public function setWidth(int $width): ImageInterface;

}
