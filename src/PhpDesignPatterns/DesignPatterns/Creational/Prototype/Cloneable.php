<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Prototype;

/**
 * Interface Cloneable
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface Cloneable
{

    /**
     * Clones this object.
     *
     * Basic implementation could look as follows:
     *
     *     public function cloneObject(): Cloneable
     *     {
     *         return clone $this;
     *     }
     *
     * @return Cloneable
     */
    public function cloneObject(): Cloneable;

}
