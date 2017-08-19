<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Prototype;

/**
 * Interface PrototypeFactoryInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface PrototypeFactoryInterface
{

    /**
     * @return Cloneable
     */
    public function clonePrototype(): Cloneable;

}
