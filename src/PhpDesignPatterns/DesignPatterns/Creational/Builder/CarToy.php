<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder;

/**
 * Class Car
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class CarToy implements ToyInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        // Just for demonstration purposes.
        return 'Car Toy';
    }

}
