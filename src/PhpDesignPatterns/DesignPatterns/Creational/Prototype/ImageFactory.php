<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Prototype;

/**
 * Class ImageFactory
 *
 * Registry for images.
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class ImageFactory implements ImageFactoryInterface
{

    /**
     * @var Cloneable
     */
    private $prototype;

    /**
     * @inheritDoc
     */
    public function clonePrototype(): Cloneable
    {
        if ($this->prototype === null) {
            $this->prototype = new Image();
        }

        return $this->prototype->cloneObject();
    }

}
